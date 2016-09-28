<?php

/* LGPUserBundle:Anomalie:add.html.twig */
class __TwigTemplate_8226bb4a341e33704bba92cd1ebd60e2eb441189895a91ad1898c56030977bdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Anomalie:add.html.twig", 1);
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
        $__internal_02055ec10fdb9c09ff2542210e8577fc972ab20c2211e72e2d05ad8d6ea22247 = $this->env->getExtension("native_profiler");
        $__internal_02055ec10fdb9c09ff2542210e8577fc972ab20c2211e72e2d05ad8d6ea22247->enter($__internal_02055ec10fdb9c09ff2542210e8577fc972ab20c2211e72e2d05ad8d6ea22247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Anomalie:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02055ec10fdb9c09ff2542210e8577fc972ab20c2211e72e2d05ad8d6ea22247->leave($__internal_02055ec10fdb9c09ff2542210e8577fc972ab20c2211e72e2d05ad8d6ea22247_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb705b87de2caad9d52b4237fea68163cb50a169a89d3980fa5e7ca319bd4527 = $this->env->getExtension("native_profiler");
        $__internal_fb705b87de2caad9d52b4237fea68163cb50a169a89d3980fa5e7ca319bd4527->enter($__internal_fb705b87de2caad9d52b4237fea68163cb50a169a89d3980fa5e7ca319bd4527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une anomalie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_fb705b87de2caad9d52b4237fea68163cb50a169a89d3980fa5e7ca319bd4527->leave($__internal_fb705b87de2caad9d52b4237fea68163cb50a169a89d3980fa5e7ca319bd4527_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a934c8adbf1d84bd92a11aba0a6bcc62c1e6fdb11b435e56033af5bce31ab12 = $this->env->getExtension("native_profiler");
        $__internal_6a934c8adbf1d84bd92a11aba0a6bcc62c1e6fdb11b435e56033af5bce31ab12->enter($__internal_6a934c8adbf1d84bd92a11aba0a6bcc62c1e6fdb11b435e56033af5bce31ab12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  
  <h1>Ajout d'une anomalie</h1>
    
";
        // line 12
        echo "  ";
        $this->loadTemplate("LGPUserBundle:Anomalie:formulaire.html.twig", "LGPUserBundle:Anomalie:add.html.twig", 12)->display($context);
        // line 13
        echo "  
";
        
        $__internal_6a934c8adbf1d84bd92a11aba0a6bcc62c1e6fdb11b435e56033af5bce31ab12->leave($__internal_6a934c8adbf1d84bd92a11aba0a6bcc62c1e6fdb11b435e56033af5bce31ab12_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Anomalie:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 13,  62 => 12,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Ajout d'une anomalie - {{ parent() }}
{% endblock %}

{% block body %}
  
  <h1>Ajout d'une anomalie</h1>
    
{#  Inclusion du formulaire #}
  {% include 'LGPUserBundle:Anomalie:formulaire.html.twig' %}
  
{% endblock %}";
    }
}
