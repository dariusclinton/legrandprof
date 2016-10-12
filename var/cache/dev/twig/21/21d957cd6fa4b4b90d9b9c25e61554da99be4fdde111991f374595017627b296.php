<?php

/* LGPReservationBundle:Reservation:confirm_reservation.html.twig */
class __TwigTemplate_ddfc0059e723fabfb0e361e7992bd960a41c5c5ae81202014c47d58eb814177d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPReservationBundle:Reservation:confirm_reservation.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3af35e72ca6a5d96df9be877cc0e4e0399be0178c4afe40954f01fca1e34b7c = $this->env->getExtension("native_profiler");
        $__internal_a3af35e72ca6a5d96df9be877cc0e4e0399be0178c4afe40954f01fca1e34b7c->enter($__internal_a3af35e72ca6a5d96df9be877cc0e4e0399be0178c4afe40954f01fca1e34b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPReservationBundle:Reservation:confirm_reservation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3af35e72ca6a5d96df9be877cc0e4e0399be0178c4afe40954f01fca1e34b7c->leave($__internal_a3af35e72ca6a5d96df9be877cc0e4e0399be0178c4afe40954f01fca1e34b7c_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d9117ea998b14ea3c82bc540d3f8ae72f65d88006e73c4bbf9ded2d32028bad = $this->env->getExtension("native_profiler");
        $__internal_6d9117ea998b14ea3c82bc540d3f8ae72f65d88006e73c4bbf9ded2d32028bad->enter($__internal_6d9117ea998b14ea3c82bc540d3f8ae72f65d88006e73c4bbf9ded2d32028bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    mode de paiment  - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6d9117ea998b14ea3c82bc540d3f8ae72f65d88006e73c4bbf9ded2d32028bad->leave($__internal_6d9117ea998b14ea3c82bc540d3f8ae72f65d88006e73c4bbf9ded2d32028bad_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_86cdfff2848109b1736f7b5547926bc87e6d9b0d952078309ac32a9573e159a0 = $this->env->getExtension("native_profiler");
        $__internal_86cdfff2848109b1736f7b5547926bc87e6d9b0d952078309ac32a9573e159a0->enter($__internal_86cdfff2848109b1736f7b5547926bc87e6d9b0d952078309ac32a9573e159a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"bg-grey\">
        <div class=\"content-wrapper\">
            ";
        // line 11
        $this->loadTemplate("LGPReservationBundle:Reservation:etapes.html.twig", "LGPReservationBundle:Reservation:confirm_reservation.html.twig", 11)->display($context);
        // line 12
        echo "
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center\">
                        <h3 >Confirmez votre reservation en cliquant sur le bouton</h3>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center\">
                        <a href=\" ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_reservation_confirm", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo " \" class=\"btn btn-primary\" title=\"\">Reserver</a>
                    </div>
                </div>

            </div>
        </div>

    </div>
";
        
        $__internal_86cdfff2848109b1736f7b5547926bc87e6d9b0d952078309ac32a9573e159a0->leave($__internal_86cdfff2848109b1736f7b5547926bc87e6d9b0d952078309ac32a9573e159a0_prof);

    }

    public function getTemplateName()
    {
        return "LGPReservationBundle:Reservation:confirm_reservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 22,  63 => 12,  61 => 11,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }

    public function getSource()
    {
        return "
{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
    mode de paiment  - {{ parent() }}
{% endblock %}

{% block body %}
    <div class=\"bg-grey\">
        <div class=\"content-wrapper\">
            {% include 'LGPReservationBundle:Reservation:etapes.html.twig' %}

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center\">
                        <h3 >Confirmez votre reservation en cliquant sur le bouton</h3>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center\">
                        <a href=\" {{path('lgp_reservation_confirm', {'userId' : app.user.id} )}} \" class=\"btn btn-primary\" title=\"\">Reserver</a>
                    </div>
                </div>

            </div>
        </div>

    </div>
{% endblock %}

";
    }
}
