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
//
//      $url = 'https://rest.nexmo.com/sms/json?' . http_build_query(
//          [
//            'api_key' =>  'ef2cbb9e',
//            'api_secret' => '32d637ba9e317ea1',
//            'to' => $telephone,
//            'from' => '237695546784',
//            'text' => 'Hello from Nexmo! custom Dariuso'
//          ]
//        );
//
//      $ch = curl_init($url);
//      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//      $response = curl_exec($ch);
//
//      echo $response;
//
//      //Decode the json object you retrieved when you ran the request.
//      $decoded_response = json_decode($response, true);
//
//      error_log('You sent ' . $decoded_response['message-count'] . ' messages.');
//
//      foreach ( $decoded_response['messages'] as $message ) {
//        if ($message['status'] == 0) {
//          error_log("Success " . $message['message-id']);
//        } else {
//          error_log("Error {$message['status']} {$message['error-text']}");
//        }
//      }

      $url = 'https://api.nexmo.com/verify/json?api_key=ef2cbb9e&api_secret=32d637ba9e317ea1&number=' . $telephone . '&brand=Legrandprof';

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $response = curl_exec($ch);
      $rep = json_decode($response);

      // Placement de l'id de la requete de verification dans la session
      $session = $request->getSession();
      $session->set('request_id', $rep->{'request_id'});
      $session->set('telephone', $telephone);


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

      $url = 'https://api.nexmo.com/verify/check/json?api_key=ef2cbb9e&api_secret=32d637ba9e317ea1&request_id=' . $request_id . '&code='. $code;

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $response = curl_exec($ch);

      $rep = json_decode($response);

      if ($rep->{'status'} == 0) {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();

        if ($user) {
          $user->setTelephone($telephone);
          $em->flush();
        }
      }

      return $this->redirectToRoute('fos_user_profile_show');
    }
  }
}