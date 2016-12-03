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
  public function addAction(Request $request) {

    if ($request->getMethod() == 'POST') {
      // Envoi de sms au numero
      $telephone = $request->request->get('telephone');

      $url = 'https://rest.nexmo.com/sc/us/2fa/json?' . http_build_query([
          'api_key' => 'ef2cbb9e',
          'api_secret' => '32d637ba9e317ea1',
          'to' => $telephone,
          'pin' => '4080'
        ]);
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $response = curl_exec($ch);

      //Decode the json object you retrieved when you ran the request.
      $decoded_response = json_decode($response, true);

      error_log('You sent ' . $decoded_response['message-count'] . ' messages.');

      foreach ( $decoded_response['messages'] as $message ) {
        if ($message['status'] == 0) {
          error_log("Success " . $message['message-id']);
        } else {
          error_log("Error {$message['status']} {$message['error-text']}");
        }
      }
      
      // affichage de la page de confirmation
      return $this->render('LGPUserBundle:Telephone:confirm.html.twig', array(
        'telephone' => $telephone
      ));
    }
    
    return $this->redirectToRoute('fos_user_profile_show');
  }
}