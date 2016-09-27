<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_ee86c1b812daa1b8919bc96f64bd46b59ee60439d571371340153864df40814b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7448b2a8fedf1ca81ed3c5c497cc562afaf3eeb63b65f4c6dcbd902639f05f6e = $this->env->getExtension("native_profiler");
        $__internal_7448b2a8fedf1ca81ed3c5c497cc562afaf3eeb63b65f4c6dcbd902639f05f6e->enter($__internal_7448b2a8fedf1ca81ed3c5c497cc562afaf3eeb63b65f4c6dcbd902639f05f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7448b2a8fedf1ca81ed3c5c497cc562afaf3eeb63b65f4c6dcbd902639f05f6e->leave($__internal_7448b2a8fedf1ca81ed3c5c497cc562afaf3eeb63b65f4c6dcbd902639f05f6e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f1aab097ba0a16b9cc22ed2f67deda49f83c72135f17fffaa17c40af7b8b4c8 = $this->env->getExtension("native_profiler");
        $__internal_2f1aab097ba0a16b9cc22ed2f67deda49f83c72135f17fffaa17c40af7b8b4c8->enter($__internal_2f1aab097ba0a16b9cc22ed2f67deda49f83c72135f17fffaa17c40af7b8b4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_2f1aab097ba0a16b9cc22ed2f67deda49f83c72135f17fffaa17c40af7b8b4c8->leave($__internal_2f1aab097ba0a16b9cc22ed2f67deda49f83c72135f17fffaa17c40af7b8b4c8_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_888976956950ee0256219587c21fc444ecca5e82633492f6d3a6f724b2ab1afd = $this->env->getExtension("native_profiler");
        $__internal_888976956950ee0256219587c21fc444ecca5e82633492f6d3a6f724b2ab1afd->enter($__internal_888976956950ee0256219587c21fc444ecca5e82633492f6d3a6f724b2ab1afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_888976956950ee0256219587c21fc444ecca5e82633492f6d3a6f724b2ab1afd->leave($__internal_888976956950ee0256219587c21fc444ecca5e82633492f6d3a6f724b2ab1afd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 7,  55 => 6,  47 => 9,  44 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'LGPCoreBundle::layout.html.twig' %}

{% block body %}

  {# On definit ce block, dans lequel vont venir s'inserer les autres vues du bundle #}
  {% block fos_user_content %}

  {% endblock fos_user_content %}

{% endblock %}
";
    }
}
