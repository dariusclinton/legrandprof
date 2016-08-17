<?php

namespace LGP\CourseBundle\Controller;

use Doctrine\ORM\NoResultException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CourseController extends Controller {

    public function searchAction($cours) {
        $em = $this->getDoctrine()->getManager();
        $enseigneRep = $em->getRepository("LGPCourseBundle:Enseigne");
        $coursRep = $em->getRepository("LGPCourseBundle:Cours");
        $coursFound = $coursRep->findOneBy(array('intitule' => $cours));

        if ($coursFound) {
//            $coursId = $coursFound->getId();
            try {
                $mat_profs = $enseigneRep->getProfsByCours($coursFound);
            } catch (NoResultException $ex) {
                throw $this->createNotFoundException("Pas de prof pour ce cours !");
            }
        } else {
            throw $this->createNotFoundException("Ce cours  n'existe pas !");
        }

        return $this->render('LGPCourseBundle:Course:search.html.twig', array('cours' => $cours, 'matieres_profs' => $mat_profs));
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
