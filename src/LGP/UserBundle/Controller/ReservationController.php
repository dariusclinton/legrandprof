<?php

namespace LGP\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class ReservationController extends Controller {
  
  /**
   * @Security("has_role('ROLE_USER')")
   */
  public function indexAction() {
    $user = $this->getUser();
    if (!$user) {
      $this->createNotFoundException('Utilisateur inconnu.');
    }
    
    $reservations = $user->getReservations();
    
    return $this->render('LGPUserBundle:Reservation:index.html.twig', array(
      'reservations' => $reservations
    ));
  }
}
