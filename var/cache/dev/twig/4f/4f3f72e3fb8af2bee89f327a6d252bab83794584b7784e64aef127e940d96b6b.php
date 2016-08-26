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
        $__internal_d1bdb5b466c0c2f7d91a8f743758c059a27fcc3707b59e5fb80b011ab1601cb1 = $this->env->getExtension("native_profiler");
        $__internal_d1bdb5b466c0c2f7d91a8f743758c059a27fcc3707b59e5fb80b011ab1601cb1->enter($__internal_d1bdb5b466c0c2f7d91a8f743758c059a27fcc3707b59e5fb80b011ab1601cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1bdb5b466c0c2f7d91a8f743758c059a27fcc3707b59e5fb80b011ab1601cb1->leave($__internal_d1bdb5b466c0c2f7d91a8f743758c059a27fcc3707b59e5fb80b011ab1601cb1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0b328dd15b13c23f943e0614199f5d09742e098261f555b761ff040b95d836d8 = $this->env->getExtension("native_profiler");
        $__internal_0b328dd15b13c23f943e0614199f5d09742e098261f555b761ff040b95d836d8->enter($__internal_0b328dd15b13c23f943e0614199f5d09742e098261f555b761ff040b95d836d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_0b328dd15b13c23f943e0614199f5d09742e098261f555b761ff040b95d836d8->leave($__internal_0b328dd15b13c23f943e0614199f5d09742e098261f555b761ff040b95d836d8_prof);

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
