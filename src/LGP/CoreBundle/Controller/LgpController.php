<?php
namespace LGP\CoreBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LgpController extends Controller
{
    public function indexAction()
    {
        return $this->render('LGPCoreBundle:Lgp:index.html.twig');
    }
}