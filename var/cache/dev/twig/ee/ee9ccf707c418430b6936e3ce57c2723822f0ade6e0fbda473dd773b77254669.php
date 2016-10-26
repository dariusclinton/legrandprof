<?php

/* LGPUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_22d593bbd3a7de26256811524b99e85ce8079625504ae9539789b5b61a8f3417 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "LGPUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_c8ff9c0b8cd781fc15d2da210ef891dc9a9a95a4659187a18dc266036fc69aa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ff9c0b8cd781fc15d2da210ef891dc9a9a95a4659187a18dc266036fc69aa7->enter($__internal_c8ff9c0b8cd781fc15d2da210ef891dc9a9a95a4659187a18dc266036fc69aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8ff9c0b8cd781fc15d2da210ef891dc9a9a95a4659187a18dc266036fc69aa7->leave($__internal_c8ff9c0b8cd781fc15d2da210ef891dc9a9a95a4659187a18dc266036fc69aa7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa09be51cc43fa0207b66b6489010952fe7a6f1282a31ec160057b3d9f26a7d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa09be51cc43fa0207b66b6489010952fe7a6f1282a31ec160057b3d9f26a7d8->enter($__internal_fa09be51cc43fa0207b66b6489010952fe7a6f1282a31ec160057b3d9f26a7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_fa09be51cc43fa0207b66b6489010952fe7a6f1282a31ec160057b3d9f26a7d8->leave($__internal_fa09be51cc43fa0207b66b6489010952fe7a6f1282a31ec160057b3d9f26a7d8_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>{{ 'resetting.password_already_requested'|trans }}</p>
{% endblock fos_user_content %}
";
    }
}
