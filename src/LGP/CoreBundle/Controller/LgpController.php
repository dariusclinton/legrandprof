<?php

namespace LGP\CoreBundle\Controller;

use LGP\CourseBundle\Form\CoursSearchRefineType;
use LGP\CourseBundle\Form\CoursSearchType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LgpController extends Controller {

    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $categoryRepository = $em->getRepository('LGPCourseBundle:Categorie');
        $enseignementRep = $em->getRepository('LGPCourseBundle:Enseignement');
        $coursRep = $em->getRepository("LGPCourseBundle:Cours");

        $categoriesPopular = $categoryRepository->findBy(array(), null, 8);

//        $courseForm = new Cours();
////        $form_course = $this->get('form.factory')->create(CoursType::class, $courseForm);
        $form_course = $this->createForm(CoursSearchType::class);
        
        $form_course->handleRequest($request);
        if ($form_course->isSubmitted() && $form_course->isValid()) {
            $data = $form_course->getData();

            if (isset($data['intitule']) && isset($data['quartier'])) {
                $courseFound = $coursRep->getCoursByIntitule($data['intitule']);
                if ($courseFound == null)
                    throw new NotFoundHttpException("pas de cours " . $data['intitule']);
                return $this->redirectToRoute('lgp_course_find_prof_refine', array('slugVille' => $data['quartier']->getSlugVille(), 'slug' => $courseFound->getSlug()));
            }
            if ((isset($data['quartier']))) {
                return $this->redirectToRoute('lgp_course_find_prof_city', array('slugVille' => $data['quartier']->getSlugVille()));
            }
            if (isset($data['intitule'])) {
                $courseFound = $coursRep->getCoursByIntitule($data['intitule']);
                if ($courseFound == null)
                    throw new NotFoundHttpException("pas de cours " . $data['intitule']);
                return $this->redirectToRoute('lgp_course_find_prof', array('slug' => $courseFound->getSlug()));
            }
            return $this->redirectToRoute('lgp_course_find');
        }

        return $this->render('LGPCoreBundle:Lgp:index.html.twig', array('enseignementRep' => $enseignementRep, 'categories' => $categoriesPopular, 'categoryRep' => $categoryRepository, 'form' => $form_course->createView()));
    }
    public function howAction(){
        return $this->render('LGPCoreBundle:Lgp:how.html.twig');
    }

}
