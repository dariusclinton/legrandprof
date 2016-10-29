<?php

/* LGPReservationBundle:Reservation:confirm_reservation.html.twig */
class __TwigTemplate_2d019c4e1101cafe1de67be5219530fde8a0148b37dddde969b717e54add5482 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "    mode de paiment  - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_reservation_confirm", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))), "html", null, true);
        echo " \" class=\"btn btn-primary\" title=\"\">Reserver</a>
                    </div>
                </div>

            </div>
        </div>

    </div>
";
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
        return array (  60 => 22,  48 => 12,  46 => 11,  42 => 9,  39 => 8,  32 => 5,  29 => 4,  11 => 2,);
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
