<?php

namespace LGP\CoreBundle\Controller;

use LGP\CoreBundle\Entity\ContactMessage;
use LGP\CoreBundle\Form\ContactMessageType;
use LGP\CourseBundle\Form\CoursCitySearchType;
use LGP\CourseBundle\Form\CoursSearchCourseCityType;
use LGP\CourseBundle\Form\CoursSearchRefineType;
use LGP\CourseBundle\Form\CoursSearchType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LgpController extends Controller
{

    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $categoryRepository = $em->getRepository('LGPCourseBundle:Categorie');
        $enseignementRep = $em->getRepository('LGPCourseBundle:Enseignement');
        $coursRep = $em->getRepository("LGPCourseBundle:Cours");

        $categoriesPopular = $categoryRepository->findBy(array(), null, 8);

//        $courseForm = new Cours();
////        $form_course = $this->get('form.factory')->create(CoursType::class, $courseForm);
        $course_city_form = $this->createForm(CoursSearchCourseCityType::class);

        $course_city_form->handleRequest($request);
        if ($course_city_form->isSubmitted() && $course_city_form->isValid()) {
            $data = $course_city_form->getData();

            if (isset($data['intitule']) && isset($data['quartier'])) {
                $courseFound = $coursRep->getCoursByIntitule($data['intitule']);
                if ($courseFound != null)
                    return $this->redirectToRoute('lgp_course_search', array('slug_ville'=>$data['quartier']->getSlugVille(),  'slug_course' => $courseFound->getSlug()));
                else
                    return $this->redirectToRoute('lgp_course_search', array('slug_ville'=>$data['quartier']->getSlugVille(),'slug_course' => $data['intitule']));
            } else {
                return $this->redirectToRoute($request->attributes->get("_route"), $request->attributes->get("_route_params"));
            }
        }

        return $this->render('LGPCoreBundle:Lgp:index.html.twig', array('enseignementRep' => $enseignementRep, 'categories' => $categoriesPopular, 'categoryRep' => $categoryRepository, 'form_course_city' => $course_city_form->createView()));
    }

    public function howAction()
    {
        return $this->render('LGPCoreBundle:Lgp:how.html.twig');
    }


    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function contactAction(Request $request)
    {
        $SUBJECT_MSG = 'Contact';
        $RECIPIENT_MSG = 'contact@legrandprof.com';

        $contactMessage = new ContactMessage();
        $form = $this->createForm(ContactMessageType::class, $contactMessage);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Envoi du mail a legrandprof
            $message = \Swift_Message::newInstance()
                ->setSubject($SUBJECT_MSG)
                ->setFrom($contactMessage->getEmail())
                ->setTo($RECIPIENT_MSG)
                ->setBody($contactMessage->getMessage());

            $this->get('mailer')->send($message);


            $this->addFlash('info', 'Votre message a bien été envoyé !');

            return $this->redirectToRoute('lgp_core_contact');
        }

        return $this->render('LGPCoreBundle:Contact:contact.html.twig', array(
            'form' => $form->createView()
        ));
    }

}
