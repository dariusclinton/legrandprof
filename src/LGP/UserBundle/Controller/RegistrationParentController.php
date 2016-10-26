<?php

namespace LGP\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RegistrationParentController extends Controller
{
  public function registerAction(Request $request)
  {
    // Si le visiteur est déjà identifié, on le redirige vers l'accueil
    if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
      return $this->redirectToRoute('lgp_core_homepage');
    }
    return $this->container
                    ->get('pugx_multi_user.registration_manager')
                    ->register('LGP\UserBundle\Entity\Parents');
  }

}
