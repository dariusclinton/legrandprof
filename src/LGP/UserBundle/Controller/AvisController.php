<?php

namespace LGP\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use LGP\UserBundle\Form\AvisType;
use LGP\UserBundle\Entity\Avis;
use LGP\UserBundle\Entity\Parents;

class AvisController extends Controller {
  
  public function indexAction(Parents $parent) {
    if ($parent === null) {
      throw $this->createNotFoundException('Utilisateur non existant !');
    }
    
    $rep = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('LGPUserBundle:Avis');
    
    $avis = $rep->findBy(array('parent' => $parent));
    
    return $this->render('LGPUserBundle:Avis:index.html.twig', array(
      'avis' => $avis
    ));
  }
  
  
  public function addAction(Request $request) {
    $avis = new Avis();
    $form = $this->createForm(AvisType::class, $avis);
    
    if ($request->isMethod('POST') && $form->handleRequest()->isValid()) {
      // On persiste l'entite
      
      $this->redirectToRoute('lgp_user_avis');
    }
    
    return $this->render('LGPUserBundle:Avis:add.html.twig', array(
      'form' => $form->createView()
    ));
  }
}
