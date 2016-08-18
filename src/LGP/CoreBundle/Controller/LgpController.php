<?php

namespace LGP\CoreBundle\Controller;

use LGP\CourseBundle\Form\CoursType;
use Proxies\__CG__\LGP\CourseBundle\Entity\Cours;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LgpController extends Controller {

    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $courseRepositoty = $em->getRepository('LGPCourseBundle:Cours');
        $categoryRepository = $em->getRepository('LGPCourseBundle:Categorie');

        $courses = $courseRepositoty->findAll();
        $categoriesPopular = $categoryRepository->findBy(array(), null, 8);

        $courseForm = new Cours();
        $form_course = $this->get('form.factory')->create(CoursType::class, $courseForm);

        if ($request->isMethod('POST') && $form_course->handleRequest($request)->isValid()) {
//            $this->generateUrl('lgp_course_find_prof', array("cours" => $courseForm->getIntitule()));
            return $this->redirectToRoute('lgp_course_find_prof', array("cours" => $courseForm->getIntitule()));
        }

        return $this->render('LGPCoreBundle:Lgp:index.html.twig', array('courses' => $courses, 'categories' => $categoriesPopular, 'form' => $form_course->createView()));
    }

}
