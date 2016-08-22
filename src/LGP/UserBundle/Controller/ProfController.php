<?php

namespace LGP\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use LGP\UserBundle\Entity\Prof;
use LGP\UserBundle\Form\ProfType;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Doctrine\ORM\NoResultException;

class ProfController extends Controller {

    public function registerAction(Request $request) {
        $prof = new Prof();

        // Creation du formulaire
        $form = $this->createForm(ProfType::class, $prof);

        /*
          Si la requete est de type POST on verifie la validite des informations
          et on insere dans la BD
         */
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($prof);

            $em->flush();

            return $this->redirectToRoute('lgp_core_homepage');
        }

        // Sinon on affiche le formulaire d'inscription
        return $this->render('LGPUserBundle:Prof:register.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    public function profileAction() {
        // Recuperation du Repository Prof
        $repProf = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('LGPUserBundle:Prof');

        // Use this to test if the user is logged in
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw new AccessDeniedException('This user does not have access to this section.');
            // throw $this->createAccessDeniedException();
        }

        // Recuperation de l'utilisateur connecté
        $user = $this->getUser();
        if ($user) {
            // Recuperation du Prof correspondant à l'utilisateur precedemment connecte.
            try {

                $prof = $repProf->getProf($user->getId());
            } catch (NoResultException $e) {
                throw $this->createNotFoundException("Le prof n'existe pas !");
            }

            // On retourne le page de profil avec le prof.
            return $this->render('LGPUserBundle:Prof:profile.html.twig', array(
                        'prof' => $prof
            ));
        } else {
            $this->createNotFoundException("Impossible de trouver l'utilisateur");
        }
    }
    public function becomeAction(){
        return $this->render('LGPUserBundle:Prof:become.html.twig');
    }

}
