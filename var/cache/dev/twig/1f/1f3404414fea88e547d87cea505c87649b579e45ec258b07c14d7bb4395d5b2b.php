<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_dbd5d53f0cc3680a412195cd06fb3539dffb4db7a587f89e1e87b780209aa671 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_97b7d04accdcd2b293ae91e1af25e643a35c418bd2a31a29494373dafd137a7f = $this->env->getExtension("native_profiler");
        $__internal_97b7d04accdcd2b293ae91e1af25e643a35c418bd2a31a29494373dafd137a7f->enter($__internal_97b7d04accdcd2b293ae91e1af25e643a35c418bd2a31a29494373dafd137a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97b7d04accdcd2b293ae91e1af25e643a35c418bd2a31a29494373dafd137a7f->leave($__internal_97b7d04accdcd2b293ae91e1af25e643a35c418bd2a31a29494373dafd137a7f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_23a508bc6e97f4db9e74753cc5ae2905c6177b051432bbaefafe2d5c16d1cf7b = $this->env->getExtension("native_profiler");
        $__internal_23a508bc6e97f4db9e74753cc5ae2905c6177b051432bbaefafe2d5c16d1cf7b->enter($__internal_23a508bc6e97f4db9e74753cc5ae2905c6177b051432bbaefafe2d5c16d1cf7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_23a508bc6e97f4db9e74753cc5ae2905c6177b051432bbaefafe2d5c16d1cf7b->leave($__internal_23a508bc6e97f4db9e74753cc5ae2905c6177b051432bbaefafe2d5c16d1cf7b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
