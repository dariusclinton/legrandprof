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
        $__internal_a6d3aedeb9a1e681a3cb1cb2fd870171b1b7fe0f719b99222f0eace9e9a84b4a = $this->env->getExtension("native_profiler");
        $__internal_a6d3aedeb9a1e681a3cb1cb2fd870171b1b7fe0f719b99222f0eace9e9a84b4a->enter($__internal_a6d3aedeb9a1e681a3cb1cb2fd870171b1b7fe0f719b99222f0eace9e9a84b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6d3aedeb9a1e681a3cb1cb2fd870171b1b7fe0f719b99222f0eace9e9a84b4a->leave($__internal_a6d3aedeb9a1e681a3cb1cb2fd870171b1b7fe0f719b99222f0eace9e9a84b4a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fee3aa5c789dae7bf9603d68a32475788ae58a91e5f8a29b6608ca5ad249ed41 = $this->env->getExtension("native_profiler");
        $__internal_fee3aa5c789dae7bf9603d68a32475788ae58a91e5f8a29b6608ca5ad249ed41->enter($__internal_fee3aa5c789dae7bf9603d68a32475788ae58a91e5f8a29b6608ca5ad249ed41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_fee3aa5c789dae7bf9603d68a32475788ae58a91e5f8a29b6608ca5ad249ed41->leave($__internal_fee3aa5c789dae7bf9603d68a32475788ae58a91e5f8a29b6608ca5ad249ed41_prof);

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
