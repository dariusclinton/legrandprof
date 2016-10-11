<?php

namespace LGP\CourseBundle\Controller;

use LGP\UserBundle\Entity\Avis;
use LGP\UserBundle\Entity\Prof;
use LGP\UserBundle\Form\AvisSonType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EnseignementController extends Controller {

    public function profileAction(Prof $prof, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $profRep = $em->getRepository("LGPUserBundle:Prof");
        $enseignementRep = $em->getRepository("LGPCourseBundle:Enseignement");
        $avisRep = $em->getRepository("LGPUserBundle:Avis");
        $allAvis = $avisRep->getAvis($prof, 3);
        $similarProfs = $enseignementRep->getSimilarProfs($prof);
        $avis = new Avis();
        $form = $this->createForm(AvisSonType::class, $avis);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUser();
            if ($user === null) {
                $session = $request->getSession();
                $session->getFlashBag()->add('warning', 'vous devez être connecté pour poster un avis !!!');
//            return $this->forward('LGPCourseBundle:Course:profile', array('profId'=> $profId));
                return $this->redirectToRoute('lgp_course_profile_prof', array('slug' => $prof->getSlug()));
            }
            $avis->setUser($user);
            $avis->setProf($prof);
            // On persiste l'entite
            $em = $this->getDoctrine()->getManager();
            $em->persist($avis);
            $em->flush();

            $session = $request->getSession();
            $session->getFlashBag()->add('info', 'votre avis a bien été envoyé!!!');
//            return $this->forward('LGPCourseBundle:Course:profile', array('profId'=> $profId));
            return $this->redirectToRoute('lgp_course_profile_prof', array('slug' => $prof->getSlug()));
        }
        $params = array(
            'prof' => $prof,
            'enseignementRep' => $enseignementRep,
            'avisRep' => $avisRep,
            'avis' => $allAvis,
            'similarProfs' => $similarProfs
        );
        return $this->render('LGPCourseBundle:Enseignement:profile.html.twig', array('params' => $params, 'form' => $form->createView()));
    }

}
