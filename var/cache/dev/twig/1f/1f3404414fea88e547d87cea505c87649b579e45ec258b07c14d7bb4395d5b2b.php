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
        $__internal_d2dca755a5a39faf6bea7b0e0faeedf2951d678f56b7317f68d572630fa6a827 = $this->env->getExtension("native_profiler");
        $__internal_d2dca755a5a39faf6bea7b0e0faeedf2951d678f56b7317f68d572630fa6a827->enter($__internal_d2dca755a5a39faf6bea7b0e0faeedf2951d678f56b7317f68d572630fa6a827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2dca755a5a39faf6bea7b0e0faeedf2951d678f56b7317f68d572630fa6a827->leave($__internal_d2dca755a5a39faf6bea7b0e0faeedf2951d678f56b7317f68d572630fa6a827_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7472958c4d34c85fe18f4b830de1c0b16303870ec5384d2212e769147545cc6f = $this->env->getExtension("native_profiler");
        $__internal_7472958c4d34c85fe18f4b830de1c0b16303870ec5384d2212e769147545cc6f->enter($__internal_7472958c4d34c85fe18f4b830de1c0b16303870ec5384d2212e769147545cc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_7472958c4d34c85fe18f4b830de1c0b16303870ec5384d2212e769147545cc6f->leave($__internal_7472958c4d34c85fe18f4b830de1c0b16303870ec5384d2212e769147545cc6f_prof);

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
