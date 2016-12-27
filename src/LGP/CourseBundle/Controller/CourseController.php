<?php

namespace LGP\CourseBundle\Controller;

use LGP\CourseBundle\Form\CoursSearchCategorieType;
use LGP\CourseBundle\Form\CoursSearchCityType;
use LGP\CourseBundle\Form\CoursSearchCourseCityType;
use LGP\CourseBundle\Form\CoursSearchCourseQuarterType;
use LGP\CourseBundle\Form\CoursSearchCourseType;
use LGP\CourseBundle\Form\CoursSearchProfsNameType;
use LGP\CourseBundle\Form\CoursSearchQuarterType;

use LGP\CourseBundle\Form\RefineFormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CourseController extends Controller
{

    public function searchAction($page, $slug_ville, $slug_course, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $enseignementRep = $em->getRepository("LGPCourseBundle:Enseignement");
        $coursRep = $em->getRepository("LGPCourseBundle:Cours");
        $quartierRep = $em->getRepository("LGPUserBundle:Quartier");
        $course = $coursRep->findOneBy(array('slug' => $slug_course));
        $quartier = $quartierRep->findOneBy(array('slugVille' => $slug_ville));
        $avisRep = $em->getRepository("LGPUserBundle:Avis");
        $courses = $coursRep->findAll();
        $max_per_page = 10;
        $profs = array();
        $intitule = $slug_course;
        $city = $slug_ville;


        // filters params
        $f_quarter = $request->query->get('quarter');

        if ($course != null && $quartier != null) {
            if ($f_quarter != null) {
                $profs = $enseignementRep->getProfsByCoursAndCityAndQuarter($course, $quartier->getVille(), $f_quarter, $page, $max_per_page);
                $intitule = $course->getIntitule();
                $city = $quartier->getVille();
            } else {
                $profs = $enseignementRep->getProfsByCoursAndCity($course, $quartier->getVille(), $page, $max_per_page);
                $intitule = $course->getIntitule();
                $city = $quartier->getVille();
            }
        }

        $refine_form = $this->createForm(RefineFormType::class);
        $refine_form->handleRequest($request);
        // to set $profs value for refine filters
        if ($refine_form->isSubmitted() && $refine_form->isValid()) {
            $data = $refine_form->getData();
            if (isset($data['quartier']) && $course != null && $quartier != null) {
                return $this->redirectToRoute('lgp_course_search', array('slug_course' => $course->getSlug(),'slug_ville' => $quartier->getSlugVille(), 'quarter' => $data['quartier']->getIntitule()));
            }else{
                return $this->redirectToRoute('lgp_course_search', array('slug_course' => $course->getSlug(),'slug_ville' => $quartier->getSlugVille()));
            }
        }


        $profsCount = count($profs);
        $pageCount = ceil($profsCount / $max_per_page);

        if ($pageCount < $page && $pageCount != 0 || $page < 0) {
            throw new NotFoundHttpException('La page demandée n\'existe pas.');// page 404
        }

        $params = array(
            'intitule' => $intitule,
            'city' => $city,
            'courses' => $courses,
            'courseFound' => $course,
            'matieres_profs' => $profs,
            'enseignementRep' => $enseignementRep,
            'avisRep' => $avisRep,
            'refine_form' => $refine_form->createView(),
            'pagination' => array(
                'route' => 'lgp_course_search',
                'pages_count' => $pageCount,
                'profs_count' => $profsCount,
                'max_per_page' => $max_per_page,
                'page' => $page,
                'route_params' => array('slug_ville' => $slug_ville, 'slug_course' => $slug_course)
            ),
        );

        $course_city_form = $this->createForm(CoursSearchCourseCityType::class);
        $course_city_form->handleRequest($request);
        if ($course_city_form->isSubmitted() && $course_city_form->isValid()) {
            $data = $course_city_form->getData();

            if (isset($data['intitule']) && isset($data['quartier'])) {
                $courseFound = $coursRep->getCoursByIntitule($data['intitule']);
                if ($courseFound != null)
                    return $this->redirectToRoute('lgp_course_search', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_course' => $courseFound->getSlug()));
                else
                    return $this->redirectToRoute('lgp_course_search', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_course' => $data['intitule']));
            } else {
                return $this->redirectToRoute($request->attributes->get("_route"), $request->attributes->get("_route_params"));
            }
        }

        return $this->render('LGPCourseBundle:Course:search_course.html.twig', array('params' => $params, 'form_course_city' => $course_city_form->createView()));
    }

    public function searchCourseAction($slug_course, $page, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $enseignementRep = $em->getRepository("LGPCourseBundle:Enseignement");
        $coursRep = $em->getRepository("LGPCourseBundle:Cours");
        $course = $coursRep->findOneBy(array('slug' => $slug_course));
        $avisRep = $em->getRepository("LGPUserBundle:Avis");
        $courses = $coursRep->findAll();
        $max_per_page = 10;
        $profs = array();
        $intitule = $slug_course;

        if ($course != null) {
            $profs = $enseignementRep->getProfsByCours($course, $page, $max_per_page);
            $intitule = $course->getIntitule();
        }

        // filters params
        $f_quarter = $request->query->get('quarter');

        if ($course != null) {
            if ($f_quarter != null) {
                $profs = $enseignementRep->getProfsByCoursAndQuarter($course, $f_quarter, $page, $max_per_page);
                $intitule = $course->getIntitule();
            } else {
                $profs = $enseignementRep->getProfsByCours($course, $page, $max_per_page);
                $intitule = $course->getIntitule();
            }
        }


        $refine_form = $this->createForm(RefineFormType::class);
        $refine_form->handleRequest($request);
// to set $profs value for refine filters
        if ($refine_form->isSubmitted() && $refine_form->isValid()) {
            $data = $refine_form->getData();
            if (isset($data['quartier']) && $course != null) {
                return $this->redirectToRoute('lgp_course_search_intitule', array('slug_course' => $course->getSlug(), 'quarter' => $data['quartier']->getIntitule()));
            }
            else{
                return $this->redirectToRoute('lgp_course_search_intitule', array('slug_course' => $course->getSlug()));
            }
        }

        $profsCount = count($profs);
        $pageCount = ceil($profsCount / $max_per_page);

        if ($pageCount < $page && $pageCount != 0 || $page < 0) {
            throw new NotFoundHttpException('La page demandée n\'existe pas.');// page 404
        }

        $params = array(
            'intitule' => $intitule,
            'courses' => $courses,
            'city' => null,
            'courseFound' => $course,
            'matieres_profs' => $profs,
            'enseignementRep' => $enseignementRep,
            'avisRep' => $avisRep,
            'refine_form' => $refine_form->createView(),
            'pagination' => array(
                'route' => 'lgp_course_search_intitule',
                'pages_count' => $pageCount,
                'profs_count' => $profsCount,
                'max_per_page' => $max_per_page,
                'page' => $page,
                'route_params' => array('slug_course' => $slug_course)
            ),
        );


        $course_city_form = $this->createForm(CoursSearchCourseCityType::class);
        $course_city_form->handleRequest($request);
        if ($course_city_form->isSubmitted() && $course_city_form->isValid()) {
            $data = $course_city_form->getData();

            if (isset($data['intitule']) && isset($data['quartier'])) {
                $courseFound = $coursRep->getCoursByIntitule($data['intitule']);
                if ($courseFound != null)
                    return $this->redirectToRoute('lgp_course_search', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_course' => $courseFound->getSlug()));
                else
                    return $this->redirectToRoute('lgp_course_search', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_course' => $data['intitule']));
            } else {
                return $this->redirectToRoute($request->attributes->get("_route"), $request->attributes->get("_route_params"));
            }
        }

        return $this->render('LGPCourseBundle:Course:search_course.html.twig', array('params' => $params, 'form_course_city' => $course_city_form->createView()));
    }

    public function searchCityAction($slug_city, $page, Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $enseignementRep = $em->getRepository("LGPCourseBundle:Enseignement");
        $coursRep = $em->getRepository("LGPCourseBundle:Cours");
        $quarterRep = $em->getRepository("LGPUserBundle:Quartier");
        /*$course = $coursRep->findOneBy(array('slug' => $slug_course));*/
        $course = null;
        $quarter = $quarterRep->findOneBy(array('slugVille' => $slug_city));
        $avisRep = $em->getRepository("LGPUserBundle:Avis");
        $courses = $coursRep->findAll();
        $max_per_page = 10;
        $profs = array();
        $intitule = null;
        $city = $slug_city;

        // filters params
        $f_quarter = $request->query->get('quarter');

        if ($quarter != null) {
            if ($f_quarter != null) {
                $profs = $enseignementRep->getProfsByCityAndQuarter($quarter->getVille(), $f_quarter, $page, $max_per_page);
                $city = $quarter->getVille();
            } else {
                $profs = $enseignementRep->getProfsByCity($quarter->getVille(), $page, $max_per_page);
                $city = $quarter->getVille();
            }
        }

        $refine_form = $this->createForm(RefineFormType::class);
        $refine_form->handleRequest($request);
// to set $profs value for refine filters
        if ($refine_form->isSubmitted() && $refine_form->isValid()) {
            $data = $refine_form->getData();
            if (isset($data['quartier']) && $quarter != null) {
                return $this->redirectToRoute('lgp_course_search_city', array('slug_city' => $quarter->getSlugVille(), 'quarter' => $data['quartier']->getIntitule()));
            }else{
                return $this->redirectToRoute('lgp_course_search_city', array('slug_city' => $quarter->getSlugVille()));
            }
        }

        $profsCount = count($profs);
        $pageCount = ceil($profsCount / $max_per_page);

        if ($pageCount < $page && $pageCount != 0 || $page < 0) {
            throw new NotFoundHttpException('La page demandée n\'existe pas.');// page 404
        }

        $params = array(
            'intitule' => $intitule,
            'courses' => $courses,
            'city' => $city,
            'courseFound' => $course,
            'matieres_profs' => $profs,
            'enseignementRep' => $enseignementRep,
            'avisRep' => $avisRep,
            'refine_form' => $refine_form->createView(),
            'pagination' => array(
                'route' => 'lgp_course_search_city',
                'pages_count' => $pageCount,
                'profs_count' => $profsCount,
                'max_per_page' => $max_per_page,
                'page' => $page,
                'route_params' => array('slug_city' => $slug_city)
            ),
        );


        $course_city_form = $this->createForm(CoursSearchCourseCityType::class);

        $course_city_form->handleRequest($request);
        if ($course_city_form->isSubmitted() && $course_city_form->isValid()) {
            $data = $course_city_form->getData();

            if (isset($data['intitule']) && isset($data['quartier'])) {
                $courseFound = $coursRep->getCoursByIntitule($data['intitule']);
                if ($courseFound != null)
                    return $this->redirectToRoute('lgp_course_search', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_course' => $courseFound->getSlug()));
                else
                    return $this->redirectToRoute('lgp_course_search', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_course' => $data['intitule']));
            } else {
                return $this->redirectToRoute($request->attributes->get("_route"), $request->attributes->get("_route_params"));
            }
        }


        return $this->render('LGPCourseBundle:Course:search_course.html.twig', array('params' => $params, 'form_course_city' => $course_city_form->createView()));
    }

    public function searchCourseCityAction($slug_ville, $slug_cours, $page, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $enseignementRep = $em->getRepository("LGPCourseBundle:Enseignement");
        $quartierRep = $em->getRepository("LGPUserBundle:Quartier");
        $coursRep = $em->getRepository("LGPCourseBundle:Cours");
        $avisRep = $em->getRepository("LGPUserBundle:Avis");
        $courses = $coursRep->findAll();
        $quartier = $quartierRep->findOneBy(array('slugVille' => $slug_ville));
        $course = $coursRep->findOneBy(array('slug' => $slug_cours));
        $max_per_page = 10;
        $profsByCoursAndCity = array();
        $ville = $slug_ville;
        $intituleCours = $slug_cours;

        if ($quartier != null && $course != null) {
            $profsByCoursAndCity = $enseignementRep->getProfsByCoursAndCity($course, $quartier, $page, $max_per_page);
            $ville = $quartier->getVille();
            $quartier_name = $quartier->getIntitule();
            $intituleCours = $course->getIntitule();
        }

        $profsCount = count($profsByCoursAndCity);
        $pageCount = ceil($profsCount / $max_per_page);

        if ($pageCount < $page && $pageCount != 0) {
            throw new NotFoundHttpException('404: Oups!!! La page demandée n\'existe pas.');// page 404, sauf pour la première page
        }

        $params = array(
            'ville' => $ville,
            'intitule_cours' => $intituleCours,
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
                'route_params' => array('slug_ville' => $slug_ville, 'slug_cours' => $slug_cours)
            ),
        );

        $course_city_form = $this->createForm(CoursSearchCourseCityType::class);

        $course_city_form->handleRequest($request);


        if ($course_city_form->isSubmitted() && $course_city_form->isValid()) {
            $data = $course_city_form->getData();

            if (isset($data['intitule']) && isset($data['quartier'])) {
                $courseFound = $coursRep->getCoursByIntitule($data['intitule']);
                if ($courseFound != null) {
                    return $this->redirectToRoute('lgp_course_find_prof_course_city', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_cours' => $courseFound->getSlug()));
                } else {

                    return $this->redirectToRoute('lgp_course_find_prof_course_city', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_cours' => $data['intitule']));
                }
            }
        }

        return $this->render('LGPCourseBundle:Course:search_course_city.html.twig', array('params' => $params, 'form_course_city' => $course_city_form->createView()));
    }

    public function searchCourseQuarterAction($slug_ville, $slug_quartier, $slug_cours, $page, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $enseignementRep = $em->getRepository("LGPCourseBundle:Enseignement");
        $quartierRep = $em->getRepository("LGPUserBundle:Quartier");
        $coursRep = $em->getRepository("LGPCourseBundle:Cours");
        $avisRep = $em->getRepository("LGPUserBundle:Avis");
        $courses = $coursRep->findAll();
        $quartier = $quartierRep->findOneBy(array('slugVille' => $slug_ville, 'slugQuartier' => $slug_quartier));
        $course = $coursRep->findOneBy(array('slug' => $slug_cours));
        $max_per_page = 10;
        $profsByCoursAndCity = array();
        $ville = $slug_ville;
        $quartier_name = $slug_quartier;
        $intituleCours = $slug_cours;

        if ($quartier != null && $course != null) {
            $profsByCoursAndCity = $enseignementRep->getProfsByCoursAndCityAndQuarter($course, $quartier, $quartier, $page, $max_per_page);
            $ville = $quartier->getVille();
            $quartier_name = $quartier->getIntitule();
            $intituleCours = $course->getIntitule();
        }

        $profsCount = count($profsByCoursAndCity);
        $pageCount = ceil($profsCount / $max_per_page);

        if ($pageCount < $page && $pageCount != 0) {
            throw new NotFoundHttpException('404: Oups!!! La page demandée n\'existe pas.');// page 404, sauf pour la première page
        }

        $params = array(
            'ville' => $ville,
            'quartier_name' => $quartier_name,
            'intitule_cours' => $intituleCours,
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
                'route_params' => array('slug_ville' => $slug_ville, 'slug_quartier' => $slug_quartier, 'slug_cours' => $slug_cours)
            ),
        );

        $course_quarter_form = $this->createForm(CoursSearchCourseQuarterType::class);
        $city_form = $this->createForm(CoursSearchCityType::class);
        $prof_name_form = $this->createForm(CoursSearchProfsNameType::class);
        $category_form = $this->createForm(CoursSearchCategorieType::class);
        $quarter_form = $this->createForm(CoursSearchQuarterType::class);
        $course_city_form = $this->createForm(CoursSearchCourseCityType::class);
        $course_form = $this->createForm(CoursSearchCourseType::class);

        $course_quarter_form->handleRequest($request);
        $city_form->handleRequest($request);
        $prof_name_form->handleRequest($request);
        $category_form->handleRequest($request);
        $quarter_form->handleRequest($request);
        $course_city_form->handleRequest($request);
        $course_form->handleRequest($request);

        if ($city_form->isSubmitted() && $city_form->isValid()) {
            $data = $city_form->getData();
            if (isset($data['ville'])) {
                return $this->redirectToRoute('lgp_course_find_prof_city', array('slugVille' => $data['ville']->getSlugVille()));
            }
        }

        if ($prof_name_form->isSubmitted() && $prof_name_form->isValid()) {
            $data = $prof_name_form->getData();
            if (isset($data['prof_name'])) {
                return $this->redirectToRoute('lgp_course_find_prof_name', array('prof_name' => $data['prof_name']));
            }
        }

        if ($course_form->isSubmitted() && $course_form->isValid()) {
            $data = $course_form->getData();
            if (isset($data['intitule'])) {
                $courseFound = $coursRep->getCoursByIntitule($data['intitule']);
                if ($courseFound != null) {
                    return $this->redirectToRoute('lgp_course_find_prof_course', array('slug_course' => $courseFound->getSlug()));
                } else {

                    return $this->redirectToRoute('lgp_course_find_prof_course', array('slug_course' => $data['intitule']));
                }
            }
        }

        if ($category_form->isSubmitted() && $category_form->isValid()) {
            $data = $category_form->getData();
            if (isset($data['category_name'])) {
                return $this->redirectToRoute('lgp_course_find_prof_category', array('category_name' => $data['category_name']));
            }
        }

        if ($quarter_form->isSubmitted() && $quarter_form->isValid()) {
            $data = $quarter_form->getData();
            if (isset($data['quartier'])) {
                return $this->redirectToRoute('lgp_course_find_prof_city_quarter', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_quartier' => $data['quartier']->getSlugQuartier()));
            }
        }

        if ($course_quarter_form->isSubmitted() && $course_quarter_form->isValid()) {
            $data = $course_quarter_form->getData();

            if (isset($data['intitule']) && isset($data['quartier'])) {
                $courseFound = $coursRep->getCoursByIntitule($data['intitule']);
                if ($courseFound != null) {
                    return $this->redirectToRoute('lgp_course_find_prof_course_quarter', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_quartier' => $data['quartier']->getSlugQuartier(), 'slug_cours' => $courseFound->getSlug()));
                } else {

                    return $this->redirectToRoute('lgp_course_find_prof_course_quarter', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_quartier' => $data['quartier']->getSlugQuartier(), 'slug_cours' => $data['intitule']));
                }
            }
        }

        if ($course_city_form->isSubmitted() && $course_city_form->isValid()) {
            $data = $course_city_form->getData();

            if (isset($data['intitule']) && isset($data['quartier'])) {
                $courseFound = $coursRep->getCoursByIntitule($data['intitule']);
                if ($courseFound != null) {
                    return $this->redirectToRoute('lgp_course_find_prof_course_city', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_cours' => $courseFound->getSlug()));
                } else {

                    return $this->redirectToRoute('lgp_course_find_prof_course_city', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_cours' => $data['intitule']));
                }
            }
        }

        return $this->render('LGPCourseBundle:Course:search_course_quarter.html.twig', array('params' => $params, 'form_course' => $course_form->createView(), 'form_course_city' => $course_city_form->createView(), 'form_course_quarter' => $course_quarter_form->createView(), 'form_city' => $city_form->createView(), 'form_prof_name' => $prof_name_form->createView(), 'form_category' => $category_form->createView(), 'form_quarter' => $quarter_form->createView()));
    }


    public function searchQuarterAction($slug_ville, $slug_quartier, $page, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $enseignementRep = $em->getRepository("LGPCourseBundle:Enseignement");
        $coursRep = $em->getRepository("LGPCourseBundle:Cours");
        $quartierRep = $em->getRepository('LGPUserBundle:Quartier');
        $quartier = $quartierRep->findOneBy(array('slugVille' => $slug_ville, 'slugQuartier' => $slug_quartier));
        $avisRep = $em->getRepository("LGPUserBundle:Avis");
        $courses = $coursRep->findAll();
        $max_per_page = 10;
        $profsByQuarter = array();
        $ville = $slug_ville;
        $quartier_name = $slug_quartier;

        if ($quartier != null) {
            $profsByQuarter = $enseignementRep->getProfsByCityAndQuarter($quartier->getVille(), $quartier->getIntitule(), $page, $max_per_page);
            $ville = $quartier->getVille();
            $quartier_name = $quartier->getIntitule();
        }
        $profsCount = count($profsByQuarter);
        $pageCount = ceil($profsCount / $max_per_page);
        if ($pageCount < $page && $pageCount != 0) {
            throw new NotFoundHttpException('404: Oups!!! La page demandée n\'existe pas.');// page 404, sauf pour la première page
        }

        $params = array(
            'quartier_name' => $quartier_name,
            'ville' => $ville,
            'courses' => $courses,
            'matieres_profs' => $profsByQuarter,
            'enseignementRep' => $enseignementRep,
            'avisRep' => $avisRep,
            'pagination' => array(
                'route' => 'lgp_course_find_prof_city',
                'pages_count' => $pageCount,
                'profs_count' => $profsCount,
                'max_per_page' => $max_per_page,
                'page' => $page,
                'route_params' => array('slug_ville' => $ville, 'slug_quartier' => $quartier_name)
            ),
        );

        $course_quarter_form = $this->createForm(CoursSearchCourseQuarterType::class);
        $city_form = $this->createForm(CoursSearchCityType::class);
        $prof_name_form = $this->createForm(CoursSearchProfsNameType::class);
        $category_form = $this->createForm(CoursSearchCategorieType::class);
        $quarter_form = $this->createForm(CoursSearchQuarterType::class);
        $course_city_form = $this->createForm(CoursSearchCourseCityType::class);
        $course_form = $this->createForm(CoursSearchCourseType::class);

        $course_quarter_form->handleRequest($request);
        $city_form->handleRequest($request);
        $prof_name_form->handleRequest($request);
        $category_form->handleRequest($request);
        $quarter_form->handleRequest($request);
        $course_city_form->handleRequest($request);
        $course_form->handleRequest($request);

        if ($city_form->isSubmitted() && $city_form->isValid()) {
            $data = $city_form->getData();
            if (isset($data['ville'])) {
                return $this->redirectToRoute('lgp_course_find_prof_city', array('slugVille' => $data['ville']->getSlugVille()));
            }
        }

        if ($prof_name_form->isSubmitted() && $prof_name_form->isValid()) {
            $data = $prof_name_form->getData();
            if (isset($data['prof_name'])) {
                return $this->redirectToRoute('lgp_course_find_prof_name', array('prof_name' => $data['prof_name']));
            }
        }

        if ($course_form->isSubmitted() && $course_form->isValid()) {
            $data = $course_form->getData();
            if (isset($data['intitule'])) {
                $courseFound = $coursRep->getCoursByIntitule($data['intitule']);
                if ($courseFound != null) {
                    return $this->redirectToRoute('lgp_course_find_prof_course', array('slug_course' => $courseFound->getSlug()));
                } else {

                    return $this->redirectToRoute('lgp_course_find_prof_course', array('slug_course' => $data['intitule']));
                }
            }
        }

        if ($category_form->isSubmitted() && $category_form->isValid()) {
            $data = $category_form->getData();
            if (isset($data['category_name'])) {
                return $this->redirectToRoute('lgp_course_find_prof_category', array('category_name' => $data['category_name']));
            }
        }

        if ($quarter_form->isSubmitted() && $quarter_form->isValid()) {
            $data = $quarter_form->getData();
            if (isset($data['quartier'])) {
                return $this->redirectToRoute('lgp_course_find_prof_city_quarter', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_quartier' => $data['quartier']->getSlugQuartier()));
            }
        }

        if ($course_quarter_form->isSubmitted() && $course_quarter_form->isValid()) {
            $data = $course_quarter_form->getData();

            if (isset($data['intitule']) && isset($data['quartier'])) {
                $courseFound = $coursRep->getCoursByIntitule($data['intitule']);
                if ($courseFound != null) {
                    return $this->redirectToRoute('lgp_course_find_prof_course_quarter', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_quartier' => $data['quartier']->getSlugQuartier(), 'slug_cours' => $courseFound->getSlug()));
                } else {

                    return $this->redirectToRoute('lgp_course_find_prof_course_quarter', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_quartier' => $data['quartier']->getSlugQuartier(), 'slug_cours' => $data['intitule']));
                }
            }
        }

        if ($course_city_form->isSubmitted() && $course_city_form->isValid()) {
            $data = $course_city_form->getData();

            if (isset($data['intitule']) && isset($data['quartier'])) {
                $courseFound = $coursRep->getCoursByIntitule($data['intitule']);
                if ($courseFound != null) {
                    return $this->redirectToRoute('lgp_course_find_prof_course_city', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_cours' => $courseFound->getSlug()));
                } else {

                    return $this->redirectToRoute('lgp_course_find_prof_course_city', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_cours' => $data['intitule']));
                }
            }
        }

        return $this->render('LGPCourseBundle:Course:search_quarter.html.twig', array('params' => $params, 'form_course' => $course_form->createView(), 'form_course_city' => $course_city_form->createView(), 'form_course_quarter' => $course_quarter_form->createView(), 'form_city' => $city_form->createView(), 'form_prof_name' => $prof_name_form->createView(), 'form_category' => $category_form->createView(), 'form_quarter' => $quarter_form->createView()));
    }

    public function searchProfNameAction($prof_name, $page, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $enseignementRep = $em->getRepository("LGPCourseBundle:Enseignement");
        $coursRep = $em->getRepository("LGPCourseBundle:Cours");
        $avisRep = $em->getRepository("LGPUserBundle:Avis");

        $courses = $coursRep->findAll();
        $profs = $enseignementRep->getProfsByName($prof_name);
        $max_per_page = 10;
        $profsCount = count($profs);
        $pageCount = ceil($profsCount / $max_per_page);
        if ($pageCount < $page && $pageCount != 0) {
            throw new NotFoundHttpException('404: Oups!!! La page demandée n\'existe pas.');// page 404, sauf pour la première page
        }

        $params = array(
            'name' => $prof_name,
            'matieres_profs' => $profs,
            'courses' => $courses,
            'enseignementRep' => $enseignementRep,
            'avisRep' => $avisRep,
            'pagination' => array(
                'route' => 'lgp_course_find_prof_city',
                'pages_count' => $pageCount,
                'profs_count' => $profsCount,
                'max_per_page' => $max_per_page,
                'page' => $page,
                'route_params' => array('prof_name' => $prof_name)
            ),
        );

        $course_quarter_form = $this->createForm(CoursSearchCourseQuarterType::class);
        $city_form = $this->createForm(CoursSearchCityType::class);
        $prof_name_form = $this->createForm(CoursSearchProfsNameType::class);
        $category_form = $this->createForm(CoursSearchCategorieType::class);
        $quarter_form = $this->createForm(CoursSearchQuarterType::class);
        $course_city_form = $this->createForm(CoursSearchCourseCityType::class);
        $course_form = $this->createForm(CoursSearchCourseType::class);

        $course_quarter_form->handleRequest($request);
        $city_form->handleRequest($request);
        $prof_name_form->handleRequest($request);
        $category_form->handleRequest($request);
        $quarter_form->handleRequest($request);
        $course_city_form->handleRequest($request);
        $course_form->handleRequest($request);

        if ($city_form->isSubmitted() && $city_form->isValid()) {
            $data = $city_form->getData();
            if (isset($data['ville'])) {
                return $this->redirectToRoute('lgp_course_find_prof_city', array('slugVille' => $data['ville']->getSlugVille()));
            }
        }

        if ($prof_name_form->isSubmitted() && $prof_name_form->isValid()) {
            $data = $prof_name_form->getData();
            if (isset($data['prof_name'])) {
                return $this->redirectToRoute('lgp_course_find_prof_name', array('prof_name' => $data['prof_name']));
            }
        }

        if ($course_form->isSubmitted() && $course_form->isValid()) {
            $data = $course_form->getData();
            if (isset($data['intitule'])) {
                $courseFound = $coursRep->getCoursByIntitule($data['intitule']);
                if ($courseFound != null) {
                    return $this->redirectToRoute('lgp_course_find_prof_course', array('slug_course' => $courseFound->getSlug()));
                } else {

                    return $this->redirectToRoute('lgp_course_find_prof_course', array('slug_course' => $data['intitule']));
                }
            }
        }

        if ($category_form->isSubmitted() && $category_form->isValid()) {
            $data = $category_form->getData();
            if (isset($data['category_name'])) {
                return $this->redirectToRoute('lgp_course_find_prof_category', array('category_name' => $data['category_name']));
            }
        }

        if ($quarter_form->isSubmitted() && $quarter_form->isValid()) {
            $data = $quarter_form->getData();
            if (isset($data['quartier'])) {
                return $this->redirectToRoute('lgp_course_find_prof_city_quarter', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_quartier' => $data['quartier']->getSlugQuartier()));
            }
        }

        if ($course_quarter_form->isSubmitted() && $course_quarter_form->isValid()) {
            $data = $course_quarter_form->getData();

            if (isset($data['intitule']) && isset($data['quartier'])) {
                $courseFound = $coursRep->getCoursByIntitule($data['intitule']);
                if ($courseFound != null) {
                    return $this->redirectToRoute('lgp_course_find_prof_course_quarter', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_quartier' => $data['quartier']->getSlugQuartier(), 'slug_cours' => $courseFound->getSlug()));
                } else {

                    return $this->redirectToRoute('lgp_course_find_prof_course_quarter', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_quartier' => $data['quartier']->getSlugQuartier(), 'slug_cours' => $data['intitule']));
                }
            }
        }

        if ($course_city_form->isSubmitted() && $course_city_form->isValid()) {
            $data = $course_city_form->getData();

            if (isset($data['intitule']) && isset($data['quartier'])) {
                $courseFound = $coursRep->getCoursByIntitule($data['intitule']);
                if ($courseFound != null) {
                    return $this->redirectToRoute('lgp_course_find_prof_course_city', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_cours' => $courseFound->getSlug()));
                } else {

                    return $this->redirectToRoute('lgp_course_find_prof_course_city', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_cours' => $data['intitule']));
                }
            }
        }

        return $this->render('LGPCourseBundle:Course:search_prof_name.html.twig', array('params' => $params, 'form_course' => $course_form->createView(), 'form_course_city' => $course_city_form->createView(), 'form_course_quarter' => $course_quarter_form->createView(), 'form_city' => $city_form->createView(), 'form_prof_name' => $prof_name_form->createView(), 'form_category' => $category_form->createView(), 'form_quarter' => $quarter_form->createView()));
    }

    public function searchCategorieNameAction($category_name, $page, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $enseignementRep = $em->getRepository("LGPCourseBundle:Enseignement");
        $coursRep = $em->getRepository("LGPCourseBundle:Cours");
        $avisRep = $em->getRepository("LGPUserBundle:Avis");

        $courses = $coursRep->findAll();
        $profs = $enseignementRep->getProfsByCategory($category_name);
        $max_per_page = 10;
        $profsCount = count($profs);
        $pageCount = ceil($profsCount / $max_per_page);
        if ($pageCount < $page && $pageCount != 0) {
            throw new NotFoundHttpException('404: Oups!!! La page demandée n\'existe pas.');// page 404, sauf pour la première page
        }

        $params = array(
            'name' => $category_name,
            'matieres_profs' => $profs,
            'courses' => $courses,
            'enseignementRep' => $enseignementRep,
            'avisRep' => $avisRep,
            'pagination' => array(
                'route' => 'lgp_course_find_prof_city',
                'pages_count' => $pageCount,
                'profs_count' => $profsCount,
                'max_per_page' => $max_per_page,
                'page' => $page,
                'route_params' => array('prof_name' => $category_name)
            ),
        );

        $course_quarter_form = $this->createForm(CoursSearchCourseQuarterType::class);
        $city_form = $this->createForm(CoursSearchCityType::class);
        $prof_name_form = $this->createForm(CoursSearchProfsNameType::class);
        $category_form = $this->createForm(CoursSearchCategorieType::class);
        $quarter_form = $this->createForm(CoursSearchQuarterType::class);
        $course_city_form = $this->createForm(CoursSearchCourseCityType::class);
        $course_form = $this->createForm(CoursSearchCourseType::class);

        $course_quarter_form->handleRequest($request);
        $city_form->handleRequest($request);
        $prof_name_form->handleRequest($request);
        $category_form->handleRequest($request);
        $quarter_form->handleRequest($request);
        $course_city_form->handleRequest($request);
        $course_form->handleRequest($request);

        if ($city_form->isSubmitted() && $city_form->isValid()) {
            $data = $city_form->getData();
            if (isset($data['ville'])) {
                return $this->redirectToRoute('lgp_course_find_prof_city', array('slugVille' => $data['ville']->getSlugVille()));
            }
        }

        if ($prof_name_form->isSubmitted() && $prof_name_form->isValid()) {
            $data = $prof_name_form->getData();
            if (isset($data['prof_name'])) {
                return $this->redirectToRoute('lgp_course_find_prof_name', array('prof_name' => $data['prof_name']));
            }
        }

        if ($course_form->isSubmitted() && $course_form->isValid()) {
            $data = $course_form->getData();
            if (isset($data['intitule'])) {
                $courseFound = $coursRep->getCoursByIntitule($data['intitule']);
                if ($courseFound != null) {
                    return $this->redirectToRoute('lgp_course_find_prof_course', array('slug_course' => $courseFound->getSlug()));
                } else {

                    return $this->redirectToRoute('lgp_course_find_prof_course', array('slug_course' => $data['intitule']));
                }
            }
        }

        if ($category_form->isSubmitted() && $category_form->isValid()) {
            $data = $category_form->getData();
            if (isset($data['category_name'])) {
                return $this->redirectToRoute('lgp_course_find_prof_category', array('category_name' => $data['category_name']));
            }
        }

        if ($quarter_form->isSubmitted() && $quarter_form->isValid()) {
            $data = $quarter_form->getData();
            if (isset($data['quartier'])) {
                return $this->redirectToRoute('lgp_course_find_prof_city_quarter', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_quartier' => $data['quartier']->getSlugQuartier()));
            }
        }

        if ($course_quarter_form->isSubmitted() && $course_quarter_form->isValid()) {
            $data = $course_quarter_form->getData();

            if (isset($data['intitule']) && isset($data['quartier'])) {
                $courseFound = $coursRep->getCoursByIntitule($data['intitule']);
                if ($courseFound != null) {
                    return $this->redirectToRoute('lgp_course_find_prof_course_quarter', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_quartier' => $data['quartier']->getSlugQuartier(), 'slug_cours' => $courseFound->getSlug()));
                } else {

                    return $this->redirectToRoute('lgp_course_find_prof_course_quarter', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_quartier' => $data['quartier']->getSlugQuartier(), 'slug_cours' => $data['intitule']));
                }
            }
        }

        if ($course_city_form->isSubmitted() && $course_city_form->isValid()) {
            $data = $course_city_form->getData();

            if (isset($data['intitule']) && isset($data['quartier'])) {
                $courseFound = $coursRep->getCoursByIntitule($data['intitule']);
                if ($courseFound != null) {
                    return $this->redirectToRoute('lgp_course_find_prof_course_city', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_cours' => $courseFound->getSlug()));
                } else {

                    return $this->redirectToRoute('lgp_course_find_prof_course_city', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_cours' => $data['intitule']));
                }
            }
        }

        return $this->render('LGPCourseBundle:Course:search_category.html.twig', array('params' => $params, 'form_course', $course_form->createView(), 'form_course_city' => $course_city_form->createView(), 'form_course_quarter' => $course_quarter_form->createView(), 'form_city' => $city_form->createView(), 'form_prof_name' => $prof_name_form->createView(), 'form_category' => $category_form->createView(), 'form_quarter' => $quarter_form->createView()));

    }

}
