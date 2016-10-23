<?php

namespace LGP\ReservationBundle\Controller;

use DateTime;
use LGP\CourseBundle\Entity\ProgrammeDeCours;
use LGP\CourseBundle\Form\CoursSearchType;
use LGP\ReservationBundle\Entity\Facture;
use LGP\ReservationBundle\Entity\Reservation;
use LGP\ReservationBundle\Entity\ReservationEnseignement;
use LGP\UserBundle\Entity\Prof;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ReservationController extends Controller
{

    public function detailAction(Prof $prof)
    {
        $em = $this->getDoctrine()->getManager();
        $ensRep = $em->getRepository("LGPCourseBundle:Enseignement");
        $cours = $ensRep->getCoursByProf($prof);

        $params = array('prof' => $prof, 'cours' => $cours);

        return $this->render('LGPReservationBundle:Reservation:detail.html.twig', array('params' => $params));
    }

    public function confirmReservationAction($userId, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $userRep = $em->getRepository("LGPUserBundle:User");
        $enseignementRep = $em->getRepository("LGPCourseBundle:Enseignement");
        $coursRep = $em->getRepository("LGPCourseBundle:Cours");
        $profRep = $em->getRepository("LGPUserBundle:Prof");
        $session = $request->getSession();

        if ($session->has('panier')) {
            $panier = $session->get('panier');
            $user = $userRep->find($userId);

            if ($panier != null && $user != null) {
                $bookers = $panier->getItems();
                $prixReservation = 0;

                $reservation = new Reservation();
                $reservation->setIsValidee(false);
                $reservation->setFrequencePaiement($panier->getPaiementFrequence());
                $reservation->setUser($user);

                foreach ($bookers as $booker) {
                    $prixReservation += $booker->getPrixTotal();
                    $reservationEns = new ReservationEnseignement();
                    $cours = $coursRep->find($booker->getCoursId());
                    $prof = $profRep->find($booker->getProfId());
                    $enseignement = $enseignementRep->findOneBy(array('cours' => $cours, 'prof' => $prof, 'classe' => $booker->getClasse()));

                    $reservationEns->setLieuDeCours($booker->getLieu());
                    $reservationEns->setDateDebut(DateTime::createFromFormat('d/m/Y', $booker->getDateDebut()));
                    $reservationEns->setNbApprenants($booker->getNombreApprenants());
                    $reservationEns->setVille($booker->getVille());
                    $reservationEns->setQuartier($booker->getQuartier());
                    $reservationEns->setReservation($reservation);
                    $reservationEns->setEnseignement($enseignement);

                    $programme = new ProgrammeDeCours();
                    $reservationEns->setProgrammeDeCours($programme);

//                    foreach ($booker->getJours() as $jour => $heure) {
//                        $jourDeCours = new JourDeCours();
//                        $jourDeCours->setIntitule($jour);
//                        $jourDeCours->setHeure(new DateTime($heure));
//                        $jourDeCours->addReservationEnseignement($reservationEns);
//                        $reservationEns->addJoursDeCour($jourDeCours);
//
//                        $em->persist($jourDeCours);
//                    }
                    $em->persist($reservationEns);
                }
//                $facture = new Facture();
//                $facture->setMontant($prixReservation);
//                $facture->setReservation($reservation);
//                $reservation->addFacture($facture);
                $em->persist($reservation);
//                $em->persist($facture);
                $em->flush();
                $session->remove('panier');
                $session->remove('step');

                $session = $request->getSession();
                $session->getFlashBag()->add('info', 'Votre reservation a bien été prise en compte! Nous vous contacterons le plus tot pour le debut des cours');
                return $this->redirectToRoute("lgp_reservation_cart");
            } else {
                $session = $request->getSession();
                $session->getFlashBag()->add('warning', 'Une error est survenue !!! Veillez nous contacter svp!!!');
                return $this->redirectToRoute("lgp_reservation_cart");
            }
        }
    }

    public function paiementModeAction(Request $request)
    {
        $session = $request->getSession();
        $step = $session->get('step');
        if (!$step)
        {
//            $session->getFlashBag()->add('info', 'vous de')
            return $this->redirectToRoute('lgp_reservation_cart');
        }
        if ($step != 'step1')
            return $this->redirectToRoute('lgp_reservation_cart');

        $step = 'step2';
        $session->set('step', $step);
        return $this->render('LGPReservationBundle:Reservation:paiement.html.twig');
    }

    public function confirmviewReservationAction(Request $request)
    {
        $session = $request->getSession();
        $step = $session->get('step');
        if (!$step)
        {
//            $session->getFlashBag()->add('info', 'vous de')
            return $this->redirectToRoute('lgp_reservation_cart');
        }

        if ($step != 'step2')
            return $this->redirectToRoute('lgp_reservation_paiement');

        $step = 'step3';
        $session->set('step', $step);
        return $this->render('LGPReservationBundle:Reservation:confirm_reservation.html.twig');
    }

}
