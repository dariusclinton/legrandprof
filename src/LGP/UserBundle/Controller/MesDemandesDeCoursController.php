<?php

namespace LGP\UserBundle\Controller;

use Doctrine\Common\Collections\ArrayCollection;
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
   * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
   */
  public function editAction(ReservationEnseignement $reservationEnseignement, Request $request) {
    $prof = $this->getUser();

    if ($prof === null) {
      throw $this->createNotFoundException('Utilisateur inconnu !');
    }

    /*
      On sauvegarde les anciennes valeurs des arrayCollection
      afin de supprimer les valeurs qui ont ete supprimees dans les vue
    */
    $originalEntreesProgrammes = new ArrayCollection();
    $originalSeancesDeCours = new ArrayCollection();
    $originalEvaluations = new arrayCollection();

    foreach ($reservationEnseignement->getProgrammeDeCours()->getEntreesProgrammes() as $entree) {
      $originalEntreesProgrammes->add($entree);
    }

    foreach ($reservationEnseignement->getSeancesDeCours() as $seance) {
      $originalSeancesDeCours->add($seance);
    }

    foreach ($reservationEnseignement->getEvaluations() as $evaluation) {
      $originalEvaluations->add($evaluation);
    }



    // Creation du formulaire
    $form = $this->createForm(ReservationEnseignementType::class, $reservationEnseignement);
    $form->handleRequest($request);
    
    if ($form->isSubmitted() && $form->isValid()) {
      $em = $this->getDoctrine()->getManager();

      // Remove relationShip between reservationEnseignement and entreeProgramme
      foreach ($originalEntreesProgrammes as $entree) {
        if (false === $reservationEnseignement->getProgrammeDeCours()->getEntreesProgrammes()->contains($entree))
          $em->remove($entree);
      }

      // Remove relationShip between reservationEnseignement ans SeanceDecours
      foreach ($originalSeancesDeCours as $seance) {
        if (false === $reservationEnseignement->getSeancesDeCours()->contains($seance))
          $em->remove($seance);
      }

      // Remove relationShip between reservationEnseignement ans Evaluation
      foreach ($originalEvaluations as $evaluation) {
        if (false === $reservationEnseignement->getEvaluations()->contains($evaluation))
          $em->remove($evaluation);
      }


      // Attribution du prof courant à chaque seance de cours
      foreach ($reservationEnseignement->getSeancesDeCours() as $seance) {
        $seance->setProf($prof);
      }

      // Attribution du prof courant a chaque evaluation
      foreach ($reservationEnseignement->getEvaluations() as $evaluation) {
        $evaluation->setProf($prof);
      }

      // Validation
      $em->flush();
      
      return $this->redirectToRoute('lgp_user_prof_demandes_de_cours');
    }


    // On retourne le formulaire
    return $this->render('LGPUserBundle:MesDemandesDeCours:edit.html.twig', array(
      'form'                    => $form->createView(),
      'reservationEnseignement' => $reservationEnseignement
    ));
  }
}
