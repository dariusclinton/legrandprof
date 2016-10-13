<?php

namespace LGP\CourseBundle\Controller;

use LGP\CourseBundle\Entity\Categorie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CategorieController extends Controller
{

    public function indexAction($page)
    {
        $max_per_page = 10;
        $categoryRepository = $this->getDoctrine()->getManager()->getRepository('LGPCourseBundle:Categorie');
        $categories = $categoryRepository->getAllCategories($page, $max_per_page);
        $categoriesCount = count($categories);
        $pageCount = ceil($categoriesCount / $max_per_page);
        if ($pageCount < $page && $pageCount != 0) {
            throw new NotFoundHttpException('404: Oups!!! La page demandée n\'existe pas.'); // page 404, sauf pour la première page
        }
        $params = array('categories' => $categories, 'categoryRep' => $categoryRepository,
            'pagination' => array(
                'route' => 'lgp_course_category',
                'pages_count' => $pageCount,
                'profs_count' => $categoriesCount,
                'max_per_page' => $max_per_page,
                'page' => $page,
                'route_params' => array()
            ),
        );
        return $this->render('LGPCourseBundle:Categorie:index.html.twig', array('params' => $params));
    }

    /**
     *
     * @param type $category
     * @param type $page
     * @return type
     * @throws NotFoundHttpException
     */
    public function courseListAction(Categorie $category, $page)
    {
        $em = $this->getDoctrine()->getManager();
        $categoryRepository = $em->getRepository('LGPCourseBundle:Categorie');
        $coursRep = $em->getRepository('LGPCourseBundle:Cours');
        $categories = $categoryRepository->findAll();
        $max_per_page = 10;
        $courses = $coursRep->getAllCoursesByCategory($category, $page, $max_per_page);
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
                'route_params' => array('slug' => $category->getSlug())
            ),
        );
        return $this->render('LGPCourseBundle:Categorie:course_list.html.twig', array('params' => $params));
    }
}
