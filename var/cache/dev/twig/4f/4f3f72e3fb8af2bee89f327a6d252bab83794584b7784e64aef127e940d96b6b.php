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
        $__internal_21de4272c9dc607288f08ade1c69f5cea56969b3f50fc8c2b4bad2eed5484c93 = $this->env->getExtension("native_profiler");
        $__internal_21de4272c9dc607288f08ade1c69f5cea56969b3f50fc8c2b4bad2eed5484c93->enter($__internal_21de4272c9dc607288f08ade1c69f5cea56969b3f50fc8c2b4bad2eed5484c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21de4272c9dc607288f08ade1c69f5cea56969b3f50fc8c2b4bad2eed5484c93->leave($__internal_21de4272c9dc607288f08ade1c69f5cea56969b3f50fc8c2b4bad2eed5484c93_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8d9e651f6e95c985d3a458a8f81c5f3e4e55b3967ed3cd75eadf8d24c8d89eea = $this->env->getExtension("native_profiler");
        $__internal_8d9e651f6e95c985d3a458a8f81c5f3e4e55b3967ed3cd75eadf8d24c8d89eea->enter($__internal_8d9e651f6e95c985d3a458a8f81c5f3e4e55b3967ed3cd75eadf8d24c8d89eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_8d9e651f6e95c985d3a458a8f81c5f3e4e55b3967ed3cd75eadf8d24c8d89eea->leave($__internal_8d9e651f6e95c985d3a458a8f81c5f3e4e55b3967ed3cd75eadf8d24c8d89eea_prof);

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
