<?php

namespace LGP\ReservationBundle\Controller;

use LGP\ReservationBundle\Cart\Booker;
use LGP\ReservationBundle\Cart\Cart;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ReservationController extends Controller {

    public function detailAction($id) {
        $em = $this->getDoctrine()->getManager();
        $profRep = $em->getRepository("LGPUserBundle:Prof");
        $ensRep = $em->getRepository("LGPCourseBundle:Enseignement");
        $prof = $profRep->find($id);
        if ($prof) {
            $cours = $ensRep->getCoursByProf($prof);
        }

        $params = array('prof' => $prof, 'cours' => $cours);

        return $this->render('LGPReservationBundle:Reservation:detail.html.twig', array('params' => $params));
    }

    public function addCartAction($profId, Request $request) {
        if ($request->isXmlHttpRequest()) {
            //recuperation des params de la requete
            $coursId = $request->query->get('coursId');
            $classe = $request->query->get('classe');
            $duree = $request->query->get('duree');
            $heureParJours = $request->query->get('heureParJours');
            $dateDebut = $request->query->get('dateDebut');
            $nbApprenants = $request->query->get('nbApprenants');
            $lieuDeCours = $request->query->get('lieuDeCours');
            $ville = $request->query->get('ville');
            $quartier = $request->query->get('quartier');
            $prixTotal = $request->query->get('prixTotal');
            $joursDeCoursSelectionnes = json_decode($request->query->get('joursDeCoursSelectionnes'));

            $session = $request->getSession();
            if (!$session->has('panier')) {
                $session->set('panier', new Cart());
            }
            $panier = $session->get('panier');

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
//            $booker1->setFrequencePaiement("trimerstriel");
                $booker1->setLieu($lieuDeCours);
                $booker1->setNombreApprenants($nbApprenants);
                $booker1->setNombreHeure($heureParJours);
                $booker1->setPrixTotal((double) $prixTotal);
                $booker1->setVille($ville);
                $booker1->setQuartier($quartier);
                $booker1->setClasse($classe);
                $booker1->setDuree($duree);

                foreach ($joursDeCoursSelectionnes as $jour => $heure) {
                    $booker1->addJour($jour, $heure);
                }
                $panier->addItem($booker1);
            }
            $session->set('panier', $panier);
//        $session->remove('panier');
//        var_dump($session->get('panier')->getItems());
//        $session->remove("panier");
//        die();
//        $session->remove("panier");
            return new JsonResponse(var_dump($session->get('panier')->getItems()));
//         return $this->forward('LGPCoreBundle:Lgp:index');
        }
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

    public function cartAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $profRep = $em->getRepository("LGPUserBundle:Prof");
        $coursRep = $em->getRepository("LGPCourseBundle:Cours");
        $ensRep = $em->getRepository("LGPCourseBundle:Enseignement");
        $session = $request->getSession();
        $panier = $session->get('panier');
        $params = array('profRep'=>$profRep,'coursRep'=>$coursRep,'ensRep'=>$ensRep,'panier'=>$panier);
        return $this->render('LGPReservationBundle:Reservation:cart.html.twig',array('params'=>$params));
    }

}
