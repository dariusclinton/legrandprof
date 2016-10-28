<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_4384c7ad6765fe7b2bf28a451a3e9acac2947795bfe51cc66ddcc7e1b7c81739 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_d96e4f35855ffcb9c3cbf4c2dec68a31a5537b6fd3286e0e7c5162a261118857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d96e4f35855ffcb9c3cbf4c2dec68a31a5537b6fd3286e0e7c5162a261118857->enter($__internal_d96e4f35855ffcb9c3cbf4c2dec68a31a5537b6fd3286e0e7c5162a261118857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d96e4f35855ffcb9c3cbf4c2dec68a31a5537b6fd3286e0e7c5162a261118857->leave($__internal_d96e4f35855ffcb9c3cbf4c2dec68a31a5537b6fd3286e0e7c5162a261118857_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_769c49d834ffbeaf1d44bb95597bf6dc8818efb6dc2981d78b2daf2ebaaba64f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769c49d834ffbeaf1d44bb95597bf6dc8818efb6dc2981d78b2daf2ebaaba64f->enter($__internal_769c49d834ffbeaf1d44bb95597bf6dc8818efb6dc2981d78b2daf2ebaaba64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_769c49d834ffbeaf1d44bb95597bf6dc8818efb6dc2981d78b2daf2ebaaba64f->leave($__internal_769c49d834ffbeaf1d44bb95597bf6dc8818efb6dc2981d78b2daf2ebaaba64f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
