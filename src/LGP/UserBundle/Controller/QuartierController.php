<?php
/**
 * Created by PhpStorm.
 * User: tsafack
 * Date: 25/11/16
 * Time: 09:29
 */

namespace LGP\UserBundle\Controller;

use LGP\UserBundle\Form\QuartierType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use LGP\UserBundle\Entity\Quartier;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class QuartierController extends Controller
{

  /**
   * @Security("has_role('ROLE_PROF')")
   */
  public function addAction(Request $request) {
    $prof = $this->getUser();

    if (!$prof) {
      throw new NotFoundHttpException("Prof inconnu !");
    }

    if ($request->isXmlHttpRequest()) {
      $em = $this->getDoctrine()->getManager();
      $rep = $em->getRepository('LGPUserBundle:Quartier');

      // Recuperation des parametres dans la requete
      $quartier_ville = $request->request->get('quartier_ville');
      $quartier_intitule = $request->request->get('quartier_intitule');

      // recuperation du  quartier dans la bd
      $quartier = $rep->findOneBy(array('intitule' => $quartier_intitule, 'ville' => $quartier_ville));

      // modification
      $quartier->addProf($prof);
      $prof->addQuartierCible($quartier);

      // Enregistrement
      $em->flush();

      // Recuperation de tous les quartiers du prof
      $quartiers = $rep->getByProf($prof->getId());

      return new JsonResponse($quartiers);
    }

    throw new NotFoundHttpException("Error !!!");
  }

  /**
   * @Security("has_role('ROLE_PROF')")
   */
  public function deleteAction($id, Request $request)
  {
    $prof = $this->getUser();

    if (!$prof) {
      throw new NotFoundHttpException("Prof inconnu !");
    }

    if ($request->isXmlHttpRequest()) {
      $em = $this->getDoctrine()->getManager();
      $rep = $em->getRepository('LGPUserBundle:Quartier');

      // recuperation du  quartier dans la bd
      $quartier = $rep->find($id);

      // modification
      $quartier->removeProf($prof);
      $prof->RemoveQuartierCible($quartier);

      // Enregistrement
      $em->flush();

      // Recuperation de tous les quartiers du prof
      $quartiers = $rep->getByProf($prof->getId());

      return new JsonResponse($quartiers);
    }

    throw new NotFoundHttpException("Error !!!");
  }


  /**
   * @param $ville
   * @return Response
   */
  public function intituleAction($ville) {
    $rep = $this->getDoctrine()->getManager()->getRepository('LGPUserBundle:Quartier');
    
    $intitules = $rep->getByVille($ville);
    
    return new JsonResponse($intitules);
  }
}