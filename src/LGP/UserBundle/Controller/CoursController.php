<?php

namespace LGP\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use LGP\CourseBundle\Entity\Enseignement;
use LGP\CourseBundle\Form\EnseignementType;

class CoursController extends Controller {
 
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
        ->getRepository('LGPCourseBundle:Enseignement');
    
    $enseignements = $rep->findBy(array('prof' => $prof));
    
    return $this->render('LGPUserBundle:Cours:index.html.twig', array(
      'enseignements' => $enseignements
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
    
    $enseignement = new Enseignement();
    $form = $this->createForm(EnseignementType::class, $enseignement);
    
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
      $enseignement->setProf($prof);
      
      $em = $this->getDoctrine()->getManager();
      
      $em->persist($enseignement);
      $em->flush();
      
      return $this->redirectToRoute('lgp_user_prof_cours');
    }
    
    return $this->render('LGPUserBundle:Cours:add.html.twig',array(
      'form' => $form->createView()
    ));
  }
  
  /**
   * 
   * @param Enseignement $enseignement
   * @return type
   */
  public function deleteAction(Enseignement $enseignement) {
    $em = $this->getDoctrine()->getManager();
    
    $em->remove($enseignement);
    $em->flush();
    
    return $this->redirectToRoute('lgp_user_prof_cours');
  }
}
