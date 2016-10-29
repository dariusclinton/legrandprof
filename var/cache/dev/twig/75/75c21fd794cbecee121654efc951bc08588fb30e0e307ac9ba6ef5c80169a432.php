<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_78e5e0f8ce4c2b98d7c455dd26de2b8979879428282611c0452388d8149c2aec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_0592886e53914879bbe15565f186fa309f06b66dd929f33f606d601195e34808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0592886e53914879bbe15565f186fa309f06b66dd929f33f606d601195e34808->enter($__internal_0592886e53914879bbe15565f186fa309f06b66dd929f33f606d601195e34808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0592886e53914879bbe15565f186fa309f06b66dd929f33f606d601195e34808->leave($__internal_0592886e53914879bbe15565f186fa309f06b66dd929f33f606d601195e34808_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_71cfc0dbb7fccdf2e0e1eb6a5436f5c6c968d32cc5132adb052a80a7beeeb372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71cfc0dbb7fccdf2e0e1eb6a5436f5c6c968d32cc5132adb052a80a7beeeb372->enter($__internal_71cfc0dbb7fccdf2e0e1eb6a5436f5c6c968d32cc5132adb052a80a7beeeb372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_71cfc0dbb7fccdf2e0e1eb6a5436f5c6c968d32cc5132adb052a80a7beeeb372->leave($__internal_71cfc0dbb7fccdf2e0e1eb6a5436f5c6c968d32cc5132adb052a80a7beeeb372_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
