<?php

namespace LGP\ReservationBundle\Controller;

use LGP\ReservationBundle\Cart\Booker;
use LGP\ReservationBundle\Cart\Cart;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class CartController extends Controller{

    public function cartAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $profRep = $em->getRepository("LGPUserBundle:Prof");
        $coursRep = $em->getRepository("LGPCourseBundle:Cours");
        $ensRep = $em->getRepository("LGPCourseBundle:Enseignement");
        $session = $request->getSession();
        $panier = $session->get('panier');
        $params = array('profRep' => $profRep, 'coursRep' => $coursRep, 'ensRep' => $ensRep, 'panier' => $panier);
        return $this->render('LGPReservationBundle:Cart:cart.html.twig', array('params' => $params));
    }

    public function addCartAction($profId, Request $request) {
        if ($request->isXmlHttpRequest()) {
            //recuperation des params de la requete
            $coursId = $request->query->get('coursId');
            $classe = $request->query->get('classe');
            $dateDebut = $request->query->get('dateDebut');
            $nbApprenants = $request->query->get('nbApprenants');
            $lieuDeCours = $request->query->get('lieuDeCours');
            $ville = $request->query->get('ville');
            $quartier = $request->query->get('quartier');
            $prixTotal = $request->query->get('prixTotal');

            $session = $request->getSession();
            if (!$session->has('panier')) {
                $session->set('panier', new Cart());
            }
            $panier = $session->get('panier');
            if ($panier == null) {
                $session->set('panier', new Cart());
            }

            $profRep = $this->getDoctrine()->getManager()->getRepository("LGPUserBundle:Prof");
            $p = $profRep->find($profId);

            if ($p) {
                $image = $p->getImage()->getWebPath();

                $booker1 = new Booker();
                $booker1->setProfId($p->getId());
                $booker1->setProfNom($p->getNom());
                $booker1->setProfPrenoms($p->getPrenoms());
                $booker1->setProfImage($image);
                $booker1->setCoursId((int) $coursId);
                $booker1->setDateDebut($dateDebut);
                $booker1->setLieu($lieuDeCours);
                $booker1->setNombreApprenants($nbApprenants);
                $booker1->setPrixTotal((double) $prixTotal);
                $booker1->setVille($ville);
                $booker1->setQuartier($quartier);
                $booker1->setClasse($classe);

                $panier->addItem($booker1);
            }
            $session->set('panier', $panier);
//        $session->remove('panier');
//        var_dump($session->get('panier')->getItems());
//        $session->remove("panier");
//        die();
//        $session->remove("panier");
           return new JsonResponse('success');
//         return $this->forward('LGPCoreBundle:Lgp:index');
        }
        return new JsonResponse('error');
    }

    public function removeCartAction($key, Request $request) {
        $session = $request->getSession();
        $panier = $session->get('panier');

        if ($panier) {
            $panier->removeItem($key);
        }
        $session->set('panier', $panier);
        return $this->redirectToRoute('lgp_reservation_cart');
//        return $this->forward('LGPCoreBundle:Lgp:index');
    }

}
