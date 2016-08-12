<?php

namespace LGP\ReservationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LGPReservationBundle:Default:index.html.twig');
    }
}
