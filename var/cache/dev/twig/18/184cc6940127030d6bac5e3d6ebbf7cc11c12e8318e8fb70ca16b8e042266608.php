<?php

/* LGPUserBundle:Avis:update.html.twig */
class __TwigTemplate_441dc54e3edf3c254a14e708c88678c33b58742741d6c45f5f56afb80f44cdb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Avis:update.html.twig", 1);
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
        $__internal_41ac821297619f014be2d84f1f48ee5aac6c781261b3b7bef3411462c9f24f24 = $this->env->getExtension("native_profiler");
        $__internal_41ac821297619f014be2d84f1f48ee5aac6c781261b3b7bef3411462c9f24f24->enter($__internal_41ac821297619f014be2d84f1f48ee5aac6c781261b3b7bef3411462c9f24f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41ac821297619f014be2d84f1f48ee5aac6c781261b3b7bef3411462c9f24f24->leave($__internal_41ac821297619f014be2d84f1f48ee5aac6c781261b3b7bef3411462c9f24f24_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_decbe329fbec31037a3b30e8313ad6e9903077847c6e37066dcb2ea2945e1f46 = $this->env->getExtension("native_profiler");
        $__internal_decbe329fbec31037a3b30e8313ad6e9903077847c6e37066dcb2ea2945e1f46->enter($__internal_decbe329fbec31037a3b30e8313ad6e9903077847c6e37066dcb2ea2945e1f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_decbe329fbec31037a3b30e8313ad6e9903077847c6e37066dcb2ea2945e1f46->leave($__internal_decbe329fbec31037a3b30e8313ad6e9903077847c6e37066dcb2ea2945e1f46_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_2907ea1f9b274cad0002ac5ed07f500e63c03788667c9dc85138d43706e8890a = $this->env->getExtension("native_profiler");
        $__internal_2907ea1f9b274cad0002ac5ed07f500e63c03788667c9dc85138d43706e8890a->enter($__internal_2907ea1f9b274cad0002ac5ed07f500e63c03788667c9dc85138d43706e8890a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_2907ea1f9b274cad0002ac5ed07f500e63c03788667c9dc85138d43706e8890a->leave($__internal_2907ea1f9b274cad0002ac5ed07f500e63c03788667c9dc85138d43706e8890a_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Avis:update.html.twig";
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
  Modification d'un avis - {{ parent() }}
{% endblock %}

{% block body %}
  <h1>Modification d'un avis</h1>

  {% include 'LGPUserBundle:Avis:formulaire.html.twig'%}
  
{% endblock %}";
    }
}
