<?php
/**
 * Created by PhpStorm.
 * User: tsafack
 * Date: 28/10/16
 * Time: 10:47
 */

namespace LGP\UserBundle\Controller;

use LGP\UserBundle\Entity\ProgrammeDeDispo;
use LGP\UserBundle\Form\ProgrammeDeDispoType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


class DisponibiliteController extends  Controller
{
  public function indexAction() {
    
  }

  /**
   * @param Request $request
   * @Security("has_role('ROLE_PROF')")
   */
  public function addAction(Request $request) {
    $prof = $this->getUser();

    if (!$prof) {
      throw new NotFoundHttpException("Prof inconnu.");
    }

    $programmeDeDispo = new ProgrammeDeDispo();
    $form = $this->createForm(ProgrammeDeDispoType::class, $programmeDeDispo);

    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
      $em = $this->getDoctrine()->getManager();

      $programmeDeDispo->setProf($prof);

      $em->persist($programmeDeDispo);
      $em->flush();

      return $this->redirectToRoute('fos_user_profile_show');
    }

    return $this->render('LGPUserBundle:Disponibilite:add.html.twig', array(
      'form' => $form->createView()
    ));
  }

  public function editAction(Request $request) {

  }
}