<?php

namespace LGP\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class DashboardController extends Controller {
 
  /**
   * 
   * @return type
   * @throws type
   *
   * @Security("has_role('ROLE_PROF')")
   */
  public function profAction() {
    
    return $this->render('LGPUserBundle:Dashboard:prof.html.twig');
  }

  /**
   *
   * @return type
   * @throws type
   * @Security("has_role('ROLE_PARENT')")
   */
  public function parentAction() {

    return $this->render('LGPUserBundle:Dashboard:parent.html.twig');
  }
  
  
}
