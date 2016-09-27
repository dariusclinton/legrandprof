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
        $__internal_f31dac27ac39971e8faec557bd39af85788b1185a9cdb37a4c23e424ec6ffd46 = $this->env->getExtension("native_profiler");
        $__internal_f31dac27ac39971e8faec557bd39af85788b1185a9cdb37a4c23e424ec6ffd46->enter($__internal_f31dac27ac39971e8faec557bd39af85788b1185a9cdb37a4c23e424ec6ffd46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPReservationBundle:Reservation:confirm_reservation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f31dac27ac39971e8faec557bd39af85788b1185a9cdb37a4c23e424ec6ffd46->leave($__internal_f31dac27ac39971e8faec557bd39af85788b1185a9cdb37a4c23e424ec6ffd46_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_91beabedec8b65100bca7faed137324b57f40d7446f7783c48d04a5652ff4377 = $this->env->getExtension("native_profiler");
        $__internal_91beabedec8b65100bca7faed137324b57f40d7446f7783c48d04a5652ff4377->enter($__internal_91beabedec8b65100bca7faed137324b57f40d7446f7783c48d04a5652ff4377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    mode de paiment  - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_91beabedec8b65100bca7faed137324b57f40d7446f7783c48d04a5652ff4377->leave($__internal_91beabedec8b65100bca7faed137324b57f40d7446f7783c48d04a5652ff4377_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_64cd90caf40348881a0be2186996519c7f79765a7ed932eb7b442a57f1152e59 = $this->env->getExtension("native_profiler");
        $__internal_64cd90caf40348881a0be2186996519c7f79765a7ed932eb7b442a57f1152e59->enter($__internal_64cd90caf40348881a0be2186996519c7f79765a7ed932eb7b442a57f1152e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_64cd90caf40348881a0be2186996519c7f79765a7ed932eb7b442a57f1152e59->leave($__internal_64cd90caf40348881a0be2186996519c7f79765a7ed932eb7b442a57f1152e59_prof);

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
