<?php

namespace LGP\CourseBundle\Controller;

use Doctrine\ORM\NoResultException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CourseController extends Controller {

    public function searchAction($cours, $page) {
        $em = $this->getDoctrine()->getManager();
        $enseigneRep = $em->getRepository("LGPCourseBundle:Enseigne");
        $coursRep = $em->getRepository("LGPCourseBundle:Cours");
        $coursFound = $coursRep->findOneBy(array('intitule' => $cours));

        if ($coursFound) {
//            $coursId = $coursFound->getId();
            try {
                $max_per_page = 10;
                $profsByCours = $enseigneRep->getProfsByCours($coursFound, $page, $max_per_page);
//                $coursCount = $enseigneRep->countProfsByCours($coursFound);
                $profsCount = count($profsByCours);
                $pageCount = ceil($profsCount / $max_per_page);

                if ($pageCount < $page) {
                    throw new NotFoundHttpException('La page demandée n\'existe pas.'); // page 404, sauf pour la première page
                }

                $pagination = array(
                    'page' => $page,
                    'route' => 'lgp_course_find_prof',
                    'pages_count' => $pageCount,
                    'profs_count' => $profsCount,
                    'max_per_page' => $max_per_page,
//                    'route_params' => array('cours'=>$coursFound)
                );
            } catch (NoResultException $ex) {
                throw $this->createNotFoundException("Pas de prof pour ce cours !" . $ex->getMessage());
            }
        } else {
            throw $this->createNotFoundException("Ce cours  n'existe pas !");
        }

        return $this->render('LGPCourseBundle:Course:search.html.twig', array('cours' => $cours, 'matieres_profs' => $profsByCours, 'pagination' => $pagination, 'enseigneRep' => $enseigneRep));
    }

    public function categoryAction($category) {
        $categoryRepository = $this->getDoctrine()->getManager()->getRepository('LGPCourseBundle:Categorie');
        $categories = $categoryRepository->findAll();

        $cat = $categoryRepository->findOneBy(array('intitule' => $category));
//        $cat = $categoryRepository->getCategorieByIntitule($category);

        return $this->render('LGPCourseBundle:Course:category.html.twig', array('category' => $category, 'categories' => $categories, 'categoryFound' => $cat));
    }

    public function allCategoriesAction() {
        $categoryRepository = $this->getDoctrine()->getManager()->getRepository('LGPCourseBundle:Categorie');
        $categories = $categoryRepository->findAll();
        return $this->render('LGPCourseBundle:Course:all_categories.html.twig', array('categories' => $categories));
    }

}
