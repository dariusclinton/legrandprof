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

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Security;
use FOS\UserBundle\Controller\SecurityController as BaseController;

class SecurityController extends BaseController
{
  /**
   * @param Request $request
   *
   * @return Response
   */
  public function loginAction(Request $request)
  {
    // Si le visiteur est déjà identifié, on le redirige vers l'accueil
    if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
      return $this->redirectToRoute('lgp_core_homepage');
    }

    /** @var $session \Symfony\Component\HttpFoundation\Session\Session */
    $session = $request->getSession();

    $authErrorKey = Security::AUTHENTICATION_ERROR;
    $lastUsernameKey = Security::LAST_USERNAME;

    // get the error if any (works with forward and redirect -- see below)
    if ($request->attributes->has($authErrorKey)) {
      $error = $request->attributes->get($authErrorKey);
    } elseif (null !== $session && $session->has($authErrorKey)) {
      $error = $session->get($authErrorKey);
      $session->remove($authErrorKey);
    } else {
      $error = null;
    }

    if (!$error instanceof AuthenticationException) {
      $error = null; // The value does not come from the security component.
    }

    // last username entered by the user
    $lastUsername = (null === $session) ? '' : $session->get($lastUsernameKey);

    $csrfToken = $this->has('security.csrf.token_manager')
      ? $this->get('security.csrf.token_manager')->getToken('authenticate')->getValue()
      : null;

    return $this->renderLogin(array(
      'last_username' => $lastUsername,
      'error' => $error,
      'csrf_token' => $csrfToken,
    ));
  }
}
