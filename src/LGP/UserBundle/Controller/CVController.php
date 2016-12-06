<?php
/**
 * Created by PhpStorm.
 * User: tsafack
 * Date: 05/12/16
 * Time: 11:39
 */

namespace LGP\UserBundle\Controller;


use LGP\UserBundle\Entity\CVFile;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CVController extends Controller
{

  /**
   * @param Request $request
   * @Security("has_role('ROLE_PROF')")
   */
  public function addAction(Request $request) {
    $prof = $this->getUser();

    if (!$prof) {
      throw new NotFoundHttpException('Utilisateur inconnu !');
    }

    if ($request->isXmlHttpRequest()) {
      $cv = new CVFile();
      $em = $this->getDoctrine()->getManager();
      $rep = $em->getRepository('LGPUserBundle:CVFile');

      $file = $request->files->get('fichierCV');
  
      $cv->setFile($file);
      $prof->setCVFile($cv);

      $em->persist($cv);
      $em->flush();

      $cv = $this->getCVAsObject($prof->getCVFile());

      return new JsonResponse($cv);
    }

    throw new NotFoundHttpException("Error !");
  }

  /**
   * Fonction permettant de construire des objets avec les attributs des diplome passes en parametre
   * @param $diplomes
   * @return array
   */
  public function getCVAsObject($cv)
  {
    return array('id' => $cv->getId(), 'webPath' => $cv->getWebPath());
  }
}