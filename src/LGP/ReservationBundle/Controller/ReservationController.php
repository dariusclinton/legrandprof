<?php

namespace LGP\ReservationBundle\Controller;

use DateTime;
use LGP\ReservationBundle\Cart\Booker;
use LGP\ReservationBundle\Cart\Cart;
use LGP\ReservationBundle\Entity\Facture;
use LGP\ReservationBundle\Entity\JourDeCours;
use LGP\ReservationBundle\Entity\Reservation;
use LGP\ReservationBundle\Entity\ReservationEnseignement;
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
            if ($panier == null)
                $session->set('panier', new Cart());

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
            return new JsonResponse('success');
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
        $params = array('profRep' => $profRep, 'coursRep' => $coursRep, 'ensRep' => $ensRep, 'panier' => $panier);
        return $this->render('LGPReservationBundle:Reservation:cart.html.twig', array('params' => $params));
    }

    public function confirmReservationAction($parentId, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $parentRep = $em->getRepository("LGPUserBundle:Parents");
        $enseignementRep = $em->getRepository("LGPCourseBundle:Enseignement");
        $coursRep = $em->getRepository("LGPCourseBundle:Cours");
        $profRep = $em->getRepository("LGPUserBundle:Prof");
        $session = $request->getSession();

        if ($session->has('panier')) {
            $panier = $session->get('panier');
            $parent = $parentRep->find($parentId);

            if ($panier != null && $parent != null) {
                $bookers = $panier->getItems();
                $prixReservation = 0;

                $reservation = new Reservation();
                $reservation->setIsValidee(1);
                $reservation->setFrequencePaiement("trimestriel");
                $reservation->setParent($parent);

                foreach ($bookers as $booker) {
                    $prixReservation += $booker->getPrixTotal();
                    $reservationEns = new ReservationEnseignement();
                    $cours = $coursRep->find($booker->getCoursId());
                    $prof = $profRep->find($booker->getProfId());
                    $enseignement = $enseignementRep->findOneBy(array('cours' => $cours, 'prof' => $prof, 'classe' => $booker->getClasse()));

                    $reservationEns->setLieuDeCours($booker->getLieu());
                    $reservationEns->setDateDebut(DateTime::createFromFormat('d/m/Y', $booker->getDateDebut()));
                    $reservationEns->setDateFin(new DateTime());
                    $reservationEns->setNbApprenants($booker->getNombreApprenants());
                    $reservationEns->setVille($booker->getVille());
                    $reservationEns->setQuartier($booker->getQuartier());
                    $reservationEns->setNbHeureParJour($booker->getNombreHeure());
                    $reservationEns->setDuree($booker->getDuree());
                    $reservationEns->setReservation($reservation);
                    $reservationEns->setEnseignement($enseignement);

                    foreach ($booker->getJours() as $jour => $heure) {
                        $jourDeCours = new JourDeCours();
                        $jourDeCours->setIntitule($jour);
                        $jourDeCours->setHeure(new DateTime($heure));
                        $jourDeCours->addReservationEnseignement($reservationEns);
                        $reservationEns->addJoursDeCour($jourDeCours);

                        $em->persist($jourDeCours);
                    }
                    $em->persist($reservationEns);
                }
                $facture = new Facture();
                $facture->setMontant($prixReservation);
                $facture->addReservation($reservation);
                $reservation->addFacture($facture);
                $em->persist($reservation);
                $em->persist($facture);
                $em->flush();
                $session->remove('panier');
                return new JsonResponse("reservation ok");
            } else { 
                return new JsonResponse("une erreur es survenue!!! contacté le support pour plus d'information... :) :) :) ivano ahahahahaha");
            }
        }
    }

}
