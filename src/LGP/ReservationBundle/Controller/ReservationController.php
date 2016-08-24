<?php

namespace LGP\ReservationBundle\Controller;

use LGP\ReservationBundle\Cart\Booker;
use LGP\ReservationBundle\Cart\Cart;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ReservationController extends Controller {

    public function detailAction(Request $request) {
        return $this->render('LGPReservationBundle:Reservation:detail.html.twig');
    }

    public function addCartAction(Request $request) {
        $session = $request->getSession();
        if (!$session->has('panier')) {
            $session->set('panier', new Cart);
        }
        $panier = $session->get('panier');

        $booker1 = new Booker(1, "douala", "3eme");
        $booker2 = new Booker(2, "yde", "6eme");
        $booker3 = new Booker(8, "baf", "3eme");

//        $panier->addItem('ivan',$booker1);
//        $panier->addItem('loic',$booker2);
//        $panier->addItem('kaptue',$booker3);
        $session->set('panier', $panier);
//        var_dump($panier->getItems());
//        var_dump($panier->getItem('ivan')->getLieu());
        $session->remove('panier');
        die("");
    }

    public function cartAction() {
        return $this->render('LGPReservationBundle:Reservation:cart.html.twig');
    }

}
