<?php

namespace LGP\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use LGP\UserBundle\Form\AvisType;
use LGP\UserBundle\Entity\Avis;

class AvisController extends Controller {
  
  /**
   * 
   * @return type
   * @throws type
   */
  public function parentAction() {
    $parent = $this->getUser();
    
    if ($parent === null) {
      throw $this->createNotFoundException('Utilisateur inconnu !');
    }
    
    $rep = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('LGPUserBundle:Avis');
    
    $avis = $rep->findBy(array('parent' => $parent));
    
    return $this->render('LGPUserBundle:Avis:parent.html.twig', array(
      'avis' => $avis
    ));
  }
  
    
  /**
   * 
   * @return type
   * @throws type
   */
  public function profAction() {
    $prof = $this->getUser();
    
    if ($prof === null) {
      throw $this->createNotFoundException('Utilisateur inconnu !');
    }
    
    $rep = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('LGPUserBundle:Avis');
    
    $avis = $rep->findBy(array('prof' => $prof));
    
    return $this->render('LGPUserBundle:Avis:prof.html.twig', array(
      'avis' => $avis
    ));
  }
  
  /**
   * 
   * @param Request $request
   * @return type
   * @throws type
   */
  public function addAction(Request $request) {
    $parent = $this->getUser();
    
    if ($parent === null) {
      throw $this->createNotFoundException('Utilisateur inconnu !');
    }
    
    $avis = new Avis();
    $form = $this->createForm(AvisType::class, $avis);
    
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
      
      $avis->setParent($parent);
      
      // On persiste l'entite
      $em = $this->getDoctrine()->getManager();
      $em->persist($avis);
      $em->flush();
      
      return $this->redirectToRoute('lgp_user_parent_avis');
    }
    
    return $this->render('LGPUserBundle:Avis:add.html.twig', array(
      'form' => $form->createView()
    ));
  }

  /**
   * 
   * @param Avis $avis
   * @param Request $request
   * @return type
   */
  public function updateAction(Avis $avis, Request $request) {
    $parent = $this->getUser();
    
    if ($parent === null) {
      throw $this->createNotFoundException('Utilisateur inconnu !');
    }
    
    $form = $this->createForm(AvisType::class, $avis);
    
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
      // On enrgistre
      $em = $this->getDoctrine()->getManager();
      $em->flush();
      
      return $this->redirectToRoute('lgp_user_parent_avis');
    }
    
    return $this->render('LGPUserBundle:Avis:update.html.twig', array(
      'form' => $form->createView()
    ));
  }
  /**
   * 
   * @param Avis $avis
   * @return type
   */
  public function profDeleteAction(Avis $avis) {
    $prof = $this->getUser();
    
    if ($prof === null) {
      throw $this->createNotFoundException('Utilisateur inconnu !');
    }
    
    $em = $this
        ->getDoctrine()
        ->getManager();
    
    // Suppression
    $em->remove($avis);
    $em->flush();
    
    return $this->redirectToRoute('lgp_user_prof_avis');
  }

  /**
   * 
   * @param Avis $avis
   * @return type
   */
  public function parentDeleteAction(Avis $avis) {
    $parent = $this->getUser();
    
    if ($parent === null) {
      throw $this->createNotFoundException('Utilisateur inconnu !');
    }
    
    $em = $this
        ->getDoctrine()
        ->getManager();
    
    // Suppression
    $em->remove($avis);
    $em->flush();
    
    return $this->redirectToRoute('lgp_user_parent_avis');
  }
}
