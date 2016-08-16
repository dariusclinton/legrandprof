<?php

namespace LGP\CourseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CourseController extends Controller {

    public function searchAction($matiere) {
        return $this->render('LGPCourseBundle:Course:search.html.twig', array('matiere' => $matiere));
    }

    public function categoryAction($category) {
        $categoryRepository = $this->getDoctrine()->getManager()->getRepository('LGPCourseBundle:Categorie');
        $categories = $categoryRepository->findAll();

        $cat = $categoryRepository->findOneBy(array('intitule' => $category));

        return $this->render('LGPCourseBundle:Course:category.html.twig', array('category' => $category, 'categories' => $categories, 'categoryFound' => $cat));
    }

    public function allCategoriesAction() {
        $categoryRepository = $this->getDoctrine()->getManager()->getRepository('LGPCourseBundle:Categorie');
        $categories = $categoryRepository->findAll();
        return $this->render('LGPCourseBundle:Course:all_categories.html.twig', array('categories' => $categories));
    }

}
