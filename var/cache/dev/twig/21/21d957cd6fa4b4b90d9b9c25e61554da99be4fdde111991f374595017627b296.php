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
        $__internal_aec6672f09d46cf209f7d93f9b2f4374bd3a5d256848c85423706a9f1e5ae587 = $this->env->getExtension("native_profiler");
        $__internal_aec6672f09d46cf209f7d93f9b2f4374bd3a5d256848c85423706a9f1e5ae587->enter($__internal_aec6672f09d46cf209f7d93f9b2f4374bd3a5d256848c85423706a9f1e5ae587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPReservationBundle:Reservation:confirm_reservation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aec6672f09d46cf209f7d93f9b2f4374bd3a5d256848c85423706a9f1e5ae587->leave($__internal_aec6672f09d46cf209f7d93f9b2f4374bd3a5d256848c85423706a9f1e5ae587_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf13d212f4c3cf148a481db60dfa07fed2b902bbf175ab7b91f311bc0a04de78 = $this->env->getExtension("native_profiler");
        $__internal_bf13d212f4c3cf148a481db60dfa07fed2b902bbf175ab7b91f311bc0a04de78->enter($__internal_bf13d212f4c3cf148a481db60dfa07fed2b902bbf175ab7b91f311bc0a04de78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    mode de paiment  - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bf13d212f4c3cf148a481db60dfa07fed2b902bbf175ab7b91f311bc0a04de78->leave($__internal_bf13d212f4c3cf148a481db60dfa07fed2b902bbf175ab7b91f311bc0a04de78_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_6aaae35b7fee84661b2c803b9171a53851790518f0c87bf024f4d865e104a139 = $this->env->getExtension("native_profiler");
        $__internal_6aaae35b7fee84661b2c803b9171a53851790518f0c87bf024f4d865e104a139->enter($__internal_6aaae35b7fee84661b2c803b9171a53851790518f0c87bf024f4d865e104a139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6aaae35b7fee84661b2c803b9171a53851790518f0c87bf024f4d865e104a139->leave($__internal_6aaae35b7fee84661b2c803b9171a53851790518f0c87bf024f4d865e104a139_prof);

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
