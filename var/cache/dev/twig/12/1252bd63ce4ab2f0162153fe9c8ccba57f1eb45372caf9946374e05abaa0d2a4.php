<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_9cd6a0d2c1a177223ec53ea3e095ff68876204abb4f4b4298a3f8729427d6f55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_a78a8aa12e6fef45fc83bea2ede0109ac363307373d632d2ced7b5e97b0ede44 = $this->env->getExtension("native_profiler");
        $__internal_a78a8aa12e6fef45fc83bea2ede0109ac363307373d632d2ced7b5e97b0ede44->enter($__internal_a78a8aa12e6fef45fc83bea2ede0109ac363307373d632d2ced7b5e97b0ede44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a78a8aa12e6fef45fc83bea2ede0109ac363307373d632d2ced7b5e97b0ede44->leave($__internal_a78a8aa12e6fef45fc83bea2ede0109ac363307373d632d2ced7b5e97b0ede44_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d191e23faa9c78f13dd09013d399b12bfc6b73c40a3379b1cf7b5c097f9d3a0e = $this->env->getExtension("native_profiler");
        $__internal_d191e23faa9c78f13dd09013d399b12bfc6b73c40a3379b1cf7b5c097f9d3a0e->enter($__internal_d191e23faa9c78f13dd09013d399b12bfc6b73c40a3379b1cf7b5c097f9d3a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_d191e23faa9c78f13dd09013d399b12bfc6b73c40a3379b1cf7b5c097f9d3a0e->leave($__internal_d191e23faa9c78f13dd09013d399b12bfc6b73c40a3379b1cf7b5c097f9d3a0e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
