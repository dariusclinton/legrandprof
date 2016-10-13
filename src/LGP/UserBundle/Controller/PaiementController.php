<?php

namespace LGP\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PaiementController extends Controller
{
    public function indexAction()
    {
        $user = $this->getUser();
        if (!$user) {
            $this->createNotFoundException('Utilisateur inconnu.');
        }

        $paiements = $user->getPaiements();

        return $this->render('LGPUserBundle:Paiement:index.html.twig', array(
            'paiements' => $paiements
        ));
    }
}