<?php

namespace LGP\CourseBundle\Controller;

use Doctrine\ORM\NoResultException;
use LGP\CourseBundle\Form\CoursSearchRefineType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Validator\Exception\InvalidArgumentException;

class CourseController extends Controller {

    /**
     * 
     * @param type $cours
     * @param type $page
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return type
     * @throws type
     * @throws NotFoundHttpException
     * @throws InvalidArgumentException
     */
    public function searchAction($cours, $page, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $enseigneRep = $em->getRepository("LGPCourseBundle:Enseigne");
        $coursRep = $em->getRepository("LGPCourseBundle:Cours");
        $courses = $coursRep->findAll();
        $coursFound = $coursRep->findOneBy(array('intitule' => $cours));
        $max_per_page = 10;

        if ($coursFound) {
            try {
                $profsByCours = $enseigneRep->getProfsByCours($coursFound, $page, $max_per_page);
//                $coursCount = $enseigneRep->countProfsByCours($coursFound);
                $profsCount = count($profsByCours);
                $pageCount = ceil($profsCount / $max_per_page);

                if ($pageCount < $page  && $pageCount != 0) {
                    throw new NotFoundHttpException('La page demandée n\'existe pas.'); // page 404
                }

                $params = array(
                    'cours' => $cours,
                    'courses' => $courses,
                    'matieres_profs' => $profsByCours,
                    'enseigneRep' => $enseigneRep,
                    'pagination' => array(
                        'route' => 'lgp_course_find_prof',
                        'pages_count' => $pageCount,
                        'profs_count' => $profsCount,
                        'max_per_page' => $max_per_page,
                        'page' => $page,
                        'route_params' => array('cours' => $cours)
                    ),
                );
            } catch (NoResultException $ex) {
                throw $this->createNotFoundException("Pas de prof pour ce cours !" . $ex->getMessage());
            }
        } else {
            throw $this->createNotFoundException("Ce cours  n'existe pas !");
        }

        $course_form_refine = $this->createForm(CoursSearchRefineType::class);
        $course_form_refine->handleRequest($request);
        if ($course_form_refine->isSubmitted() && $course_form_refine->isValid()) {
            $data = $course_form_refine->getData();
            if (!(isset($data['intitule'])) || !(isset($data['ville']))) {
                throw new InvalidArgumentException("Oups!!! Vous devez entrer une valeur pour les parametres de recherche!");
            }
            return $this->redirectToRoute('lgp_course_find_prof_refine', array('ville' => $data['ville'], 'cours' => $data['intitule']));
        }

        return $this->render('LGPCourseBundle:Course:search.html.twig', array('params' => $params, 'form' => $course_form_refine->createView()));
    }

    /**
     * 
     * @param type $ville
     * @param type $cours
     * @param type $page
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return type
     * @throws type
     * @throws NotFoundHttpException
     * @throws InvalidArgumentException
     */
    public function searchRefineAction($ville, $cours, $page, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $enseigneRep = $em->getRepository("LGPCourseBundle:Enseigne");
        $coursRep = $em->getRepository("LGPCourseBundle:Cours");
        $courses = $coursRep->findAll();
        $coursFound = $coursRep->findOneBy(array('intitule' => $cours));
        $max_per_page = 10;

        if ($coursFound) {
//            $coursId = $coursFound->getId();
            try {
                $profsByCoursAndCity = $enseigneRep->getProfsByCoursAndCity($coursFound, $ville, $page, $max_per_page);
//                $coursCount = $enseigneRep->countProfsByCours($coursFound);
                $profsCount = count($profsByCoursAndCity);
                $pageCount = ceil($profsCount / $max_per_page);

                if ($pageCount < $page  && $pageCount != 0) {
                    throw new NotFoundHttpException('404: Oups!!! La page demandée n\'existe pas.'); // page 404, sauf pour la première page
                }

                $params = array(
                    'cours' => $cours,
                    'ville' => $ville,
                    'courses' => $courses,
                    'matieres_profs' => $profsByCoursAndCity,
                    'enseigneRep' => $enseigneRep,
                    'pagination' => array(
                        'route' => 'lgp_course_find_prof_refine',
                        'pages_count' => $pageCount,
                        'profs_count' => $profsCount,
                        'max_per_page' => $max_per_page,
                        'page' => $page,
                        'route_params' => array('cours' => $cours, 'ville' => $ville)
                    ),
                );
            } catch (NoResultException $ex) {
                throw $this->createNotFoundException("Pas de prof pour ce cours !" . $ex->getMessage());
            }
        } else {
            throw $this->createNotFoundException("Ce cours  n'existe pas !");
        }

        $course_form_refine = $this->createForm(CoursSearchRefineType::class);
        $course_form_refine->handleRequest($request);
        if ($course_form_refine->isSubmitted() && $course_form_refine->isValid()) {
            $data = $course_form_refine->getData();
            if (!(isset($data['intitule'])) || !(isset($data['ville']))) {
                throw new InvalidArgumentException("Oups!!! Vous devez entrer une valeur pour les parametres de recherche!");
            }
            return $this->redirectToRoute('lgp_course_find_prof_refine', array('ville' => $data['ville'], 'cours' => $data['intitule']));
        }

        return $this->render('LGPCourseBundle:Course:search.html.twig', array('params' => $params, 'form' => $course_form_refine->createView()));
    }

    /**
     * 
     * @param type $ville
     * @param type $page
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return type
     * @throws type
     * @throws NotFoundHttpException
     * @throws InvalidArgumentException
     */
    public function searchCityAction($ville, $page, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $enseigneRep = $em->getRepository("LGPCourseBundle:Enseigne");
        $coursRep = $em->getRepository("LGPCourseBundle:Cours");
        $courses = $coursRep->findAll();
        $max_per_page = 10;

        if (isset($ville) && !is_numeric($ville)) {
            try {
                $profsByCity = $enseigneRep->getProfsByCity($ville, $page, $max_per_page);
                $profsCount = count($profsByCity);
                $pageCount = ceil($profsCount / $max_per_page);
                if ($pageCount < $page  && $pageCount != 0) {
                    throw new NotFoundHttpException('404: Oups!!! La page demandée n\'existe pas.'); // page 404, sauf pour la première page
                }
                $params = array(
                    'ville' => $ville,
                    'courses' => $courses,
                    'matieres_profs' => $profsByCity,
                    'enseigneRep' => $enseigneRep,
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
        } else {
            throw $this->createNotFoundException("404: Oups la page demandée est introuvable !");
        }

        $course_form_refine = $this->createForm(CoursSearchRefineType::class);
        $course_form_refine->handleRequest($request);
        if ($course_form_refine->isSubmitted() && $course_form_refine->isValid()) {
            $data = $course_form_refine->getData();
            if (!(isset($data['intitule'])) || !(isset($data['ville']))) {
                throw new InvalidArgumentException("Oups!!! Vous devez entrer une valeur pour les parametres de recherche!");
            }
            return $this->redirectToRoute('lgp_course_find_prof_refine', array('ville' => $data['ville'], 'cours' => $data['intitule']));
        }

        return $this->render('LGPCourseBundle:Course:search_city.html.twig', array('params' => $params, 'form' => $course_form_refine->createView()));
    }

    /**
     * 
     * @param type $category
     * @param type $page
     * @return type
     * @throws NotFoundHttpException
     */
    public function categoryAction($category, $page) {
        $em = $this->getDoctrine()->getManager();
        $categoryRepository = $em->getRepository('LGPCourseBundle:Categorie');
        $coursRep = $em->getRepository('LGPCourseBundle:Cours');
        $categories = $categoryRepository->findAll();
        $cat = $categoryRepository->findOneBy(array('intitule' => $category));
        $max_per_page = 10;
        $courses = $coursRep->getAllCoursesByCategory($cat, $page, $max_per_page);
        $coursesCount = count($courses);
        $pageCount = ceil($coursesCount / $max_per_page);
        if ($pageCount < $page && $pageCount != 0) {
            throw new NotFoundHttpException('404: Oups!!! La page demandée n\'existe pas.'); // page 404, sauf pour la première page
        }
        
        $params = array(
            'category' => $category,
            'categories' => $categories,
            'courses' => $courses,
            'pagination' => array(
                'route' => 'lgp_course_find_category',
                'pages_count' => $pageCount,
                'profs_count' => $coursesCount,
                'max_per_page' => $max_per_page,
                'page' => $page,
                'route_params' => array('category' => $category)
            ),
        );

        return $this->render('LGPCourseBundle:Course:category.html.twig', array('params' => $params));
    }

    /**
     * 
     * @param type $page
     * @return type
     * @throws NotFoundHttpException
     */
    public function allCategoriesAction($page) {
        $max_per_page = 10;
        $categoryRepository = $this->getDoctrine()->getManager()->getRepository('LGPCourseBundle:Categorie');
        $categories = $categoryRepository->getAllCategories($page, $max_per_page);
        $categoriesCount = count($categories);
        $pageCount = ceil($categoriesCount / $max_per_page);
        if ($pageCount < $page  && $pageCount != 0) {
            throw new NotFoundHttpException('404: Oups!!! La page demandée n\'existe pas.'); // page 404, sauf pour la première page
        }
        $params = array(
            'categories' => $categories,
            'pagination' => array(
                'route' => 'lgp_course_category',
                'pages_count' => $pageCount,
                'profs_count' => $categoriesCount,
                'max_per_page' => $max_per_page,
                'page' => $page,
                'route_params' => array()
            ),
        );
        return $this->render('LGPCourseBundle:Course:all_categories.html.twig', array('params' => $params));
    }

}
