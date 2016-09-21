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

                $session = $request->getSession();
                $session->getFlashBag()->add('info','Votre reservation a bien été prise en compte! Nous vous contacterons le plus tot pour le debut des cours');
                return $this->redirectToRoute("lgp_reservation_cart");
            } else {
                $session = $request->getSession();
                $session->getFlashBag()->add('warning','Une error est survenue !!! Veillez nous contacter svp!!!');
                return $this->redirectToRoute("lgp_reservation_cart");
            }
        }
    }

}
