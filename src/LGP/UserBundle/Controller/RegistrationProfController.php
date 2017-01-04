<?php

namespace LGP\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class RegistrationProfController extends Controller
{
  /**
  * registerAction
  *
  * appelee lors de l'enregistrement d'un Prof
  */
    public function registerAction(Request $request)
    {
      // Si le visiteur est déjà identifié, on le redirige vers l'accueil
      if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
        return $this->redirectToRoute('lgp_core_homepage');
      }

      return $this->container
                    ->get('pugx_multi_user.registration_manager')
                    ->register('LGP\UserBundle\Entity\Prof');
    }
    
    public function step1Action(Request $request){
        return $this->render('LGPUserBundle:Registration:step1.html.twig');
    }
    
    public function step2Action(Request $request){
        return $this->render('LGPUserBundle:Registration:step2.html.twig');
        
    }
    
    public function step3Action(Request $request){
        return $this->render('LGPUserBundle:Registration:step3.html.twig');
        
    }
}
