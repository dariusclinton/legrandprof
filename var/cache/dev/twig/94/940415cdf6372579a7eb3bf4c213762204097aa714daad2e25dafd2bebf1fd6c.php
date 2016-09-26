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
        $__internal_fa305172392ae4ada06423e048f534b5add9f1e8e11734348018a2316a73b3b5 = $this->env->getExtension("native_profiler");
        $__internal_fa305172392ae4ada06423e048f534b5add9f1e8e11734348018a2316a73b3b5->enter($__internal_fa305172392ae4ada06423e048f534b5add9f1e8e11734348018a2316a73b3b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa305172392ae4ada06423e048f534b5add9f1e8e11734348018a2316a73b3b5->leave($__internal_fa305172392ae4ada06423e048f534b5add9f1e8e11734348018a2316a73b3b5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_02ca9c571fb7e39cea36db413665f8f1427348b4cc0c27831af72b793cce2a2a = $this->env->getExtension("native_profiler");
        $__internal_02ca9c571fb7e39cea36db413665f8f1427348b4cc0c27831af72b793cce2a2a->enter($__internal_02ca9c571fb7e39cea36db413665f8f1427348b4cc0c27831af72b793cce2a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_02ca9c571fb7e39cea36db413665f8f1427348b4cc0c27831af72b793cce2a2a->leave($__internal_02ca9c571fb7e39cea36db413665f8f1427348b4cc0c27831af72b793cce2a2a_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_237aa3fb6bc07b6e0f46cef29aff8adf0f0565714c92f73f2923bb35e7239dad = $this->env->getExtension("native_profiler");
        $__internal_237aa3fb6bc07b6e0f46cef29aff8adf0f0565714c92f73f2923bb35e7239dad->enter($__internal_237aa3fb6bc07b6e0f46cef29aff8adf0f0565714c92f73f2923bb35e7239dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_237aa3fb6bc07b6e0f46cef29aff8adf0f0565714c92f73f2923bb35e7239dad->leave($__internal_237aa3fb6bc07b6e0f46cef29aff8adf0f0565714c92f73f2923bb35e7239dad_prof);

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
