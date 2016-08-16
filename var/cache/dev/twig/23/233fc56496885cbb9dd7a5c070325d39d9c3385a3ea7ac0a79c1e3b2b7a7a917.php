<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_a68c2b58d2abb85a6ac70f5fda3b1ec34cd0ed57b34ee6d7df1118ef3eca3954 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_e2753aa104a2ad73b886f6cdf0c362fc6da7a4c7de4a2d19f0471261bb0f91f3 = $this->env->getExtension("native_profiler");
        $__internal_e2753aa104a2ad73b886f6cdf0c362fc6da7a4c7de4a2d19f0471261bb0f91f3->enter($__internal_e2753aa104a2ad73b886f6cdf0c362fc6da7a4c7de4a2d19f0471261bb0f91f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2753aa104a2ad73b886f6cdf0c362fc6da7a4c7de4a2d19f0471261bb0f91f3->leave($__internal_e2753aa104a2ad73b886f6cdf0c362fc6da7a4c7de4a2d19f0471261bb0f91f3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_873c06c321b02af2c5a1405f0107791c895a9db86c4718c16255890f017e735d = $this->env->getExtension("native_profiler");
        $__internal_873c06c321b02af2c5a1405f0107791c895a9db86c4718c16255890f017e735d->enter($__internal_873c06c321b02af2c5a1405f0107791c895a9db86c4718c16255890f017e735d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_873c06c321b02af2c5a1405f0107791c895a9db86c4718c16255890f017e735d->leave($__internal_873c06c321b02af2c5a1405f0107791c895a9db86c4718c16255890f017e735d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
