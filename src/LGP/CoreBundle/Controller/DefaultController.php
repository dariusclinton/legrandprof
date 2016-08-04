<?php

namespace LGP\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LGPCoreBundle:Default:index.html.twig');
    }
}
