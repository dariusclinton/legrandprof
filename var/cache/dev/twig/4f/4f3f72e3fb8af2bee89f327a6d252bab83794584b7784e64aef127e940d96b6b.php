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
        $__internal_5a8480d4a0638c297da734a2608ced9eecee00fe6ecf98f67e5ae1bb591a3c1b = $this->env->getExtension("native_profiler");
        $__internal_5a8480d4a0638c297da734a2608ced9eecee00fe6ecf98f67e5ae1bb591a3c1b->enter($__internal_5a8480d4a0638c297da734a2608ced9eecee00fe6ecf98f67e5ae1bb591a3c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a8480d4a0638c297da734a2608ced9eecee00fe6ecf98f67e5ae1bb591a3c1b->leave($__internal_5a8480d4a0638c297da734a2608ced9eecee00fe6ecf98f67e5ae1bb591a3c1b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c48074314de3176274363f2c31ed946c637b5f59ed567ee66ff0438064849e75 = $this->env->getExtension("native_profiler");
        $__internal_c48074314de3176274363f2c31ed946c637b5f59ed567ee66ff0438064849e75->enter($__internal_c48074314de3176274363f2c31ed946c637b5f59ed567ee66ff0438064849e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_c48074314de3176274363f2c31ed946c637b5f59ed567ee66ff0438064849e75->leave($__internal_c48074314de3176274363f2c31ed946c637b5f59ed567ee66ff0438064849e75_prof);

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
