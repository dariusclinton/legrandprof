<?php

namespace LGP\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use LGP\UserBundle\Entity\Prof;
use LGP\UserBundle\Form\ProfType;
use LGP\UserBundle\Form\ProfUpdateType;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Doctrine\ORM\NoResultException;


class ProfController extends Controller
{
  /**
  * registerAction
  *
  * appelee lors de l'enregistrement d'un Prof
  */
    public function registerAction(Request $request)
    {
      $prof = new Prof();

      // Creation du formulaire
      $form = $this->createForm(ProfType::class, $prof);

      /*
       Si la requete est de type POST on verifie la validite des informations
       et on insere dans la BD
      */
      if ($request->isMethod('POST') && $form->handleRequest($request)->isValid())
      {
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


    /**
    * profileAction
    *
    * appelee pour la visualisation du profil d'un Prof
    */
    public function profileAction()
    {
      $em = $this->getDoctrine()->getManager();

      // Recuperation des Repositories
      $repProf = $em->getRepository('LGPUserBundle:Prof');

      // On teste si l'utilisateur est deja logge
      $this->test_if_logged();

      // Recuperation de l'utilisateur connecté
      $user = $this->getUser();

      if ($user)
      {
        // Recuperation du Prof correspondant à l'utilisateur.
        try {
          $prof = $repProf->getProf($user->getId());
        } catch (NoResultException $e) {
          throw $this->createNotFoundException("Le prof n'existe pas !");
        }

        $experiencePros = $prof->getExperiencePros();
        $diplomes = $prof->getDiplomes();

        // On retourne le page de profil avec le prof.
        return $this->render('LGPUserBundle:Prof:profile.html.twig', array(
          'prof'           => $prof,
          'experiencePros' => $experiencePros,
          'diplomes'       => $diplomes
        ));

      } else {
        $this->createNotFoundException("Impossible de trouver l'utilisateur");
      }
    }


    /**
    * updateAction
    *
    * appelee lors de la mise a jour du profil d'un Prof
    */
    public function updateAction(Request $request)
    {
      $repProf = $this->getDoctrine()->getManager()->getRepository('LGPUserBundle:Prof');

      // Test si l'utilisateur est deja connecte
      $this->test_if_logged();

      // Recuperation de l'utilisateur connecté
      $user = $this->getUser();

      // test de l'existence de l'utilisateur
      if ($user)
      {
        // Recuperation du Prof correspondant à l'utilisateur.
        try {
          $prof = $repProf->getProf($user->getId());
        } catch (NoResultException $e) {
          throw $this->createNotFoundException("Le prof n'existe pas !");
        }

        // $prof = new Prof();
        // Creation du formulaire de mise a jour
        $form = $this->createForm(ProfUpdateType::class, $prof);

        /*
         Si la requete est de type POST on verifie la validite des informations
         et on insere dans la BD
        */
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid())
        {
          $em = $this->getDoctrine()->getManager();

          /*
            On persiste manuellement les diplomes afin de persister ceux qui sont nouveaux
           */
          $diplomes = $prof->getDiplomes();
          foreach ($diplomes as $diplome) {
            if (!$this->exists($diplome))
            {
              $em->persist($diplome);
            }
          }

          // On attribut le prof a chaque experiencePro
          foreach ($prof->getExperiencePros() as $experience) {
            $experience->setProf($prof);

            $this->updateExperiencePro($prof);
          }

          $em->flush();

          return $this->redirectToRoute('lgp_user_prof_profile');
        }

        // Sinon on affiche le formulaire d'inscription
        return $this->render('LGPUserBundle:Prof:update.html.twig', array(
          'form' => $form->createView(),
          'prof' => $prof
        ));

      } else {
        $this->createNotFoundException("Impossible de trouver l'utilisateur");
      }
    }


    /**
    * Fonction permettant de tester si l'utilisateur est connecte
    */
    private function test_if_logged()
    {
      // Use this to test if the user is logged in
      if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY'))
        {
        throw new AccessDeniedException('This user does not have access to this section.');
        // throw $this->createAccessDeniedException();
      }
    }

    /**
     * Fonction permettant de persister les diplomes non existants encore
     * dans la bd
     */
    private function exists($diplome)
    {
      $rep = $this->getDoctrine()->getManager()->getRepository('LGPUserBundle:Diplome');

      // Test si l'entite existe deja
      if ($rep->findBy(array(
        'intitule'   => $diplome->getIntitule(),
        'specialite' => $diplome->getSpecialite(),
        'annee'      => $diplome->getAnnee())
        ))
        {
          return true;
        } else {
          return false;
        }
    }

    /**
     *
     */
    public function updateExperiencePro($prof)
    {
      $em = $this->getDoctrine()->getManager();
      $rep = $em->getRepository('LGPUserBundle:ExperiencePro');

    }
}
