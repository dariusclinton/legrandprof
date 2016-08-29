<?php

namespace LGP\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use LGP\CourseBundle\Entity\Evaluation;
use LGP\CourseBundle\Form\EvaluationType;

class EvaluationController extends Controller {

  /**
   * 
   * @return type
   * @throws type
   */
  public function indexAction() {
    $prof = $this->getUser();
    
    if ($prof === null) {
      throw $this->createNotFoundException('Utilisateur inconnu !');
    }
    
    $rep = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('LGPCourseBundle:Evaluation');
    
    $evaluations = $rep->findBy(array('prof' => $prof));
    
    return $this->render('LGPUserBundle:Evaluation:index.html.twig', array(
      'evaluations' => $evaluations
    ));
  }
  
  /**
   * 
   * @param Request $request
   * @return type
   * @throws type
   */
  public function addAction(Request $request) {
    $prof = $this->getUser();
    
    if ($prof === null) {
      throw $this->createNotFoundException('Utilisateur inconnu !');
    }
    
    $evaluation = new Evaluation();
    $form = $this->createForm(EvaluationType::class, $evaluation);
    
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
      $evaluation->setProf($prof);
      
      $em = $this->getDoctrine()->getManager();
      
      $em->persist($evaluation);
      $em->flush();
      
      return $this->redirectToRoute('lgp_user_prof_evaluation');
    }
    
    return $this->render('LGPUserBundle:Evaluation:add.html.twig', array(
      'form' => $form->createView()
    ));
  }
  
  /**
   * 
   * @param Evaluation $evaluation
   * @return type
   */
  public function deleteAction(Evaluation $evaluation) {
    $em = $this->getDoctrine()->getManager();
    
    $em->remove($evaluation);
    $em->flush();
    
    return $this->redirectToRoute('lgp_user_prof_evaluation');
  }
  
  /**
   * 
   * @param Evaluation $evaluation
   * @param Request $request
   */
  public function updateAction(Evaluation $evaluation, Request $request) {
    $prof = $this->getUser();
    
    if ($prof === null) {
      throw $this->createNotFoundException('Utilisateur inconnu !');
    }
    
    $form = $this->createForm(EvaluationType::class, $evaluation);
    
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
      $em = $this->getDoctrine()->getManager();
      
      $em->flush();
      
      return $this->redirectToRoute('lgp_user_prof_evaluation');
    }
    
    return $this->render('LGPUserBundle:Evaluation:update.html.twig', array(
      'form' => $form->createView()
    ));
  }
}
