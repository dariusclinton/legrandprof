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
        $__internal_3d3749ae47d7726c360999333cf58fb65862da2c38705a45e1f0c67b56a809d5 = $this->env->getExtension("native_profiler");
        $__internal_3d3749ae47d7726c360999333cf58fb65862da2c38705a45e1f0c67b56a809d5->enter($__internal_3d3749ae47d7726c360999333cf58fb65862da2c38705a45e1f0c67b56a809d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d3749ae47d7726c360999333cf58fb65862da2c38705a45e1f0c67b56a809d5->leave($__internal_3d3749ae47d7726c360999333cf58fb65862da2c38705a45e1f0c67b56a809d5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc67f2cefc8cba2d822e7c0df3a69827ad32d9740f736f3f6ea0e07bcfc5c6de = $this->env->getExtension("native_profiler");
        $__internal_bc67f2cefc8cba2d822e7c0df3a69827ad32d9740f736f3f6ea0e07bcfc5c6de->enter($__internal_bc67f2cefc8cba2d822e7c0df3a69827ad32d9740f736f3f6ea0e07bcfc5c6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bc67f2cefc8cba2d822e7c0df3a69827ad32d9740f736f3f6ea0e07bcfc5c6de->leave($__internal_bc67f2cefc8cba2d822e7c0df3a69827ad32d9740f736f3f6ea0e07bcfc5c6de_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff395f75ec0bb478616f62f442020f66d15c4357c4ccab21909fdbea649f4a54 = $this->env->getExtension("native_profiler");
        $__internal_ff395f75ec0bb478616f62f442020f66d15c4357c4ccab21909fdbea649f4a54->enter($__internal_ff395f75ec0bb478616f62f442020f66d15c4357c4ccab21909fdbea649f4a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_ff395f75ec0bb478616f62f442020f66d15c4357c4ccab21909fdbea649f4a54->leave($__internal_ff395f75ec0bb478616f62f442020f66d15c4357c4ccab21909fdbea649f4a54_prof);

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
