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
      return $this->container
                    ->get('pugx_multi_user.registration_manager')
                    ->register('LGP\UserBundle\Entity\Prof');
    }

}
