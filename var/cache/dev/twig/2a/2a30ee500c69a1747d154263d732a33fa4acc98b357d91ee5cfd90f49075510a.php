<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_2245b8b752cfc1e664ce7110f896b7b5aede970d877238b053c551c7aca569a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_c3cb99bfd05942defe04e4c0a69898f9d668c0b03342494b33fee0188f5a81fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3cb99bfd05942defe04e4c0a69898f9d668c0b03342494b33fee0188f5a81fb->enter($__internal_c3cb99bfd05942defe04e4c0a69898f9d668c0b03342494b33fee0188f5a81fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3cb99bfd05942defe04e4c0a69898f9d668c0b03342494b33fee0188f5a81fb->leave($__internal_c3cb99bfd05942defe04e4c0a69898f9d668c0b03342494b33fee0188f5a81fb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_56f924fbd289e48c7e901811671c7c365a8b5082f711739cf7edcc277b496f13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56f924fbd289e48c7e901811671c7c365a8b5082f711739cf7edcc277b496f13->enter($__internal_56f924fbd289e48c7e901811671c7c365a8b5082f711739cf7edcc277b496f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_56f924fbd289e48c7e901811671c7c365a8b5082f711739cf7edcc277b496f13->leave($__internal_56f924fbd289e48c7e901811671c7c365a8b5082f711739cf7edcc277b496f13_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
