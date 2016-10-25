<?php

namespace LGP\CourseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class UpdateDataAjaxController extends Controller
{
    public function updateClasseAction($profId, $coursId, Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();
            $ensRep = $em->getRepository("LGPCourseBundle:Enseignement");
            $ens = $ensRep->getClasseByCoursAndProf($profId, $coursId);
            return new JsonResponse($ens);
        }
    }

    public function updateCourseDataAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();
            $courseRep = $em->getRepository("LGPCourseBundle:Cours");
            $courses = $courseRep->getIntituleCourse();
            return new JsonResponse($courses);
        }
    }

    public function updateProfsNamesDataAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();
            $ensRep = $em->getRepository("LGPCourseBundle:Enseignement");
            $profs = $ensRep->getProfsNames();
            return new JsonResponse($profs);
        }
    }

    public function updateCategoriesNamesAction(Request $request){
        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();
            $categorieRep = $em->getRepository("LGPCourseBundle:Categorie");
            $categories = $categorieRep->getCategoriesNames();
            return new JsonResponse($categories);
        }
    }
}
