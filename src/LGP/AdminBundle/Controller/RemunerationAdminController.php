<?php

namespace LGP\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sonata\AdminBundle\Controller\CRUDController;

class RemunerationAdminController extends Controller
{
    public function createAction(Request $request)
    {
      var_dump($request);
      
      return $this->redirectToRoute('admin_lgp_user_remuneration_list');
    }
}
