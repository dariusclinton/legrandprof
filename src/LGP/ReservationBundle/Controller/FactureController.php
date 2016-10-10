<?php

namespace LGP\ReservationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FactureController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }
}
