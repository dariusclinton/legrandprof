<?php

/* LGPUserBundle:Avis:add.html.twig */
class __TwigTemplate_4d7c8a9861e340f0ff8fba9c9a7ab62f96f8a7b9ffbba21677bf1578b21ff741 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Avis:add.html.twig", 1);
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
        $__internal_e1ec66647aa990ebdcce27cda5c83693e1c707a5fca41da29179feb745aea398 = $this->env->getExtension("native_profiler");
        $__internal_e1ec66647aa990ebdcce27cda5c83693e1c707a5fca41da29179feb745aea398->enter($__internal_e1ec66647aa990ebdcce27cda5c83693e1c707a5fca41da29179feb745aea398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1ec66647aa990ebdcce27cda5c83693e1c707a5fca41da29179feb745aea398->leave($__internal_e1ec66647aa990ebdcce27cda5c83693e1c707a5fca41da29179feb745aea398_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ce862d0fef2c66694e724ae0f64130ed70cb047c8ff5565180767195cc01311 = $this->env->getExtension("native_profiler");
        $__internal_6ce862d0fef2c66694e724ae0f64130ed70cb047c8ff5565180767195cc01311->enter($__internal_6ce862d0fef2c66694e724ae0f64130ed70cb047c8ff5565180767195cc01311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6ce862d0fef2c66694e724ae0f64130ed70cb047c8ff5565180767195cc01311->leave($__internal_6ce862d0fef2c66694e724ae0f64130ed70cb047c8ff5565180767195cc01311_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_a691e6757bcaa97f4c729fa60fca548e0977aaa93bf610a88d18adb883ebac3a = $this->env->getExtension("native_profiler");
        $__internal_a691e6757bcaa97f4c729fa60fca548e0977aaa93bf610a88d18adb883ebac3a->enter($__internal_a691e6757bcaa97f4c729fa60fca548e0977aaa93bf610a88d18adb883ebac3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_a691e6757bcaa97f4c729fa60fca548e0977aaa93bf610a88d18adb883ebac3a->leave($__internal_a691e6757bcaa97f4c729fa60fca548e0977aaa93bf610a88d18adb883ebac3a_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Avis:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  61 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Ajout d'avis - {{ parent() }}
{% endblock %}

{% block body %}
  <h1>Ajout d'un avis</h1>

  {% include 'LGPUserBundle:Avis:formulaire.html.twig'%}
  
{% endblock %}";
    }
}
