<?php

namespace LGP\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RegistrationParentController extends Controller
{
  public function registerAction(Request $request)
  {
    return $this->container
                    ->get('pugx_multi_user.registration_manager')
                    ->register('LGP\UserBundle\Entity\Parents');
  }

}
