<?php

namespace LGP\CourseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CourseController extends Controller
{
    public function indexAction()
    {
        return $this->render('LGPCourseBundle:Course:index.html.twig');
    }
}
