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
        $__internal_1daa61925067249049aa6f57bf58f30a62e2a5cc223f9ded63f99a7137291d9d = $this->env->getExtension("native_profiler");
        $__internal_1daa61925067249049aa6f57bf58f30a62e2a5cc223f9ded63f99a7137291d9d->enter($__internal_1daa61925067249049aa6f57bf58f30a62e2a5cc223f9ded63f99a7137291d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPReservationBundle:Reservation:confirm_reservation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1daa61925067249049aa6f57bf58f30a62e2a5cc223f9ded63f99a7137291d9d->leave($__internal_1daa61925067249049aa6f57bf58f30a62e2a5cc223f9ded63f99a7137291d9d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_a403a407267c05b3d7c70c5a58b7593ad22dc6481d86132cd7e495746d6fe9ec = $this->env->getExtension("native_profiler");
        $__internal_a403a407267c05b3d7c70c5a58b7593ad22dc6481d86132cd7e495746d6fe9ec->enter($__internal_a403a407267c05b3d7c70c5a58b7593ad22dc6481d86132cd7e495746d6fe9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    mode de paiment  - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a403a407267c05b3d7c70c5a58b7593ad22dc6481d86132cd7e495746d6fe9ec->leave($__internal_a403a407267c05b3d7c70c5a58b7593ad22dc6481d86132cd7e495746d6fe9ec_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f632fee08147aedf8d3ae9c71cde85e062e618acfb57f6ddcfc42b5f8425b34 = $this->env->getExtension("native_profiler");
        $__internal_9f632fee08147aedf8d3ae9c71cde85e062e618acfb57f6ddcfc42b5f8425b34->enter($__internal_9f632fee08147aedf8d3ae9c71cde85e062e618acfb57f6ddcfc42b5f8425b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9f632fee08147aedf8d3ae9c71cde85e062e618acfb57f6ddcfc42b5f8425b34->leave($__internal_9f632fee08147aedf8d3ae9c71cde85e062e618acfb57f6ddcfc42b5f8425b34_prof);

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
