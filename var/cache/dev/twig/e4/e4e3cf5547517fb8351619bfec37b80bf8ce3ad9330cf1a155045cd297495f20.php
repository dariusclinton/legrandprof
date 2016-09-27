<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_e9fee84088b688574dd8d2e907e013f4d0839ed48f6eda39b0d6d05c42107a6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_03f1eb065da9ef6412735e06762ffd7a4f00b548af09f729d8ca5d6a1174be9b = $this->env->getExtension("native_profiler");
        $__internal_03f1eb065da9ef6412735e06762ffd7a4f00b548af09f729d8ca5d6a1174be9b->enter($__internal_03f1eb065da9ef6412735e06762ffd7a4f00b548af09f729d8ca5d6a1174be9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03f1eb065da9ef6412735e06762ffd7a4f00b548af09f729d8ca5d6a1174be9b->leave($__internal_03f1eb065da9ef6412735e06762ffd7a4f00b548af09f729d8ca5d6a1174be9b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ebb3f87f373e3510e8b4de9df30045d868c87bc104abf96221293427410283d9 = $this->env->getExtension("native_profiler");
        $__internal_ebb3f87f373e3510e8b4de9df30045d868c87bc104abf96221293427410283d9->enter($__internal_ebb3f87f373e3510e8b4de9df30045d868c87bc104abf96221293427410283d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ebb3f87f373e3510e8b4de9df30045d868c87bc104abf96221293427410283d9->leave($__internal_ebb3f87f373e3510e8b4de9df30045d868c87bc104abf96221293427410283d9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
