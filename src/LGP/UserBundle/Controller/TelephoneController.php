<?php
/**
 * Created by PhpStorm.
 * User: tsafack
 * Date: 01/12/16
 * Time: 21:00
 */

namespace LGP\UserBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;

class TelephoneController extends Controller
{
  /**
   * @param Request $request
   * @Security("has_role('ROLE_USER')")
   */
  public function addAction(Request $request)
  {

    if ($request->getMethod() == 'POST') {
      // Envoi de sms au numero
      $telephone_param = $request->request->get('telephone');
      $telephone = '237' . $telephone_param;

      $api_key = $this->getParameter('nexmo_api_key');
      $api_secret = $this->getParameter('nexmo_api_secret');

      $url = 'https://api.nexmo.com/verify/json?api_key=' . $api_key . '&api_secret=' . $api_secret . '&number=' . $telephone . '&brand=Legrandprof';

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $response = curl_exec($ch);
      $rep = json_decode($response);

      // Placement de l'id de la requete de verification dans la session
      $session = $request->getSession();
      $session->set('request_id', $rep->{'request_id'});
      $session->set('telephone', $telephone);
      $session->set('is_phone1', true);


      // affichage de la page de confirmation
      return $this->render('LGPUserBundle:Telephone:confirm.html.twig');
    }

    return $this->redirectToRoute('fos_user_profile_show');
  }

  /**
   * @param Request $request
   * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
   */
  public function add2Action(Request $request) {
    if ($request->getMethod() == 'POST') {
      // Envoi de sms au numero
      $telephone_param = $request->request->get('telephone2');
      $telephone = '237' . $telephone_param;

      $api_key = $this->getParameter('nexmo_api_key');
      $api_secret = $this->getParameter('nexmo_api_secret');

      $url = 'https://api.nexmo.com/verify/json?api_key=' . $api_key . '&api_secret=' . $api_secret . '&number=' . $telephone . '&brand=Legrandprof';

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $response = curl_exec($ch);
      $rep = json_decode($response);

      // Placement de l'id de la requete de verification dans la session
      $session = $request->getSession();
      $session->set('request_id', $rep->{'request_id'});
      $session->set('telephone', $telephone);
      $session->set('is_phone1', false);

      // affichage de la page de confirmation
      return $this->render('LGPUserBundle:Telephone:confirm.html.twig');
    }

    return $this->redirectToRoute('fos_user_profile_show');
  }

  /**
   * @param Request $request
   */
  public function confirmAction(Request $request) {
    if ($request->getMethod() == 'POST') {

      $code = $request->request->get('code_confirmation');

      $session = $request->getSession();
      $request_id = $session->get('request_id');
      $telephone = $session->get('telephone');
      $is_phone1 = $session->get('is_phone1');

      $url = 'https://api.nexmo.com/verify/check/json?api_key=ef2cbb9e&api_secret=32d637ba9e317ea1&request_id=' . $request_id . '&code='. $code;

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $response = curl_exec($ch);

      $rep = json_decode($response);

      if ($rep->{'status'} == 0) {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();

        if ($user) {
          if ($is_phone1) {
            $user->setTelephone($telephone);
          } else {
            $user->setTelephone2($telephone);
          }

          $em->flush();
        }
      }

      $session->set('telephone', null);
      $session->set('is_phone1', null);

      return $this->redirectToRoute('fos_user_profile_show');
    }
  }


}