<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_bfa5b54c28ea6200577ac5882a0df94a75ed8cfb3033da8b9b18747505c20ce7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23ac405305496b866815c64f26a85c16f321cd681536066aff2c7e244f53ea84 = $this->env->getExtension("native_profiler");
        $__internal_23ac405305496b866815c64f26a85c16f321cd681536066aff2c7e244f53ea84->enter($__internal_23ac405305496b866815c64f26a85c16f321cd681536066aff2c7e244f53ea84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23ac405305496b866815c64f26a85c16f321cd681536066aff2c7e244f53ea84->leave($__internal_23ac405305496b866815c64f26a85c16f321cd681536066aff2c7e244f53ea84_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3cc4e1d1d4c5ef545b2f00f7719251e9db0c97494eb054a8b3eeecfa67d2885a = $this->env->getExtension("native_profiler");
        $__internal_3cc4e1d1d4c5ef545b2f00f7719251e9db0c97494eb054a8b3eeecfa67d2885a->enter($__internal_3cc4e1d1d4c5ef545b2f00f7719251e9db0c97494eb054a8b3eeecfa67d2885a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3cc4e1d1d4c5ef545b2f00f7719251e9db0c97494eb054a8b3eeecfa67d2885a->leave($__internal_3cc4e1d1d4c5ef545b2f00f7719251e9db0c97494eb054a8b3eeecfa67d2885a_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_856309fb35ac9ebe984c599d604318514e073f454549d16112a781e35df96a64 = $this->env->getExtension("native_profiler");
        $__internal_856309fb35ac9ebe984c599d604318514e073f454549d16112a781e35df96a64->enter($__internal_856309fb35ac9ebe984c599d604318514e073f454549d16112a781e35df96a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 8)->display($context);
        
        $__internal_856309fb35ac9ebe984c599d604318514e073f454549d16112a781e35df96a64->leave($__internal_856309fb35ac9ebe984c599d604318514e073f454549d16112a781e35df96a64_prof);

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
        return array (  61 => 8,  55 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     {{ app.user.prenoms }} {{ app.user.nom }} - Edit profile - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
/* */
