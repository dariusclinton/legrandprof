<?php

namespace LGP\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use LGP\ReservationBundle\Entity\ReservationEnseignement;
use Symfony\Component\HttpFoundation\Request;
use LGP\ReservationBundle\Form\ReservationEnseignementType;

/**
 * Description of MesDemandesDeCoursController
 *
 * @author tsafack
 */
class MesDemandesDeCoursController extends Controller {
  
  /**
   * @Security("has_role('ROLE_PROF')")
   */
  Public function indexAction() {
    $prof = $this->getUser();
    
    if (!$prof) {
      $this->createNotFoundException('Utilisateur inconnu.');
    }
    
    // On recupere tous les enseignements du prof
    $enseignements = $prof->getEnseignements();
    
    $reservation_enseignements = array();
    
    // On recupere toutes les reservations qui concerne les enseignements du prof
    foreach ($enseignements as $enseignement) {
      $reservation_enseignements[] = $enseignement->getReservationEnseignements();
    }

    return $this->render('LGPUserBundle:MesDemandesDeCours:index.html.twig', array(
      'reservation_enseignements' => $reservation_enseignements
    ));
  }
  
  /**
   * 
   * @param ReservationEnseignement $reservationEnseignement
   * @param Request $request
   * 
   * @Security("has_role('ROLE_PROF')")
   */
  public function editAction(ReservationEnseignement $reservationEnseignement, Request $request) {
    $form = $this->createForm(
        ReservationEnseignementType::class, 
        $reservationEnseignement
      );
    
    $form->handleRequest($request);
    
    if ($form->isSubmitted() && $form->isValid()) {
      $em = $this->getDoctrine()->getManager();
      
      $em->flush();
      
      return $this->redirectToRoute('lgp_user_prof_demandes_de_cours');
    }
    
    return $this->render('LGPUserBundle:MesDemandesDeCours:edit.html.twig', array(
      'form'                    => $form->createView(),
      'reservationEnseignement' => $reservationEnseignement
    ));
  }
}
