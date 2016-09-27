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
        $__internal_d28c5df44205c3d96952612117a3ed86c7599280164b0bd1c4c01360960f6faf = $this->env->getExtension("native_profiler");
        $__internal_d28c5df44205c3d96952612117a3ed86c7599280164b0bd1c4c01360960f6faf->enter($__internal_d28c5df44205c3d96952612117a3ed86c7599280164b0bd1c4c01360960f6faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Cours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d28c5df44205c3d96952612117a3ed86c7599280164b0bd1c4c01360960f6faf->leave($__internal_d28c5df44205c3d96952612117a3ed86c7599280164b0bd1c4c01360960f6faf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2629b2ef346731fef33e51f790faf0c01103bfc6d641d272085fa2288dc10a38 = $this->env->getExtension("native_profiler");
        $__internal_2629b2ef346731fef33e51f790faf0c01103bfc6d641d272085fa2288dc10a38->enter($__internal_2629b2ef346731fef33e51f790faf0c01103bfc6d641d272085fa2288dc10a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2629b2ef346731fef33e51f790faf0c01103bfc6d641d272085fa2288dc10a38->leave($__internal_2629b2ef346731fef33e51f790faf0c01103bfc6d641d272085fa2288dc10a38_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_af3e6346bd890cc37cfb3ae16d01842445c111805e89a718481eff7cd26c976f = $this->env->getExtension("native_profiler");
        $__internal_af3e6346bd890cc37cfb3ae16d01842445c111805e89a718481eff7cd26c976f->enter($__internal_af3e6346bd890cc37cfb3ae16d01842445c111805e89a718481eff7cd26c976f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un cours</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Cours:formulaire.html.twig", "LGPUserBundle:Cours:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_af3e6346bd890cc37cfb3ae16d01842445c111805e89a718481eff7cd26c976f->leave($__internal_af3e6346bd890cc37cfb3ae16d01842445c111805e89a718481eff7cd26c976f_prof);

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
