<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_c569f9891ea703df050261c3cdba45df7a6efbb1520c9e6f384a471cf4a82140 extends Twig_Template
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
        $__internal_675bd3cc1f7a6de90502bd5f5a21a7cb78b58d48380d6e4795da064d29246071 = $this->env->getExtension("native_profiler");
        $__internal_675bd3cc1f7a6de90502bd5f5a21a7cb78b58d48380d6e4795da064d29246071->enter($__internal_675bd3cc1f7a6de90502bd5f5a21a7cb78b58d48380d6e4795da064d29246071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_675bd3cc1f7a6de90502bd5f5a21a7cb78b58d48380d6e4795da064d29246071->leave($__internal_675bd3cc1f7a6de90502bd5f5a21a7cb78b58d48380d6e4795da064d29246071_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_00a235c0b0546fc61cdf0a1c0334f4a15e8a1a7f2ca56a2b17e84cfaced29f82 = $this->env->getExtension("native_profiler");
        $__internal_00a235c0b0546fc61cdf0a1c0334f4a15e8a1a7f2ca56a2b17e84cfaced29f82->enter($__internal_00a235c0b0546fc61cdf0a1c0334f4a15e8a1a7f2ca56a2b17e84cfaced29f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_00a235c0b0546fc61cdf0a1c0334f4a15e8a1a7f2ca56a2b17e84cfaced29f82->leave($__internal_00a235c0b0546fc61cdf0a1c0334f4a15e8a1a7f2ca56a2b17e84cfaced29f82_prof);

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
