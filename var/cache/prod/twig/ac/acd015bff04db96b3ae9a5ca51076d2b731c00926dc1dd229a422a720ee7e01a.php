<?php

/* LGPReservationBundle:Reservation:etapes.html.twig */
class __TwigTemplate_1f8a39635da38633df4b60dd670d3d256e307d9713a0104f4f26c51c58b43866 extends Twig_Template
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
        // line 1
        echo "<!-- Progress bar step -->
<div class=\"progress-line\"></div>
<div class=\"progress-step\">
    <div class=\"step-block ";
        // line 4
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "lgp_reservation_cart")) {
            echo "active";
        }
        echo "\">
        <a href=\"#\" class=\"step\">1</a><br>
        <label class=\"step-label\">Recapitulatif commande</label>
    </div>
    <div class=\"step-block ";
        // line 8
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "lgp_reservation_paiement")) {
            echo "active";
        }
        echo "\">
        <a href=\"#\" class=\"step\">2</a><br>
        <label class=\"step-label\">Paiement</label>
    </div>
    <div class=\"step-block ";
        // line 12
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "lgp_reservation_confirm_page")) {
            echo "active";
        }
        echo "\">
        <a href=\"#\" class=\"step\">3</a><br>
        <label class=\"step-label\">Confirmation</label>
    </div>
</div>
<!-- end bar -->

";
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
        return array (  42 => 12,  33 => 8,  24 => 4,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
