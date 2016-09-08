<?php

namespace LGP\CourseBundle\Controller;

use Doctrine\ORM\NoResultException;
use LGP\CourseBundle\Form\CoursSearchRefineType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Validator\Exception\InvalidArgumentException;

class CourseController extends Controller {
    
    public function searchAction($page, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $enseignementRep = $em->getRepository("LGPCourseBundle:Enseignement");
        $coursRep = $em->getRepository("LGPCourseBundle:Cours");
        $avisRep = $em->getRepository("LGPUserBundle:Avis");
        $courses = $coursRep->findAll();
        $max_per_page = 10;
        try {
            $profs = $enseignementRep->getAllProfsEnseignants($page, $max_per_page);
//                $coursCount = $enseigneRep->countProfsByCours($coursFound);
            $profsCount = count($profs);
            $pageCount = ceil($profsCount / $max_per_page);
            if ($pageCount < $page && $pageCount != 0) {
                throw new NotFoundHttpException('La page demandée n\'existe pas.'); // page 404
            }
            $params = array(
                'courses' => $courses,
                'matieres_profs' => $profs,
                'enseignementRep' => $enseignementRep,
                'avisRep' => $avisRep,
                'pagination' => array(
                    'route' => 'lgp_course_find',
                    'pages_count' => $pageCount,
                    'profs_count' => $profsCount,
                    'max_per_page' => $max_per_page,
                    'page' => $page,
                    'route_params' => array()
                ),
            );
        } catch (NoResultException $ex) {
            throw $this->createNotFoundException("Pas de prof pour ce cours !" . $ex->getMessage());
        }
        $course_form_refine = $this->createForm(CoursSearchRefineType::class);
        $course_form_refine->handleRequest($request);
        if ($course_form_refine->isSubmitted() && $course_form_refine->isValid()) {
            $data = $course_form_refine->getData();
            if (!(isset($data['intitule'])) || !(isset($data['ville']))) {
                throw new InvalidArgumentException("Oups!!! Vous devez entrer une valeur pour les parametres de recherche!");
            }
            return $this->redirectToRoute('lgp_course_find_prof_refine', array('ville' => $data['ville'], 'intitule_cours' => $data['intitule']));
        }
        return $this->render('LGPCourseBundle:Course:search.html.twig', array('params' => $params, 'form' => $course_form_refine->createView()));
    }
    
    public function searchCourseAction($intitule_cours, $page, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $enseignementRep = $em->getRepository("LGPCourseBundle:Enseignement");
        $coursRep = $em->getRepository("LGPCourseBundle:Cours");
        $avisRep = $em->getRepository("LGPUserBundle:Avis");
        $courses = $coursRep->findAll();
        $coursFound = $coursRep->getCoursByIntitule($intitule_cours);
        $max_per_page = 10;

        try {
            $profsByCours = $enseignementRep->getProfsByCours($coursFound, $page, $max_per_page);
//                $coursCount = $enseigneRep->countProfsByCours($coursFound);
            $profsCount = count($profsByCours);
            $pageCount = ceil($profsCount / $max_per_page);

            if ($pageCount < $page && $pageCount != 0) {
                throw new NotFoundHttpException('La page demandée n\'existe pas.'); // page 404
            }
            $intitule = "";
            if ($coursFound) {
                $intitule = $coursFound->getIntitule();
            }

            $params = array(
                'intitule_cours' => $intitule_cours,
                'courses' => $courses,
                'courseFound' => $coursFound,
                'matieres_profs' => $profsByCours,
                'enseignementRep' => $enseignementRep,
                'avisRep' => $avisRep,
                'pagination' => array(
                    'route' => 'lgp_course_find_prof',
                    'pages_count' => $pageCount,
                    'profs_count' => $profsCount,
                    'max_per_page' => $max_per_page,
                    'page' => $page,
                    'route_params' => array('intitule_cours' => $intitule)
                ),
            );
        } catch (NoResultException $ex) {
            throw $this->createNotFoundException("Pas de prof pour ce cours !" . $ex->getMessage());
        }

        $course_form_refine = $this->createForm(CoursSearchRefineType::class);
        $course_form_refine->handleRequest($request);
        if ($course_form_refine->isSubmitted() && $course_form_refine->isValid()) {
            $data = $course_form_refine->getData();
            if (!(isset($data['intitule'])) || !(isset($data['ville']))) {
                throw new InvalidArgumentException("Oups!!! Vous devez entrer une valeur pour les parametres de recherche!");
            }
            return $this->redirectToRoute('lgp_course_find_prof_refine', array('ville' => $data['ville'], 'intitule_cours' => $data['intitule']));
        }

//        $request->request->set("intitule_cours", $coursFound->getIntitule());
        return $this->render('LGPCourseBundle:Course:search.html.twig', array('params' => $params, 'form' => $course_form_refine->createView()));
    }

    public function searchRefineAction($ville, $intitule_cours, $page, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $enseignementRep = $em->getRepository("LGPCourseBundle:Enseignement");
        $coursRep = $em->getRepository("LGPCourseBundle:Cours");
        $avisRep = $em->getRepository("LGPUserBundle:Avis");
        $courses = $coursRep->findAll();
        $coursFound = $coursRep->getCoursByIntitule($intitule_cours);
        $max_per_page = 10;
        try {
            $profsByCoursAndCity = $enseignementRep->getProfsByCoursAndCity($coursFound, $ville, $page, $max_per_page);
//                $coursCount = $enseigneRep->countProfsByCours($coursFound);
            $profsCount = count($profsByCoursAndCity);
            $pageCount = ceil($profsCount / $max_per_page);

            if ($pageCount < $page && $pageCount != 0) {
                throw new NotFoundHttpException('404: Oups!!! La page demandée n\'existe pas.'); // page 404, sauf pour la première page
            }
            $intitule = "";
            if ($coursFound) {
                $intitule = $coursFound->getIntitule();
            }

            $params = array(
                'intitule_cours' => $intitule_cours,
                'ville' => $ville,
                'courseFound' => $coursFound,
                'courses' => $courses,
                'matieres_profs' => $profsByCoursAndCity,
                'enseignementRep' => $enseignementRep,
                'avisRep' => $avisRep,
                'pagination' => array(
                    'route' => 'lgp_course_find_prof_refine',
                    'pages_count' => $pageCount,
                    'profs_count' => $profsCount,
                    'max_per_page' => $max_per_page,
                    'page' => $page,
                    'route_params' => array('intitule_cours' => $intitule, 'ville' => $ville)
                ),
            );
        } catch (NoResultException $ex) {
            throw $this->createNotFoundException("Pas de prof pour ce cours !" . $ex->getMessage());
        }

        $course_form_refine = $this->createForm(CoursSearchRefineType::class);
        $course_form_refine->handleRequest($request);
        if ($course_form_refine->isSubmitted() && $course_form_refine->isValid()) {
            $data = $course_form_refine->getData();
            if (!(isset($data['intitule'])) || !(isset($data['ville']))) {
                throw new InvalidArgumentException("Oups!!! Vous devez entrer une valeur pour les parametres de recherche!");
            }
            return $this->redirectToRoute('lgp_course_find_prof_refine', array('ville' => $data['ville'], 'intitule_cours' => $data['intitule']));
        }

        return $this->render('LGPCourseBundle:Course:search.html.twig', array('params' => $params, 'form' => $course_form_refine->createView()));
    }

    public function searchCityAction($ville, $page, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $enseignementRep = $em->getRepository("LGPCourseBundle:Enseignement");
        $coursRep = $em->getRepository("LGPCourseBundle:Cours");
        $avisRep = $em->getRepository("LGPUserBundle:Avis");
        $courses = $coursRep->findAll();
        $max_per_page = 10;
        try {
            $profsByCity = $enseignementRep->getProfsByCity($ville, $page, $max_per_page);
            $profsCount = count($profsByCity);
            $pageCount = ceil($profsCount / $max_per_page);
            if ($pageCount < $page && $pageCount != 0) {
                throw new NotFoundHttpException('404: Oups!!! La page demandée n\'existe pas.'); // page 404, sauf pour la première page
            }
            $params = array(
                'ville' => $ville,
                'courses' => $courses,
                'matieres_profs' => $profsByCity,
                'enseignementRep' => $enseignementRep,
                'avisRep' => $avisRep,
                'pagination' => array(
                    'route' => 'lgp_course_find_prof_city',
                    'pages_count' => $pageCount,
                    'profs_count' => $profsCount,
                    'max_per_page' => $max_per_page,
                    'page' => $page,
                    'route_params' => array('ville' => $ville)
                ),
            );
        } catch (NoResultException $ex) {
            throw $this->createNotFoundException("404: Pas de prof pour ce cours !" . $ex->getMessage());
        }

        $course_form_refine = $this->createForm(CoursSearchRefineType::class);
        $course_form_refine->handleRequest($request);
        if ($course_form_refine->isSubmitted() && $course_form_refine->isValid()) {
            $data = $course_form_refine->getData();
            if (!(isset($data['intitule'])) || !(isset($data['ville']))) {
                throw new InvalidArgumentException("Oups!!! Vous devez entrer une valeur pour les parametres de recherche!");
            }
            return $this->redirectToRoute('lgp_course_find_prof_refine', array('ville' => $data['ville'], 'intitule_cours' => $data['intitule']));
        }

        return $this->render('LGPCourseBundle:Course:search_city.html.twig', array('params' => $params, 'form' => $course_form_refine->createView()));
    }

    public function updateClasseAction($profId, $coursId, Request $request) {
        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();
            $ensRep = $em->getRepository("LGPCourseBundle:Enseignement");
            $ens = $ensRep->getClasseByCoursAndProf($profId, $coursId);
            return new JsonResponse($ens);
        }
    }

    public function updateCourseDataAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();
            $courseRep = $em->getRepository("LGPCourseBundle:Cours");
            $courses = $courseRep->getIntituleCourse();
            return new JsonResponse($courses);
        }
    }
}
