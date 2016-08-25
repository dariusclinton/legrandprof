<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_86a935adb1bdc7f5667babde57bac0c8d0799aa6e744917caae4b9314b8784ed extends Twig_Template
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
        $__internal_7e16e6284fee4d4472f00123b144e02a52944bc544a79c02e68b13c0ebc9631b = $this->env->getExtension("native_profiler");
        $__internal_7e16e6284fee4d4472f00123b144e02a52944bc544a79c02e68b13c0ebc9631b->enter($__internal_7e16e6284fee4d4472f00123b144e02a52944bc544a79c02e68b13c0ebc9631b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e16e6284fee4d4472f00123b144e02a52944bc544a79c02e68b13c0ebc9631b->leave($__internal_7e16e6284fee4d4472f00123b144e02a52944bc544a79c02e68b13c0ebc9631b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_93b3b6e4331700b22644ecb4e1339f8dd27d7a74542bb3b23e0c19a3dc2276d6 = $this->env->getExtension("native_profiler");
        $__internal_93b3b6e4331700b22644ecb4e1339f8dd27d7a74542bb3b23e0c19a3dc2276d6->enter($__internal_93b3b6e4331700b22644ecb4e1339f8dd27d7a74542bb3b23e0c19a3dc2276d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_93b3b6e4331700b22644ecb4e1339f8dd27d7a74542bb3b23e0c19a3dc2276d6->leave($__internal_93b3b6e4331700b22644ecb4e1339f8dd27d7a74542bb3b23e0c19a3dc2276d6_prof);

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
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
