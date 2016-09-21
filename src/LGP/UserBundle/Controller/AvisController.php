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
  public function indexAction(Request $request) {
    $user = $this->getUser();
    
    if ($user === null) {
      throw $this->createNotFoundException('Utilisateur inconnu !');
    }
    
    $rep = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('LGPUserBundle:Avis');
    
    $avis = $rep->findBy(array('user' => $user));
    
    // S'il s'agit d'un prof on recupere les avis qui a recu
    if ($this->get('security.authorization_checker')->isGranted('ROLE_PROF')) {
      if ($request->get('is_read')) {
        $avisNotRead = $rep->findBy(array('prof' => $user, 'isRead' => false));
        
        return new \Symfony\Component\HttpFoundation\Response(count($avisNotRead));
      }
      
      $avisReceived = $rep->findBy(array('prof' => $user));
      
      return $this->render('LGPUserBundle:Avis:index.html.twig', array(
        'avis' => $avis,
        'avisReceived' => $avisReceived
      ));
    }
    
    return $this->render('LGPUserBundle:Avis:index.html.twig', array(
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
    $user = $this->getUser();
    
    if ($user === null) {
      throw $this->createNotFoundException('Utilisateur inconnu !');
    }
    
    $avis = new Avis();
    $form = $this->createForm(AvisType::class, $avis);
    
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
      
      $avis->setUser($user);
      
      // On persiste l'entite
      $em = $this->getDoctrine()->getManager();
      $em->persist($avis);
      $em->flush();
      
      return $this->redirectToRoute('lgp_user_avis');
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
    $user = $this->getUser();
    
    if ($user === null) {
      throw $this->createNotFoundException('Utilisateur inconnu !');
    }
    
    $form = $this->createForm(AvisType::class, $avis);
    
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
      // On enregistre
      $em = $this->getDoctrine()->getManager();
      $em->flush();
      
      return $this->redirectToRoute('lgp_user_avis');
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
  public function deleteAction(Avis $avis) {
    $user = $this->getUser();
    
    if ($user === null) {
      throw $this->createNotFoundException('Utilisateur inconnu !');
    }
    
    $em = $this->getDoctrine()->getManager();
    
    // Suppression
    $em->remove($avis);
    $em->flush();
    
    return $this->redirectToRoute('lgp_user_avis');
  }
  
  /**
   * 
   * @param Avis $avis
   */
  public function voirAction(Avis $avis) {
    $avis->setIsRead(true);
    
    $em = $this->getDoctrine()->getManager();
    $em->flush($avis);
    
    return $this->render('LGPUserBundle:Avis:voir.html.twig', array(
      'avis' => $avis
    ));
  }
}
