<?php

namespace LGP\ReservationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ReservationController extends Controller
{
    public function detailAction()
    {
        return $this->render('LGPReservationBundle:Reservation:detail.html.twig');
    }
    public function cartAction()
    {
        return $this->render('LGPReservationBundle:Reservation:cart.html.twig');
    }
}
