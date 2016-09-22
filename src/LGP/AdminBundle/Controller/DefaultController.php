<?php

namespace LGP\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LGPAdminBundle:Default:index.html.twig');
    }
}
