<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_79ea177a4101e9774a6c3251f91353cbdc41aa67861dbaad2dd5c921a1bcba5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54d03e9d07362a78c08d8d3ad4cde57195795f95dcc59e871492230b11cb5589 = $this->env->getExtension("native_profiler");
        $__internal_54d03e9d07362a78c08d8d3ad4cde57195795f95dcc59e871492230b11cb5589->enter($__internal_54d03e9d07362a78c08d8d3ad4cde57195795f95dcc59e871492230b11cb5589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54d03e9d07362a78c08d8d3ad4cde57195795f95dcc59e871492230b11cb5589->leave($__internal_54d03e9d07362a78c08d8d3ad4cde57195795f95dcc59e871492230b11cb5589_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a42ab1f23cc246d2a9bbaa4879a18cbdc291fff8a62ef8ced440eebc5b94c385 = $this->env->getExtension("native_profiler");
        $__internal_a42ab1f23cc246d2a9bbaa4879a18cbdc291fff8a62ef8ced440eebc5b94c385->enter($__internal_a42ab1f23cc246d2a9bbaa4879a18cbdc291fff8a62ef8ced440eebc5b94c385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "  ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_a42ab1f23cc246d2a9bbaa4879a18cbdc291fff8a62ef8ced440eebc5b94c385->leave($__internal_a42ab1f23cc246d2a9bbaa4879a18cbdc291fff8a62ef8ced440eebc5b94c385_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
  {% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
