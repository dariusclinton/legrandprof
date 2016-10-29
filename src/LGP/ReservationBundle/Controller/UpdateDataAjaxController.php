<?php

namespace LGP\ReservationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class UpdateDataAjaxController extends Controller
{
    public function updateQuarterAction($ville, Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();
            $quarterRep = $em->getRepository("LGPUserBundle:Quartier");
            $quarters = $quarterRep->getQuarterIntitulesByCity($ville);
            return new JsonResponse($quarters);
        }
    }

    public function updateCityAction($prof_id, Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();
            $ensRep = $em->getRepository("LGPUserBundle:Quartier");
            $ens = $ensRep->getQuarterCitiesByProf($prof_id);
            return new JsonResponse($ens);
        };

    }

}
