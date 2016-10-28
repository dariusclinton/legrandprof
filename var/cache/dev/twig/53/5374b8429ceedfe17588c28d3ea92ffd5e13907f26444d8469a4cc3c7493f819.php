<?php

/* LGPReservationBundle:Reservation:etapes.html.twig */
class __TwigTemplate_6f9acbc063b77fc782eb090152a69c23f68865736dd29fe6f381edcd81f01a57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_757fd8edd9abea28b15ff5fcdbd57b9f7cb7fa075eac5a4e2f4ee1f9c0e91e3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_757fd8edd9abea28b15ff5fcdbd57b9f7cb7fa075eac5a4e2f4ee1f9c0e91e3f->enter($__internal_757fd8edd9abea28b15ff5fcdbd57b9f7cb7fa075eac5a4e2f4ee1f9c0e91e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPReservationBundle:Reservation:etapes.html.twig"));

        // line 1
        echo "<!-- Progress bar step -->
<div class=\"progress-line\"></div>
<div class=\"progress-step\">
    <div class=\"step-block ";
        // line 4
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "lgp_reservation_cart")) {
            echo "active";
        }
        echo "\">
        <a href=\"#\" class=\"step\">1</a><br>
        <label class=\"step-label\">Recapitulatif commande</label>
    </div>
    <div class=\"step-block ";
        // line 8
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "lgp_reservation_paiement")) {
            echo "active";
        }
        echo "\">
        <a href=\"#\" class=\"step\">2</a><br>
        <label class=\"step-label\">Paiement</label>
    </div>
    <div class=\"step-block ";
        // line 12
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "lgp_reservation_confirm_page")) {
            echo "active";
        }
        echo "\">
        <a href=\"#\" class=\"step\">3</a><br>
        <label class=\"step-label\">Confirmation</label>
    </div>
</div>
<!-- end bar -->

";
        
        $__internal_757fd8edd9abea28b15ff5fcdbd57b9f7cb7fa075eac5a4e2f4ee1f9c0e91e3f->leave($__internal_757fd8edd9abea28b15ff5fcdbd57b9f7cb7fa075eac5a4e2f4ee1f9c0e91e3f_prof);

    }

    public function getTemplateName()
    {
        return "LGPReservationBundle:Reservation:etapes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  36 => 8,  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "<!-- Progress bar step -->
<div class=\"progress-line\"></div>
<div class=\"progress-step\">
    <div class=\"step-block {% if app.request.attributes.get('_route') == 'lgp_reservation_cart' %}active{% endif %}\">
        <a href=\"#\" class=\"step\">1</a><br>
        <label class=\"step-label\">Recapitulatif commande</label>
    </div>
    <div class=\"step-block {% if app.request.attributes.get('_route') == 'lgp_reservation_paiement' %}active{% endif %}\">
        <a href=\"#\" class=\"step\">2</a><br>
        <label class=\"step-label\">Paiement</label>
    </div>
    <div class=\"step-block {% if app.request.attributes.get('_route') == 'lgp_reservation_confirm_page' %}active{% endif %}\">
        <a href=\"#\" class=\"step\">3</a><br>
        <label class=\"step-label\">Confirmation</label>
    </div>
</div>
<!-- end bar -->

";
    }
}
