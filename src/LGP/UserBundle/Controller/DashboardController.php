<?php

namespace LGP\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller {
 
  /**
   * 
   * @return type
   * @throws type
   */
  public function indexAction() {
    
    return $this->redirectToRoute('fos_user_profile_show');
  }
  
  
}
