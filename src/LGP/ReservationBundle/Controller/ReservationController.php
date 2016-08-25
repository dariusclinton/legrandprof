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
            $session->set('panier', new Cart);
        }
        $panier = $session->get('panier');

        $booker1 = new Booker();
        $booker2 = new Booker();
        $booker3 = new Booker();

        $booker1->setProf(1);
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

        $booker2->setProf(1);
        $booker2->setCours(2);
        $booker2->setDateDebut(new Date());
        $booker2->setFrequencePaiement("trimerstriel");
        $booker2->setLieu("Domicile parent");
        $booker2->setNbApprenants(1);
        $booker2->setNbHeureParJour(3);
        $booker2->setPrixTotal(300000);
        $booker2->setVille("Bafoussam");
        $booker2->setQuartier("socada");
        $booker2->setClasse("6eme");
        $booker2->addJour("mardi");
        $booker2->addJour("dimanche");

        $panier->addItem(null,$booker1);
        $panier->addItem(null,$booker2);
//        $panier->addItem($booker3);

        $session->set('panier', $panier);

//        var_dump($panier->getItems());
//        $session->remove('panier');
//        foreach ($panier->getItems() as $booker){
//            echo $booker->getProf()." ".$booker->getVille();
//        }
        
        return $this->redirectToRoute("lgp_core_homepage");
//        die("\n voila");
    }

    public function cartAction() {
        return $this->render('LGPReservationBundle:Reservation:cart.html.twig');
    }

}
