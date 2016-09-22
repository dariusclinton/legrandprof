<?php

namespace LGP\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use LGP\UserBundle\Entity\Anomalie;
use LGP\UserBundle\Form\AnomalieType;

class AnomalieController extends Controller {

  /**
   * 
   * @return type
   * @throws type
   */
  public function indexAction() {
    $user = $this->getUser();
    
    if ($user === null) {
      throw $this->createNotFoundException('Utilisateur inconnu !');
    }
    
    $rep = $this
              ->getDoctrine()
              ->getManager()
              ->getRepository('LGPUserBundle:Anomalie');
    
    $anomalies = $rep->findBy(array('user' => $user));
    
    return $this->render('LGPUserBundle:Anomalie:index.html.twig', array(
      'anomalies' => $anomalies
    ));
  }
  
  /**
   * 
   * @param Request $request
   * @return type
   * @throws type
   */
  public function addAction(Request $request) {
    $user = $this->getUser();
    
    if ($user === null) {
      throw $this->createNotFoundException('Utilisateur inconnu !');
    }
    
    $anomalie = new Anomalie();
    
    $form = $this->createForm(AnomalieType::class, $anomalie);
    $form->handleRequest($request);
    
    if ($form->isSubmitted() && $form->isValid()) {
      $anomalie->setUser($user);
      
      $em = $this->getDoctrine()->getManager();
      
      $em->persist($anomalie);
      $em->flush();
    
      return $this->redirectToRoute('lgp_user_anomalies');
    }
    
    return $this->render('LGPUserBundle:Anomalie:add.html.twig', array(
      'form' => $form->createView()
    ));
  }
  
  /**
   * 
   * @param Anomalie $anomalie
   * @param Request $request
   * @return type
   * @throws type
   */
  public function updateAction(Anomalie $anomalie, Request $request) {
    $user = $this->getUser();
    
    if ($user === null) {
      throw $this->createNotFoundException('Utilisateur inconnu !');
    }
    
    $form = $this->createForm(AnomalieType::class, $anomalie);
    $form->handleRequest($request);
    
    if ($form->isSubmitted() && $form->isValid()) {
      $em = $this->getDoctrine()->getManager();
      
      $em->flush();
    
      return $this->redirectToRoute('lgp_user_anomalies');
    }
    
    return $this->render('LGPUserBundle:Anomalie:update.html.twig', array(
      'form' => $form->createView()
    ));
  }
  
  /**
   * 
   * @param Anomalie $anomalie
   * @return type
   * @throws type
   */
  public function deleteAction(Anomalie $anomalie) {
    $user = $this->getUser();
    
    if ($user === null) {
      throw $this->createNotFoundException('Utilisateur inconnu !');
    }
    
    $em = $this->getDoctrine()->getManager();
    
    $em->remove($anomalie);
    $em->flush();
    
    return $this->redirectToRoute('lgp_user_anomalies');
  }
}
