<?php

/* LGPUserBundle:Anomalie:update.html.twig */
class __TwigTemplate_14d3ec17c7aa6eb887a362c3cd122d2351197646d482082c262d343bf9112afa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Anomalie:update.html.twig", 1);
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
        $__internal_b0f2006c20550c2ca1315cd0309d428b3c9614efab198b820bbfe3016f784bb8 = $this->env->getExtension("native_profiler");
        $__internal_b0f2006c20550c2ca1315cd0309d428b3c9614efab198b820bbfe3016f784bb8->enter($__internal_b0f2006c20550c2ca1315cd0309d428b3c9614efab198b820bbfe3016f784bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Anomalie:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0f2006c20550c2ca1315cd0309d428b3c9614efab198b820bbfe3016f784bb8->leave($__internal_b0f2006c20550c2ca1315cd0309d428b3c9614efab198b820bbfe3016f784bb8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f749f085af17777013bf832842caf19572b5c610261df1bc6b6a0a3efcc5986 = $this->env->getExtension("native_profiler");
        $__internal_8f749f085af17777013bf832842caf19572b5c610261df1bc6b6a0a3efcc5986->enter($__internal_8f749f085af17777013bf832842caf19572b5c610261df1bc6b6a0a3efcc5986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une anomalie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8f749f085af17777013bf832842caf19572b5c610261df1bc6b6a0a3efcc5986->leave($__internal_8f749f085af17777013bf832842caf19572b5c610261df1bc6b6a0a3efcc5986_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_379b7bc820775634f0f334ba84e6b33d1c0b8156b5b07f24ed1342be732f3104 = $this->env->getExtension("native_profiler");
        $__internal_379b7bc820775634f0f334ba84e6b33d1c0b8156b5b07f24ed1342be732f3104->enter($__internal_379b7bc820775634f0f334ba84e6b33d1c0b8156b5b07f24ed1342be732f3104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  
  <h1>Mise à jour d'une anomalie</h1>
    
";
        // line 12
        echo "  ";
        $this->loadTemplate("LGPUserBundle:Anomalie:formulaire.html.twig", "LGPUserBundle:Anomalie:update.html.twig", 12)->display($context);
        // line 13
        echo "  
";
        
        $__internal_379b7bc820775634f0f334ba84e6b33d1c0b8156b5b07f24ed1342be732f3104->leave($__internal_379b7bc820775634f0f334ba84e6b33d1c0b8156b5b07f24ed1342be732f3104_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Anomalie:update.html.twig";
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
  Mise à jour d'une anomalie - {{ parent() }}
{% endblock %}

{% block body %}
  
  <h1>Mise à jour d'une anomalie</h1>
    
{#  Inclusion du formulaire #}
  {% include 'LGPUserBundle:Anomalie:formulaire.html.twig' %}
  
{% endblock %}";
    }
}
