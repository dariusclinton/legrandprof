<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_addc6a791de2974e7aa145d72799d3422f9b4b4248c4631977d654914e2cae32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_6729fa43cb94dfa32a496debf4b7356125d20faf9e317ab1434bc3aa7ebede86 = $this->env->getExtension("native_profiler");
        $__internal_6729fa43cb94dfa32a496debf4b7356125d20faf9e317ab1434bc3aa7ebede86->enter($__internal_6729fa43cb94dfa32a496debf4b7356125d20faf9e317ab1434bc3aa7ebede86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6729fa43cb94dfa32a496debf4b7356125d20faf9e317ab1434bc3aa7ebede86->leave($__internal_6729fa43cb94dfa32a496debf4b7356125d20faf9e317ab1434bc3aa7ebede86_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b0650301003a7d0a5b2959aadb3942f56aab546b786413f14e2a3b81830d32b0 = $this->env->getExtension("native_profiler");
        $__internal_b0650301003a7d0a5b2959aadb3942f56aab546b786413f14e2a3b81830d32b0->enter($__internal_b0650301003a7d0a5b2959aadb3942f56aab546b786413f14e2a3b81830d32b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_b0650301003a7d0a5b2959aadb3942f56aab546b786413f14e2a3b81830d32b0->leave($__internal_b0650301003a7d0a5b2959aadb3942f56aab546b786413f14e2a3b81830d32b0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
