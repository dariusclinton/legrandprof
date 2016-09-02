<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LGP\UserBundle\Controller;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Controller\ProfileController as BaseController;

/**
 * Controller managing the user profile
 *
 * @author Christophe Coevoet <stof@notk.org>
 */
class ProfileController extends BaseController
{
    /**
     * Edit the user
     */
    public function editAction(Request $request)
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->get('fos_user.profile.form.factory');

        $form = $formFactory->createForm();
        $form->setData($user);
        
        /**
         * Custom code
         */
        // Si l'entite possede la methode getExperiencePros, alors il s'agit d'un Prof
        if (method_exists($user, 'getExperiencePros')) {
          $originalExperiencePros = new \Doctrine\Common\Collections\ArrayCollection();
          $originalDiplomes = new \Doctrine\Common\Collections\ArrayCollection();
          
          foreach ($user->getExperiencePros() as $experience) {
            $originalExperiencePros->add($experience);
          }
          
          foreach ($user->getDiplomes() as $diplome) {
            $originalDiplomes->add($diplome);
          }
        }
        ///

        $form->handleRequest($request);

        if ($form->isValid()) {
          
          /**
           * Custom code
           */
          // Si l'entite possede la methode getExperiencePros, alors il s'agit d'un Prof
          if (method_exists($user, 'getExperiencePros')) {
            
            $em = $this->getDoctrine()->getManager();

            // Remove relationship between prof en experiencePro
            foreach ($originalExperiencePros as $experience) {
              if (false === $user->getExperiencePros()->contains($experience))
                $em->remove($experience);
            }
            
            // Remove relationship between prof en Diplome
            foreach ($originalDiplomes as $diplome) {
              if (false === $user->getDiplomes()->contains($diplome))
                $em->remove($diplome);
            }
            
            $em->flush();
          }
          //// end custom code
          
            /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
            $userManager = $this->get('fos_user.user_manager');

            $event = new FormEvent($form, $request);
            $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_SUCCESS, $event);

            $userManager->updateUser($user);

            if (null === $response = $event->getResponse()) {
                $url = $this->generateUrl('fos_user_profile_show');
                $response = new RedirectResponse($url);
            }

            $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

            return $response;
        }

        return $this->render('FOSUserBundle:Profile:edit.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
