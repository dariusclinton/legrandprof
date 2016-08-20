<?php

namespace LGP\CoreBundle\Controller;

use LGP\CourseBundle\Form\CoursSearchType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Exception\InvalidArgumentException;

class LgpController extends Controller {

    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $courseRepositoty = $em->getRepository('LGPCourseBundle:Cours');
        $categoryRepository = $em->getRepository('LGPCourseBundle:Categorie');

        $courses = $courseRepositoty->findAll();
        $categoriesPopular = $categoryRepository->findBy(array(), null, 8);

//        $courseForm = new Cours();
////        $form_course = $this->get('form.factory')->create(CoursType::class, $courseForm);
        $form_course = $this->createForm(CoursSearchType::class);
        
        $form_course->handleRequest($request);
        if ($form_course->isSubmitted() && $form_course->isValid()) {
//            $this->generateUrl('lgp_course_find_prof', array("cours" => $courseForm->getIntitule()));
            $data = $form_course->getData();
            if (!isset($data['intitule'])) {
                throw new InvalidArgumentException("Oups!!! Vous devez entrer une valeur pour la recherche!");
            }
            return $this->redirectToRoute('lgp_course_find_prof', array("cours" => $data['intitule']));
        }

        return $this->render('LGPCoreBundle:Lgp:index.html.twig', array('courses' => $courses, 'categories' => $categoriesPopular, 'form' => $form_course->createView()));
    }

}
