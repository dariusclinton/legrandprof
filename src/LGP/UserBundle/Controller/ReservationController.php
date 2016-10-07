<?php

namespace LGP\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use LGP\ReservationBundle\Entity\ReservationEnseignement;

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

  /**
   * @param ReservationEnseignement $reservationEnseignement
   *
   * @Security("has_role('ROLE_USER')")
   *
   * @return \Symfony\Component\HttpFoundation\Response
   */
  public function showProgrammeAndJoursDeCoursAction(ReservationEnseignement $reservationEnseignement) {
    $entreesProgramme = $reservationEnseignement->getProgrammeDeCours()->getEntreesProgrammes();
    $joursDeCours = $reservationEnseignement->getJoursDeCours();

    return $this->render('LGPUserBundle:Reservation:showProgrammeAndJoursDeCours.html.twig', array(
      'entreesProgramme' => $entreesProgramme,
      'joursDeCours'      => $joursDeCours,
      'reservationEnseignement' => $reservationEnseignement
    ));
  }
}
