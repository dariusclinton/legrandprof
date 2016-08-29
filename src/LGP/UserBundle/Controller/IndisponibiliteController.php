<?php

namespace LGP\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use LGP\UserBundle\Entity\Indisponibilite;
use LGP\UserBundle\Form\IndisponibiliteType;
use Symfony\Component\HttpFoundation\Request;

class IndisponibiliteController extends Controller {
  
  public function indexAction() {
    $prof = $this->getUser();
    
    if ($prof === null) {
      throw $this->createNotFoundException('Utilisateur inconnu !');
    }
    
    $rep = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('LGPUserBundle:Indisponibilite');
    
    $indisponibilites = $rep->findBy(array('prof' => $prof));
    
    return $this->render('LGPUserBundle:Indisponibilite:index.html.twig', array(
      'indisponibilites' => $indisponibilites
    ));
  }
  
  /**
   * 
   * @param \LGP\UserBundle\Controller\Request $request
   * @throws type
   */
  public function addAction(Request $request) {
    $prof = $this->getUser();
    
    if ($prof === null) {
      throw $this->createNotFoundException('Utilisateur inconnu !');
    }
    
    $indispo = new Indisponibilite();
    
    $form = $this->createForm(IndisponibiliteType::class, $indispo);
    
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
      $indispo->setProf($prof);
      
      //Enregistrement
      $em = $this->getDoctrine()->getManager();
      $em->persist($indispo);
      $em->flush();
      
      return $this->redirectToRoute('lgp_user_prof_indisponibilite');
    }
    
    return $this->render('LGPUserBundle:Indisponibilite:add.html.twig', array(
      'form' => $form->createView()
    ));
  }
  
  /**
   * 
   * @param Indisponibilite $indispo
   * @return type
   */
  public function deleteAction(Indisponibilite $indispo) {
    $prof = $this->getUser();
    
    if ($prof === null) {
      throw $this->createNotFoundException('Utilisateur inconnu !');
    }
    
    $em = $this->getDoctrine()->getManager();
    
    $em->remove($indispo);
    $em->flush();
    
    return $this->redirectToRoute('lgp_user_prof_indisponibilite');
  }
  
  /**
   * 
   * @param Indisponibilite $indispo
   * @param Request $request
   * @return type
   * @throws type
   */
  public function updateAction(Indisponibilite $indispo, Request $request) {
    $prof = $this->getUser();
    
    if ($prof === null) {
      throw $this->createNotFoundException('Utilisateur inconnu !');
    }
    
    $form = $this->createForm(IndisponibiliteType::class, $indispo);
    
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
      
      //Enregistrement
      $em = $this->getDoctrine()->getManager();
      $em->flush();
      
      return $this->redirectToRoute('lgp_user_prof_indisponibilite');
    }
    
    return $this->render('LGPUserBundle:Indisponibilite:update.html.twig', array(
      'form' => $form->createView()
    ));
  }
}
