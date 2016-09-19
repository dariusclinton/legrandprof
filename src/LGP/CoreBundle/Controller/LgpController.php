<?php

namespace LGP\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use LGP\CourseBundle\Form\CoursSearchType;
use Symfony\Component\HttpFoundation\Request;

class LgpController extends Controller {

    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $categoryRepository = $em->getRepository('LGPCourseBundle:Categorie');
        $enseignementRep = $em->getRepository('LGPCourseBundle:Enseignement');

        $categoriesPopular = $categoryRepository->findBy(array(), null, 8);

//        $courseForm = new Cours();
////        $form_course = $this->get('form.factory')->create(CoursType::class, $courseForm);
        $form_course = $this->createForm(CoursSearchType::class);
        
        $form_course->handleRequest($request);
        if ($form_course->isSubmitted() && $form_course->isValid()) {
//            $this->generateUrl('lgp_course_find_prof', array("cours" => $courseForm->getIntitule()));
            $data = $form_course->getData();
            if (!isset($data['intitule'])) {
               return $this->redirectToRoute('lgp_course_find'); 
            }
            return $this->redirectToRoute('lgp_course_find_prof', array("intitule_cours" => $data['intitule']));
        }

        return $this->render('LGPCoreBundle:Lgp:index.html.twig', array('enseignementRep' => $enseignementRep, 'categories' => $categoriesPopular, 'categoryRep' => $categoryRepository, 'form' => $form_course->createView()));
    }
    public function howAction(){
        return $this->render('LGPCoreBundle:Lgp:how.html.twig');
    }

}
