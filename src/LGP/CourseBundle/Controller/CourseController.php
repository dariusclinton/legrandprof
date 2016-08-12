<?php

namespace LGP\CourseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CourseController extends Controller
{
    public function searchAction($matiere)
    {
        return $this->render('LGPCourseBundle:Course:search.html.twig', array('matiere'=>$matiere));
    }
    public function categoryAction($category)
    {
        return $this->render('LGPCourseBundle:Course:category.html.twig', array('category'=>$category));
    }
}
