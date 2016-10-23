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
        $__internal_13b70b9bf6dea7c4ae0f009cc71f28503f0e64bbc03c7adb303184d731c45c47 = $this->env->getExtension("native_profiler");
        $__internal_13b70b9bf6dea7c4ae0f009cc71f28503f0e64bbc03c7adb303184d731c45c47->enter($__internal_13b70b9bf6dea7c4ae0f009cc71f28503f0e64bbc03c7adb303184d731c45c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPReservationBundle:Reservation:confirm_reservation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13b70b9bf6dea7c4ae0f009cc71f28503f0e64bbc03c7adb303184d731c45c47->leave($__internal_13b70b9bf6dea7c4ae0f009cc71f28503f0e64bbc03c7adb303184d731c45c47_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d3487e9638d5da0777dd44a44ad57788fe9c7a4f2f85a47216d40399c3ee214 = $this->env->getExtension("native_profiler");
        $__internal_4d3487e9638d5da0777dd44a44ad57788fe9c7a4f2f85a47216d40399c3ee214->enter($__internal_4d3487e9638d5da0777dd44a44ad57788fe9c7a4f2f85a47216d40399c3ee214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    mode de paiment  - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4d3487e9638d5da0777dd44a44ad57788fe9c7a4f2f85a47216d40399c3ee214->leave($__internal_4d3487e9638d5da0777dd44a44ad57788fe9c7a4f2f85a47216d40399c3ee214_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_74353b05bfb61177f4b220229bcb9b18e5b48a93b942134c7e77920fe8863038 = $this->env->getExtension("native_profiler");
        $__internal_74353b05bfb61177f4b220229bcb9b18e5b48a93b942134c7e77920fe8863038->enter($__internal_74353b05bfb61177f4b220229bcb9b18e5b48a93b942134c7e77920fe8863038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_74353b05bfb61177f4b220229bcb9b18e5b48a93b942134c7e77920fe8863038->leave($__internal_74353b05bfb61177f4b220229bcb9b18e5b48a93b942134c7e77920fe8863038_prof);

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
