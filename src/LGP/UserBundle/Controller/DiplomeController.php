<?php
/**
 * Created by PhpStorm.
 * User: tsafack
 * Date: 30/11/16
 * Time: 21:23
 */

namespace LGP\UserBundle\Controller;


use LGP\UserBundle\Entity\Diplome;
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
      $diplome = new Diplome();
      $em = $this->getDoctrine()->getManager();
      $rep = $em->getRepository('LGPUserBundle:Diplome');
      
      $intitule = $request->request->get('intituleDiplome');
      $file = $request->files->get('fichierDiplome');
      
      $diplome->setIntitule($intitule);
      $diplome->setFile($file);
      $diplome->setProf($prof);

      $em->persist($diplome);
      $em->flush();

      $diplomes = $this->getDiplomesAsObject($prof->getDiplomes());

      return new JsonResponse($diplomes);
    }

    throw new NotFoundHttpException("Error !");
  }

  /**
   * @param Diplome $diplome
   * @param Request $request
   * @Security("has_role('ROLE_PROF')")
   */
  public function deleteAction(Diplome $diplome, Request $request) {
    $prof = $this->getUser();

    if (!$prof) {
      throw new NotFoundHttpException('Utilisateur inconnu !');
    }
    
    if ($request->isXmlHttpRequest()) {
      $em = $this->getDoctrine()->getManager();
      $rep = $em->getRepository('LGPUserBundle:Diplome');

      $em->remove($diplome);
      $em->flush();

      $diplomes = $this->getDiplomesAsObject($prof->getDiplomes());

      return new JsonResponse($diplomes);
    }

    throw new NotFoundHttpException("Error !");
  }

  /**
   * Fonction permettant de construire des objets avec les attributs des diplome passes en parametre
   * @param $diplomes
   * @return array
   */
  public function getDiplomesAsObject($diplomes) {
    $result = [];
    foreach ($diplomes as $tmp) {
      $result[] = array('id' => $tmp->getId(), 'intitule' => $tmp->getIntitule(), 'webPath' => $tmp->getWebPath());
    }

    return $result;
  }
 }