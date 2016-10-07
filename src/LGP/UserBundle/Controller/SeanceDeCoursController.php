<?php

namespace LGP\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use LGP\CourseBundle\Entity\SeanceDeCours;
use LGP\CourseBundle\Form\SeanceDeCoursType;

class SeanceDeCoursController extends Controller {

  /**
   * 
   * @return type
   * @throws type
   */
  public function indexAction() {
    $prof = $this->getUser();
    
    if ($prof === null) {
      throw $this->createNotFoundException('Utilisateur inconnu !');
    }
    
    $rep = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('LGPCourseBundle:SeanceDeCours');
    
    $seancesDeCours = $rep->findBy(array('prof' => $prof));
    
    return $this->render('LGPUserBundle:SeanceDeCours:index.html.twig', array(
      'seancesDeCours' => $seancesDeCours
    ));
  }
  
  /**
   * 
   * @param SeanceDeCours $seanceDeCours
   * @return type
   */
  public function deleteAction(SeanceDeCours $seanceDeCours) {
    $em = $this->getDoctrine()->getManager();
    
    $em->remove($seanceDeCours);
    $em->flush();
    
    return $this->redirectToRoute('lgp_user_prof_seance_de_cours');
  }
}
