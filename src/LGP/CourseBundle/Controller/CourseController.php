<?php

namespace LGP\CourseBundle\Controller;

use Doctrine\ORM\NoResultException;
use LGP\CourseBundle\Entity\Cours;
use LGP\CourseBundle\Form\CoursSearchRefineType;
use LGP\UserBundle\Entity\Quartier;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Validator\Exception\InvalidArgumentException;

class CourseController extends Controller
{

    public function searchAction($page, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $enseignementRep = $em->getRepository("LGPCourseBundle:Enseignement");
        $coursRep = $em->getRepository("LGPCourseBundle:Cours");
        $avisRep = $em->getRepository("LGPUserBundle:Avis");
        $courses = $coursRep->findAll();
        $max_per_page = 10;
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

        $course_form_refine = $this->createForm(CoursSearchRefineType::class);
        $course_form_refine->handleRequest($request);

        if ($course_form_refine->isSubmitted() && $course_form_refine->isValid()) {
            $data = $course_form_refine->getData();

            if (isset($data['intitule'])) {

                if (isset($data['quartier'])) {
                    $courseFound = $coursRep->getCoursByIntitule($data['intitule']);
                    if ($courseFound == null)
                        throw new NotFoundHttpException("pas de cours " . $data['intitule']);
                    return $this->redirectToRoute('lgp_course_find_prof_refine_quarter', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_quartier' => $data['quartier']->getSlugQuartier(), 'slug' => $courseFound->getSlug()));
                }

                $courseFound = $coursRep->getCoursByIntitule($data['intitule']);
                if ($courseFound == null)
                    throw new NotFoundHttpException("pas de cours " . $data['intitule']);

                return $this->redirectToRoute('lgp_course_find_prof', array('slug' => $courseFound->getSlug()));
            }

            if ((isset($data['quartier']))) {
                return $this->redirectToRoute('lgp_course_find_prof_city_quarter', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_quartier' => $data['quartier']->getIntitule()));
            }

            return $this->redirectToRoute('lgp_course_find');
        }

        return $this->render('LGPCourseBundle:Course:search.html.twig', array('params' => $params, 'form' => $course_form_refine->createView()));
    }

    public function searchCourseAction(Cours $course, $page, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $enseignementRep = $em->getRepository("LGPCourseBundle:Enseignement");
        $coursRep = $em->getRepository("LGPCourseBundle:Cours");
        $avisRep = $em->getRepository("LGPUserBundle:Avis");
        $courses = $coursRep->findAll();
        $max_per_page = 10;

        $profsByCours = $enseignementRep->getProfsByCours($course, $page, $max_per_page);
        $profsCount = count($profsByCours);
        $pageCount = ceil($profsCount / $max_per_page);

        if ($pageCount < $page && $pageCount != 0) {
            throw new NotFoundHttpException('La page demandée n\'existe pas.'); // page 404
        }

        $params = array(
            'courses' => $courses,
            'courseFound' => $course,
            'matieres_profs' => $profsByCours,
            'enseignementRep' => $enseignementRep,
            'avisRep' => $avisRep,
            'pagination' => array(
                'route' => 'lgp_course_find_prof',
                'pages_count' => $pageCount,
                'profs_count' => $profsCount,
                'max_per_page' => $max_per_page,
                'page' => $page,
                'route_params' => array('slug' => $course->getSlug())
            ),
        );

        $course_form_refine = $this->createForm(CoursSearchRefineType::class);
        $course_form_refine->handleRequest($request);
        if ($course_form_refine->isSubmitted() && $course_form_refine->isValid()) {
            $data = $course_form_refine->getData();

            if (isset($data['intitule'])) {

                if (isset($data['quartier'])) {
                    $courseFound = $coursRep->getCoursByIntitule($data['intitule']);
                    if ($courseFound == null)
                        throw new NotFoundHttpException("pas de cours " . $data['intitule']);
                    return $this->redirectToRoute('lgp_course_find_prof_refine_quarter', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_quartier' => $data['quartier']->getSlugQuartier(), 'slug' => $courseFound->getSlug()));
                }

                $courseFound = $coursRep->getCoursByIntitule($data['intitule']);
                if ($courseFound == null)
                    throw new NotFoundHttpException("pas de cours " . $data['intitule']);

                return $this->redirectToRoute('lgp_course_find_prof', array('slug' => $courseFound->getSlug()));
            }

            if ((isset($data['quartier']))) {
                return $this->redirectToRoute('lgp_course_find_prof_city_quarter', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_quartier' => $data['quartier']->getIntitule()));
            }

            return $this->redirectToRoute('lgp_course_find');
        }

//        $request->request->set("intitule_cours", $coursFound->getIntitule());
        return $this->render('LGPCourseBundle:Course:search.html.twig', array('params' => $params, 'form' => $course_form_refine->createView()));
    }

    public function searchRefineAction(Quartier $quartier, Cours $course, $page, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $enseignementRep = $em->getRepository("LGPCourseBundle:Enseignement");
        $quartierRep = $em->getRepository("LGPUserBundle:Quartier");
        $coursRep = $em->getRepository("LGPCourseBundle:Cours");
        $avisRep = $em->getRepository("LGPUserBundle:Avis");
        $courses = $coursRep->findAll();
        $max_per_page = 10;

        $profsByCoursAndCity = $enseignementRep->getProfsByCoursAndCity($course, $quartier, $page, $max_per_page);
//                $coursCount = $enseigneRep->countProfsByCours($coursFound);
        $profsCount = count($profsByCoursAndCity);
        $pageCount = ceil($profsCount / $max_per_page);

        if ($pageCount < $page && $pageCount != 0) {
            throw new NotFoundHttpException('404: Oups!!! La page demandée n\'existe pas.'); // page 404, sauf pour la première page
        }

        $params = array(
            'quartier' => $quartier,
            'courseFound' => $course,
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
                'route_params' => array('slug' => $course->getSlug(), 'slugVille' => $quartier->getVille())
            ),
        );

        $course_form_refine = $this->createForm(CoursSearchRefineType::class);
        $course_form_refine->handleRequest($request);
        if ($course_form_refine->isSubmitted() && $course_form_refine->isValid()) {
            $data = $course_form_refine->getData();

            if (isset($data['intitule'])) {

                if (isset($data['quartier'])) {
                    $courseFound = $coursRep->getCoursByIntitule($data['intitule']);
                    if ($courseFound == null)
                        throw new NotFoundHttpException("pas de cours " . $data['intitule']);
                    return $this->redirectToRoute('lgp_course_find_prof_refine_quarter', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_quartier' => $data['quartier']->getSlugQuartier(), 'slug' => $courseFound->getSlug()));
                }

                $courseFound = $coursRep->getCoursByIntitule($data['intitule']);
                if ($courseFound == null)
                    throw new NotFoundHttpException("pas de cours " . $data['intitule']);

                return $this->redirectToRoute('lgp_course_find_prof', array('slug' => $courseFound->getSlug()));
            }

            if ((isset($data['quartier']))) {
                return $this->redirectToRoute('lgp_course_find_prof_city_quarter', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_quartier' => $data['quartier']->getIntitule()));
            }

            return $this->redirectToRoute('lgp_course_find');
        }

        return $this->render('LGPCourseBundle:Course:search.html.twig', array('params' => $params, 'form' => $course_form_refine->createView()));
    }

    /**
     * @param Quartier $quartier
     * @param Quartier $quartier1
     * @param Cours $course
     * @param $page
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @ParamConverter("quartier", options={"mapping" : {"slug_ville":"slugVille"}})
     * @ParamConverter("quartier1", options={"mapping" : {"slug_quartier":"slugQuartier"}})
     * @ParamConverter("course", options={"mapping" : {"slug":"slug"}})
     */

    public function searchRefineAllAction(Quartier $quartier, Quartier $quartier1, Cours $course, $page, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $enseignementRep = $em->getRepository("LGPCourseBundle:Enseignement");
        $quartierRep = $em->getRepository("LGPUserBundle:Quartier");
        $coursRep = $em->getRepository("LGPCourseBundle:Cours");
        $avisRep = $em->getRepository("LGPUserBundle:Avis");
        $courses = $coursRep->findAll();
        $max_per_page = 10;

        $profsByCoursAndCity = $enseignementRep->getProfsByCoursAndCityAndQuarter($course, $quartier, $quartier1, $page, $max_per_page);
//                $coursCount = $enseigneRep->countProfsByCours($coursFound);
        $profsCount = count($profsByCoursAndCity);
        $pageCount = ceil($profsCount / $max_per_page);

        if ($pageCount < $page && $pageCount != 0) {
            throw new NotFoundHttpException('404: Oups!!! La page demandée n\'existe pas.'); // page 404, sauf pour la première page
        }

        $params = array(
            'quartier' => $quartier,
            'quartier1' => $quartier1,
            'courseFound' => $course,
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
                'route_params' => array('slug' => $course->getSlug(), 'slugVille' => $quartier->getVille())
            ),
        );

        $course_form_refine = $this->createForm(CoursSearchRefineType::class);
        $course_form_refine->handleRequest($request);
        if ($course_form_refine->isSubmitted() && $course_form_refine->isValid()) {
            $data = $course_form_refine->getData();

            if (isset($data['intitule'])) {

                if (isset($data['quartier'])) {
                    $courseFound = $coursRep->getCoursByIntitule($data['intitule']);
                    if ($courseFound == null)
                        throw new NotFoundHttpException("pas de cours " . $data['intitule']);
                    return $this->redirectToRoute('lgp_course_find_prof_refine_quarter', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_quartier' => $data['quartier']->getSlugQuartier(), 'slug' => $courseFound->getSlug()));
                }

                $courseFound = $coursRep->getCoursByIntitule($data['intitule']);
                if ($courseFound == null)
                    throw new NotFoundHttpException("pas de cours " . $data['intitule']);

                return $this->redirectToRoute('lgp_course_find_prof', array('slug' => $courseFound->getSlug()));
            }

            if ((isset($data['quartier']))) {
                return $this->redirectToRoute('lgp_course_find_prof_city_quarter', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_quartier' => $data['quartier']->getIntitule()));
            }

            return $this->redirectToRoute('lgp_course_find');
        }

        return $this->render('LGPCourseBundle:Course:search.html.twig', array('params' => $params, 'form' => $course_form_refine->createView()));
    }

    public function searchCityAction(Quartier $quartier, $page, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $enseignementRep = $em->getRepository("LGPCourseBundle:Enseignement");
        $coursRep = $em->getRepository("LGPCourseBundle:Cours");
        $avisRep = $em->getRepository("LGPUserBundle:Avis");
        $courses = $coursRep->findAll();
        $max_per_page = 10;

        $profsByCity = $enseignementRep->getProfsByCity($quartier->getVille(), $page, $max_per_page);
        $profsCount = count($profsByCity);
        $pageCount = ceil($profsCount / $max_per_page);
        if ($pageCount < $page && $pageCount != 0) {
            throw new NotFoundHttpException('404: Oups!!! La page demandée n\'existe pas.'); // page 404, sauf pour la première page
        }
        $params = array(
            'ville' => $quartier->getVille(),
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
                'route_params' => array('slug' => $quartier->getVille())
            ),
        );

        $course_form_refine = $this->createForm(CoursSearchRefineType::class);
        $course_form_refine->handleRequest($request);
        if ($course_form_refine->isSubmitted() && $course_form_refine->isValid()) {
            $data = $course_form_refine->getData();

            if (isset($data['intitule'])) {

                if (isset($data['quartier'])) {
                    $courseFound = $coursRep->getCoursByIntitule($data['intitule']);
                    if ($courseFound == null)
                        throw new NotFoundHttpException("pas de cours " . $data['intitule']);
                    return $this->redirectToRoute('lgp_course_find_prof_refine_quarter', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_quartier' => $data['quartier']->getSlugQuartier(), 'slug' => $courseFound->getSlug()));
                }

                $courseFound = $coursRep->getCoursByIntitule($data['intitule']);
                if ($courseFound == null)
                    throw new NotFoundHttpException("pas de cours " . $data['intitule']);

                return $this->redirectToRoute('lgp_course_find_prof', array('slug' => $courseFound->getSlug()));
            }

            if ((isset($data['quartier']))) {
                return $this->redirectToRoute('lgp_course_find_prof_city_quarter', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_quartier' => $data['quartier']->getIntitule()));
            }

            return $this->redirectToRoute('lgp_course_find');
        }

        return $this->render('LGPCourseBundle:Course:search_city.html.twig', array('params' => $params, 'form' => $course_form_refine->createView()));
    }

    /**
     * @param Quartier $quartier
     * @param Quartier $quartier1
     * @param $page
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @ParamConverter("quartier", options={"mapping" : {"slug_ville":"slugVille"}})
     * @ParamConverter("quartier1", options={"mapping" : {"slug_quartier":"slugQuartier"}})
     */
    public function searchCityQuarterAction(Quartier $quartier, Quartier $quartier1, $page, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $enseignementRep = $em->getRepository("LGPCourseBundle:Enseignement");
        $coursRep = $em->getRepository("LGPCourseBundle:Cours");
        $avisRep = $em->getRepository("LGPUserBundle:Avis");
        $courses = $coursRep->findAll();
        $max_per_page = 10;

        $profsByCity = $enseignementRep->getProfsByCityAndQuarter($quartier->getVille(), $quartier1->getIntitule(), $page, $max_per_page);
        $profsCount = count($profsByCity);
        $pageCount = ceil($profsCount / $max_per_page);
        if ($pageCount < $page && $pageCount != 0) {
            throw new NotFoundHttpException('404: Oups!!! La page demandée n\'existe pas.'); // page 404, sauf pour la première page
        }
        $params = array(
            'ville' => $quartier->getVille(),
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
                'route_params' => array('slug' => $quartier->getVille())
            ),
        );

        $course_form_refine = $this->createForm(CoursSearchRefineType::class);
        $course_form_refine->handleRequest($request);
        if ($course_form_refine->isSubmitted() && $course_form_refine->isValid()) {
            $data = $course_form_refine->getData();

            if (isset($data['intitule'])) {

                if (isset($data['quartier'])) {
                    $courseFound = $coursRep->getCoursByIntitule($data['intitule']);
                    if ($courseFound == null)
                        throw new NotFoundHttpException("pas de cours " . $data['intitule']);
                    return $this->redirectToRoute('lgp_course_find_prof_refine_quarter', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_quartier' => $data['quartier']->getSlugQuartier(), 'slug' => $courseFound->getSlug()));
                }

                $courseFound = $coursRep->getCoursByIntitule($data['intitule']);
                if ($courseFound == null)
                    throw new NotFoundHttpException("pas de cours " . $data['intitule']);

                return $this->redirectToRoute('lgp_course_find_prof', array('slug' => $courseFound->getSlug()));
            }

            if ((isset($data['quartier']))) {
                return $this->redirectToRoute('lgp_course_find_prof_city_quarter', array('slug_ville' => $data['quartier']->getSlugVille(), 'slug_quartier' => $data['quartier']->getIntitule()));
            }

            return $this->redirectToRoute('lgp_course_find');
        }

        return $this->render('LGPCourseBundle:Course:search_city.html.twig', array('params' => $params, 'form' => $course_form_refine->createView()));
    }

    public function updateClasseAction($profId, $coursId, Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();
            $ensRep = $em->getRepository("LGPCourseBundle:Enseignement");
            $ens = $ensRep->getClasseByCoursAndProf($profId, $coursId);
            return new JsonResponse($ens);
        }
    }

    public function updateQuarterAction(Quartier $quartier, Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();
            $quartierRep = $em->getRepository("LGPUserBundle:Quartier");
            $quartiers = $quartierRep->getQuarterIntitulesByCity($quartier->getVille());
            return new JsonResponse($quartiers);
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

}
