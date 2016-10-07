<?php

namespace LGP\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class MainController extends Controller
{

  /**
   * @Security("has_role('ROLE_ADMIN')")
   */
  public function indexAction()
  {
    $em = $this->getDoctrine()->getManager();
    
    $repProf = $em->getRepository('LGPUserBundle:Prof');
    $repParent = $em->getRepository('LGPUserBundle:Parents');
    $repCourse = $em->getRepository('LGPCourseBundle:Cours');

    $profs = $repProf->findAll();
    $parents = $repParent->findAll();
    $cours = $repCourse->findAll();

    return $this->render('LGPUserBundle:User:index.html.twig', array(
      'profs'   => $profs,
      'parents' => $parents,
      'cours'   => $cours
    ));
  }
}
