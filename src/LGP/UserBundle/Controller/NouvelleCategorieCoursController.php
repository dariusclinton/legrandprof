<?php

namespace LGP\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use LGP\UserBundle\Entity\NouvelleCategorieCours;
use LGP\UserBundle\Form\NouvelleCategorieCoursType;

class NouvelleCategorieCoursController extends Controller {

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
        ->getRepository('LGPUserBundle:NouvelleCategorieCours');
    
    $nouvellesCategoriesCours = $rep->findBy(array('prof' => $prof));
    
    return $this->render('LGPUserBundle:NouvelleCategorieCours:index.html.twig', array(
      'nouvellesCategoriesCours' => $nouvellesCategoriesCours
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
    
    $nouvelleCategorieCours = new NouvelleCategorieCours();
    
    $form = $this->createForm(NouvelleCategorieCoursType::class, $nouvelleCategorieCours);
    
    $form->handleRequest($request);
    
    if ($form->isSubmitted() && $form->isValid()) {
      $nouvelleCategorieCours->setProf($prof);
      
      $em = $this->getDoctrine()->getManager();
      
      $em->persist($nouvelleCategorieCours);
      $em->flush();
      
      return $this->redirectToRoute('lgp_user_prof_nouvelles_categories_cours');
    }
    
    return $this->render('LGPUserBundle:NouvelleCategorieCours:add.html.twig', array(
      'form' => $form->createView()
    ));
  }
}
