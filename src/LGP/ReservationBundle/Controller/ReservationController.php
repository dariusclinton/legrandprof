<?php

namespace LGP\ReservationBundle\Controller;

use LGP\ReservationBundle\Cart\Booker;
use LGP\ReservationBundle\Cart\Cart;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ReservationController extends Controller {

    public function detailAction() {
        return $this->render('LGPReservationBundle:Reservation:detail.html.twig');
    }

    public function addCartAction(Request $request) {
        $session = $request->getSession();
        if (!$session->has('panier')) {
            $session->set('panier', new Cart());
        }
        $panier = $session->get('panier');

        $profRep = $this->getDoctrine()->getManager()->getRepository("LGPUserBundle:Prof");
        $userRep = $this->getDoctrine()->getManager()->getRepository("LGPUserBundle:User");
        $p = $profRep->find(1);
        
        if ($p) {
            $u = $userRep->find($p->getId());
            $image = $u->getImage()->getWebPath();
        }
        
        $booker1 = new Booker();
        $booker1->setProfId($u->getId());
        $booker1->setProfNom($u->getNom());
        $booker1->setProfPrenoms($u->getPrenoms());
        $booker1->setProfImage($image);
        $booker1->setCours(1);
        $booker1->setDateDebut(new Date());
        $booker1->setFrequencePaiement("trimerstriel");
        $booker1->setLieu("Domicile parent");
        $booker1->setNbApprenants(4);
        $booker1->setNbHeureParJour(2);
        $booker1->setPrixTotal(30000);
        $booker1->setVille("Douala");
        $booker1->setQuartier("Bonaberie");
        $booker1->setClasse("5eme");
        $booker1->addJour("lundi");
        $booker1->addJour("mercredi");

        $panier->addItem($booker1);
        $session->set('panier', $panier);
//        $session->remove('panier');
//        var_dump($session->get('panier')->getItems());
//        $session->remove("panier");
//        die();
//        $session->remove("panier");
        return $this->redirectToRoute("lgp_core_homepage");
//         return $this->forward('LGPCoreBundle:Lgp:index');
    }
    
    public function removeCartAction($key, Request $request){
        $session = $request->getSession();
        $panier = $session->get('panier');
        
        if ($panier) {
            $items = $panier->getItems();
        }
        $panier->removeItem($key);
        $session->set('panier', $panier);
        return $this->redirectToRoute('lgp_core_homepage');
//        return $this->forward('LGPCoreBundle:Lgp:index');
    }

    public function cartAction() {
        return $this->render('LGPReservationBundle:Reservation:cart.html.twig');
    }

}
