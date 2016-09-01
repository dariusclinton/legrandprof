<?php

namespace LGP\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller {
 
  /**
   * 
   * @return type
   * @throws type
   */
  public function profAction() {
    
    return $this->render('LGPUserBundle:Dashboard:prof.html.twig');
  }
  
 
}
