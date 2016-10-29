<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_ce2a953537221cd6b374c38c951c927f1d63cfcbf98d4c70adadd4d509df83d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_e3f75c177bdc53eb2b5b81d946548daac65ee4dcf5e2c1f81d28a4b41fff4cb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3f75c177bdc53eb2b5b81d946548daac65ee4dcf5e2c1f81d28a4b41fff4cb2->enter($__internal_e3f75c177bdc53eb2b5b81d946548daac65ee4dcf5e2c1f81d28a4b41fff4cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3f75c177bdc53eb2b5b81d946548daac65ee4dcf5e2c1f81d28a4b41fff4cb2->leave($__internal_e3f75c177bdc53eb2b5b81d946548daac65ee4dcf5e2c1f81d28a4b41fff4cb2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_80392d455a8d53c888792a83032f72cc3ef039505438a6dce2b66983c1da038b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80392d455a8d53c888792a83032f72cc3ef039505438a6dce2b66983c1da038b->enter($__internal_80392d455a8d53c888792a83032f72cc3ef039505438a6dce2b66983c1da038b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_80392d455a8d53c888792a83032f72cc3ef039505438a6dce2b66983c1da038b->leave($__internal_80392d455a8d53c888792a83032f72cc3ef039505438a6dce2b66983c1da038b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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
