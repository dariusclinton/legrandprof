<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_65bf60ec878b87bf7aa5bd6fc1e5adfda07d0a44e500f8e95091af386b0d1be4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_5b68a056b7ed04b41556416239abc7d6a9f8665d028cf1b49fe7af35305d8ac6 = $this->env->getExtension("native_profiler");
        $__internal_5b68a056b7ed04b41556416239abc7d6a9f8665d028cf1b49fe7af35305d8ac6->enter($__internal_5b68a056b7ed04b41556416239abc7d6a9f8665d028cf1b49fe7af35305d8ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b68a056b7ed04b41556416239abc7d6a9f8665d028cf1b49fe7af35305d8ac6->leave($__internal_5b68a056b7ed04b41556416239abc7d6a9f8665d028cf1b49fe7af35305d8ac6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3b2052bc7991692014171b846f4d569a9948825e101522982e9a5dc8bae5edf2 = $this->env->getExtension("native_profiler");
        $__internal_3b2052bc7991692014171b846f4d569a9948825e101522982e9a5dc8bae5edf2->enter($__internal_3b2052bc7991692014171b846f4d569a9948825e101522982e9a5dc8bae5edf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_3b2052bc7991692014171b846f4d569a9948825e101522982e9a5dc8bae5edf2->leave($__internal_3b2052bc7991692014171b846f4d569a9948825e101522982e9a5dc8bae5edf2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
