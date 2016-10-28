<?php

/* LGPReservationBundle:Reservation:confirm_reservation.html.twig */
class __TwigTemplate_a082c2aed04bb3f99c404954174640cfb9503a848821829466e1ab44881e84dc extends Twig_Template
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
        $__internal_953c1f7b21c2b6e5a303ec1dd911ecf6d1bf63da81739fd22b107c051dd3552d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_953c1f7b21c2b6e5a303ec1dd911ecf6d1bf63da81739fd22b107c051dd3552d->enter($__internal_953c1f7b21c2b6e5a303ec1dd911ecf6d1bf63da81739fd22b107c051dd3552d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPReservationBundle:Reservation:confirm_reservation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_953c1f7b21c2b6e5a303ec1dd911ecf6d1bf63da81739fd22b107c051dd3552d->leave($__internal_953c1f7b21c2b6e5a303ec1dd911ecf6d1bf63da81739fd22b107c051dd3552d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_6169d02c5b29b673dcc3a214507244fafcceafe67d8b24846656b79df4e23275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6169d02c5b29b673dcc3a214507244fafcceafe67d8b24846656b79df4e23275->enter($__internal_6169d02c5b29b673dcc3a214507244fafcceafe67d8b24846656b79df4e23275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    mode de paiment  - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6169d02c5b29b673dcc3a214507244fafcceafe67d8b24846656b79df4e23275->leave($__internal_6169d02c5b29b673dcc3a214507244fafcceafe67d8b24846656b79df4e23275_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b30a887726031dbf226d609db9a8f715669729a2ddca0fad9b5d881efc8dada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b30a887726031dbf226d609db9a8f715669729a2ddca0fad9b5d881efc8dada->enter($__internal_5b30a887726031dbf226d609db9a8f715669729a2ddca0fad9b5d881efc8dada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_reservation_confirm", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo " \" class=\"btn btn-primary\" title=\"\">Reserver</a>
                    </div>
                </div>

            </div>
        </div>

    </div>
";
        
        $__internal_5b30a887726031dbf226d609db9a8f715669729a2ddca0fad9b5d881efc8dada->leave($__internal_5b30a887726031dbf226d609db9a8f715669729a2ddca0fad9b5d881efc8dada_prof);

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
