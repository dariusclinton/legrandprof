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
        $__internal_a4bf3479a5358d67a690defd1d6e89cc564adc94810e9b13a5b6bc1cba53259a = $this->env->getExtension("native_profiler");
        $__internal_a4bf3479a5358d67a690defd1d6e89cc564adc94810e9b13a5b6bc1cba53259a->enter($__internal_a4bf3479a5358d67a690defd1d6e89cc564adc94810e9b13a5b6bc1cba53259a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4bf3479a5358d67a690defd1d6e89cc564adc94810e9b13a5b6bc1cba53259a->leave($__internal_a4bf3479a5358d67a690defd1d6e89cc564adc94810e9b13a5b6bc1cba53259a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f1159ec639d1f067aa1d15345ab139fca2d0e9c60665730970d0b0058233343b = $this->env->getExtension("native_profiler");
        $__internal_f1159ec639d1f067aa1d15345ab139fca2d0e9c60665730970d0b0058233343b->enter($__internal_f1159ec639d1f067aa1d15345ab139fca2d0e9c60665730970d0b0058233343b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_f1159ec639d1f067aa1d15345ab139fca2d0e9c60665730970d0b0058233343b->leave($__internal_f1159ec639d1f067aa1d15345ab139fca2d0e9c60665730970d0b0058233343b_prof);

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
