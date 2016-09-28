<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_42cfbfb6741769ca2075c566da8f902c19e3935fe0db0961b599b2c0c81605e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_5bd194d7e926a402160b07e173769e156e9ee597cf2a8d55af1900f4eae77081 = $this->env->getExtension("native_profiler");
        $__internal_5bd194d7e926a402160b07e173769e156e9ee597cf2a8d55af1900f4eae77081->enter($__internal_5bd194d7e926a402160b07e173769e156e9ee597cf2a8d55af1900f4eae77081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bd194d7e926a402160b07e173769e156e9ee597cf2a8d55af1900f4eae77081->leave($__internal_5bd194d7e926a402160b07e173769e156e9ee597cf2a8d55af1900f4eae77081_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_71d40ff3262aa3792372f4c9b9895f5e9d31601c07c0438b77259a2200f7a11a = $this->env->getExtension("native_profiler");
        $__internal_71d40ff3262aa3792372f4c9b9895f5e9d31601c07c0438b77259a2200f7a11a->enter($__internal_71d40ff3262aa3792372f4c9b9895f5e9d31601c07c0438b77259a2200f7a11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_71d40ff3262aa3792372f4c9b9895f5e9d31601c07c0438b77259a2200f7a11a->leave($__internal_71d40ff3262aa3792372f4c9b9895f5e9d31601c07c0438b77259a2200f7a11a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
