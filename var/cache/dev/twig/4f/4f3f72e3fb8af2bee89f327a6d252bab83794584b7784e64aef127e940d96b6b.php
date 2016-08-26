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
        $__internal_742e460bba6d46c875b2eb062b21ca85482fea4074c2697902ba7b2b7f1d0023 = $this->env->getExtension("native_profiler");
        $__internal_742e460bba6d46c875b2eb062b21ca85482fea4074c2697902ba7b2b7f1d0023->enter($__internal_742e460bba6d46c875b2eb062b21ca85482fea4074c2697902ba7b2b7f1d0023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_742e460bba6d46c875b2eb062b21ca85482fea4074c2697902ba7b2b7f1d0023->leave($__internal_742e460bba6d46c875b2eb062b21ca85482fea4074c2697902ba7b2b7f1d0023_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_240572f2ab86182390b8b9d6f3a9ad807b1e59317e0538b7bc233807295ac398 = $this->env->getExtension("native_profiler");
        $__internal_240572f2ab86182390b8b9d6f3a9ad807b1e59317e0538b7bc233807295ac398->enter($__internal_240572f2ab86182390b8b9d6f3a9ad807b1e59317e0538b7bc233807295ac398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_240572f2ab86182390b8b9d6f3a9ad807b1e59317e0538b7bc233807295ac398->leave($__internal_240572f2ab86182390b8b9d6f3a9ad807b1e59317e0538b7bc233807295ac398_prof);

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
