<?php

/* LGPUserBundle:Indisponibilite:add.html.twig */
class __TwigTemplate_a21ded62da709a6ea32e66b2d1c86df0ce3147bb95136aa897256c1945f7af4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Indisponibilite:add.html.twig", 1);
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
        $__internal_ff5c3614cfb203231a572f719fb244b63dbf432795c577d8424b7d22a23b489c = $this->env->getExtension("native_profiler");
        $__internal_ff5c3614cfb203231a572f719fb244b63dbf432795c577d8424b7d22a23b489c->enter($__internal_ff5c3614cfb203231a572f719fb244b63dbf432795c577d8424b7d22a23b489c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff5c3614cfb203231a572f719fb244b63dbf432795c577d8424b7d22a23b489c->leave($__internal_ff5c3614cfb203231a572f719fb244b63dbf432795c577d8424b7d22a23b489c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_beaead7f5d74fe77a1ad68f5c17bcbbe6e9794a2dac30129acacad6a88a7d15b = $this->env->getExtension("native_profiler");
        $__internal_beaead7f5d74fe77a1ad68f5c17bcbbe6e9794a2dac30129acacad6a88a7d15b->enter($__internal_beaead7f5d74fe77a1ad68f5c17bcbbe6e9794a2dac30129acacad6a88a7d15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_beaead7f5d74fe77a1ad68f5c17bcbbe6e9794a2dac30129acacad6a88a7d15b->leave($__internal_beaead7f5d74fe77a1ad68f5c17bcbbe6e9794a2dac30129acacad6a88a7d15b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d8ee1c8960ef03ae82b934d53b385f3b2fcfaa40b4e01c9c5c6acf34a57445e = $this->env->getExtension("native_profiler");
        $__internal_2d8ee1c8960ef03ae82b934d53b385f3b2fcfaa40b4e01c9c5c6acf34a57445e->enter($__internal_2d8ee1c8960ef03ae82b934d53b385f3b2fcfaa40b4e01c9c5c6acf34a57445e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_2d8ee1c8960ef03ae82b934d53b385f3b2fcfaa40b4e01c9c5c6acf34a57445e->leave($__internal_2d8ee1c8960ef03ae82b934d53b385f3b2fcfaa40b4e01c9c5c6acf34a57445e_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Indisponibilite:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  61 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LGPCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Ajout d'une indisponibilité - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <h1>Ajout d'une indiponibilité</h1>*/
/*   */
/*   {% include 'LGPUserBundle:Indisponibilite:formulaire.html.twig' %}*/
/*   */
/* {% endblock %}*/
