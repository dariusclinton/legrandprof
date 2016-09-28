<?php

/* LGPUserBundle:Cours:update.html.twig */
class __TwigTemplate_29c8667ecb8ddde55e0251a04ff2f7399af7da435ad0bb53fcb16b58c87308c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Cours:update.html.twig", 1);
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
        $__internal_322915de57b92a8c5990236a17ffb754e79802bb50973dfce92fee29cddb4391 = $this->env->getExtension("native_profiler");
        $__internal_322915de57b92a8c5990236a17ffb754e79802bb50973dfce92fee29cddb4391->enter($__internal_322915de57b92a8c5990236a17ffb754e79802bb50973dfce92fee29cddb4391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Cours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_322915de57b92a8c5990236a17ffb754e79802bb50973dfce92fee29cddb4391->leave($__internal_322915de57b92a8c5990236a17ffb754e79802bb50973dfce92fee29cddb4391_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ed82d9a365280e38088f89efd0aa4dcaf93202d6acc4961a887ec21bbeace46 = $this->env->getExtension("native_profiler");
        $__internal_6ed82d9a365280e38088f89efd0aa4dcaf93202d6acc4961a887ec21bbeace46->enter($__internal_6ed82d9a365280e38088f89efd0aa4dcaf93202d6acc4961a887ec21bbeace46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6ed82d9a365280e38088f89efd0aa4dcaf93202d6acc4961a887ec21bbeace46->leave($__internal_6ed82d9a365280e38088f89efd0aa4dcaf93202d6acc4961a887ec21bbeace46_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c0692d1f4c64d0f79a503cfdf2c8d1a36ff4e15bbf0a7d34a9cf7470ac675b4 = $this->env->getExtension("native_profiler");
        $__internal_8c0692d1f4c64d0f79a503cfdf2c8d1a36ff4e15bbf0a7d34a9cf7470ac675b4->enter($__internal_8c0692d1f4c64d0f79a503cfdf2c8d1a36ff4e15bbf0a7d34a9cf7470ac675b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un cours</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Cours:formulaire.html.twig", "LGPUserBundle:Cours:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_8c0692d1f4c64d0f79a503cfdf2c8d1a36ff4e15bbf0a7d34a9cf7470ac675b4->leave($__internal_8c0692d1f4c64d0f79a503cfdf2c8d1a36ff4e15bbf0a7d34a9cf7470ac675b4_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Cours:update.html.twig";
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
  Modification d'un cours - {{ parent() }}
{% endblock %}

{% block body %}
  <h1>Modification d'un cours</h1>
  
  {% include 'LGPUserBundle:Cours:formulaire.html.twig' %}
  
{% endblock %}";
    }
}
