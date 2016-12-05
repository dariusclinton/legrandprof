<?php
/**
 * Created by PhpStorm.
 * User: tsafack
 * Date: 27/11/16
 * Time: 07:48
 */

namespace LGP\UserBundle\Controller;


use LGP\UserBundle\Entity\ExperiencePro;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ExperienceProController extends Controller
{
  public function addAction(Request $request) {
    $prof = $this->getUser();

    if (!$prof) {
      throw new NotFoundHttpException("Prof inconnu !");
    }

    if ($request->isXmlHttpRequest()) {
      $em = $this->getDoctrine()->getManager();
      $rep = $em->getRepository('LGPUserBundle:ExperiencePro');
      
      // Recuperation des parametres dans la requete
      $etablissement = $request->request->get('etablissement');
      $poste = $request->request->get('poste');
      $dateDebut = $request->request->get('dateDebut');
      $dateFin = $request->request->get('dateFin');

      // Conversion des dates en DateTime
      $dateDebutConvert = \DateTime::createFromFormat('d/m/Y', $dateDebut);
      $dateFinConvert = \DateTime::createFromFormat('d/m/Y', $dateFin);

      $experience = new ExperiencePro($etablissement, $poste, $dateDebutConvert, $dateFinConvert, $prof);
      
      $em->persist($experience);
      $em->flush();
      
      $experiences = $rep->getByProf($prof->getId()); 

      return new JsonResponse($experiences);
    }
  }

  /**
   * @param $id
   * @param Request $request
   * @return JsonResponse
   * @throws NotFoundHttpException
   */
  public function deleteAction($id, Request $request) {
    $prof = $this->getUser();

    if (!$prof) {
      throw new NotFoundHttpException("Prof inconnu !");
    }
    
    if ($request->isXmlHttpRequest()) {
      $em = $this->getDoctrine()->getManager();
      $rep = $em->getRepository('LGPUserBundle:ExperiencePro');
      
      $experience = $rep->find($id);
      
      $em->remove($experience);
      $em->flush();

      $experiences = $rep->getByProf($prof->getId());

      return new JsonResponse($experiences);
    }
  }
}