<?php

/* LGPReservationBundle:Reservation:etapes.html.twig */
class __TwigTemplate_936b82bd57c4a11fe2a0b283c4390789102e1bc286c7cb4e27b26f63ebc56870 extends Twig_Template
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
        $__internal_94f20dbc8c036d785e8505d34c7687e4e0908408fd01cf065581f5c4451a56e9 = $this->env->getExtension("native_profiler");
        $__internal_94f20dbc8c036d785e8505d34c7687e4e0908408fd01cf065581f5c4451a56e9->enter($__internal_94f20dbc8c036d785e8505d34c7687e4e0908408fd01cf065581f5c4451a56e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPReservationBundle:Reservation:etapes.html.twig"));

        // line 1
        echo "<div class=\"container\" style=\"background: #fff;\">
    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
            <span class=\"first text-center col-md-4 col-lg-4\" 
                  style=\"";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "lgp_reservation_cart")) {
            echo "background: #eee;";
        }
        echo " \">
                <h4>Etape 1</h4>
            </span>
            <span class=\"second text-center col-md-4 col-lg-4\" 
                  style=\"";
        // line 9
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "lgp_reservation_paiement")) {
            echo "background: #eee;";
        }
        echo " \">
                <h4>Etape 2</h4>
            </span>
            <span class=\"second text-center col-md-4 col-lg-4\" 
                  style=\"";
        // line 13
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "lgp_reservation_confirm_page")) {
            echo "background: #eee;";
        }
        echo " \">
                <h4>Etape 3</h4>
            </span>
            
        </div>
    </div>
</div>";
        
        $__internal_94f20dbc8c036d785e8505d34c7687e4e0908408fd01cf065581f5c4451a56e9->leave($__internal_94f20dbc8c036d785e8505d34c7687e4e0908408fd01cf065581f5c4451a56e9_prof);

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
        return array (  46 => 13,  37 => 9,  28 => 5,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"container\" style=\"background: #fff;\">
    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
            <span class=\"first text-center col-md-4 col-lg-4\" 
                  style=\"{% if app.request.attributes.get('_route') == 'lgp_reservation_cart' %}background: #eee;{% endif %} \">
                <h4>Etape 1</h4>
            </span>
            <span class=\"second text-center col-md-4 col-lg-4\" 
                  style=\"{% if app.request.attributes.get('_route') == 'lgp_reservation_paiement' %}background: #eee;{% endif %} \">
                <h4>Etape 2</h4>
            </span>
            <span class=\"second text-center col-md-4 col-lg-4\" 
                  style=\"{% if app.request.attributes.get('_route') == 'lgp_reservation_confirm_page' %}background: #eee;{% endif %} \">
                <h4>Etape 3</h4>
            </span>
            
        </div>
    </div>
</div>";
    }
}
