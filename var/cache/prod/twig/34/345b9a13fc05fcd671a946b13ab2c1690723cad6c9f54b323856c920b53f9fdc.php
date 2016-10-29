<?php

/* LGPReservationBundle:Reservation:etapes.html.twig */
class __TwigTemplate_4238935b7dc03d92cea0793b1d566b2fd9480eaf71c057e4e2012598907e0b8d extends Twig_Template
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
        echo "<div class=\"container\" style=\"background: #fff;\">
    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
            <span class=\"first text-center col-md-4 col-lg-4\" 
                  style=\"";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "lgp_reservation_cart")) {
            echo "background: #eee;";
        }
        echo " \">
                <h4>Etape 1</h4>
            </span>
            <span class=\"second text-center col-md-4 col-lg-4\" 
                  style=\"";
        // line 9
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "lgp_reservation_paiement")) {
            echo "background: #eee;";
        }
        echo " \">
                <h4>Etape 2</h4>
            </span>
            <span class=\"second text-center col-md-4 col-lg-4\" 
                  style=\"";
        // line 13
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "lgp_reservation_confirm_page")) {
            echo "background: #eee;";
        }
        echo " \">
                <h4>Etape 3</h4>
            </span>
            
        </div>
    </div>
</div>";
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
        return array (  43 => 13,  34 => 9,  25 => 5,  19 => 1,);
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
