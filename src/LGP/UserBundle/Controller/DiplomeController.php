<?php
/**
 * Created by PhpStorm.
 * User: tsafack
 * Date: 30/11/16
 * Time: 21:23
 */

namespace LGP\UserBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class DiplomeController extends Controller
{
  /**
   * @Security("has_role('ROLE_PROF')")
   */
  public function addAction(Request $request) {
    $prof = $this->getUser();

    if (!$prof) {
      throw new NotFoundHttpException('Utilisateur inconnu !');
    }

    if ($request->isXmlHttpRequest()) {
      $intitule = $request->request->get('intitule');


      return new JsonResponse($intitule);
    }
  }
}