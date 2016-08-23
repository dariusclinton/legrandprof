<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_6e659f441b0be411675991e045c89a537eed53cca390353003cc4a11f1e14ba3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_31b0b100365ed19629b8a4103822c3eb55cf2f7dc1d6c794a7edb1533237c6ac = $this->env->getExtension("native_profiler");
        $__internal_31b0b100365ed19629b8a4103822c3eb55cf2f7dc1d6c794a7edb1533237c6ac->enter($__internal_31b0b100365ed19629b8a4103822c3eb55cf2f7dc1d6c794a7edb1533237c6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31b0b100365ed19629b8a4103822c3eb55cf2f7dc1d6c794a7edb1533237c6ac->leave($__internal_31b0b100365ed19629b8a4103822c3eb55cf2f7dc1d6c794a7edb1533237c6ac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_148f0e8b1c330fd53501c64d9401d36e7a1e4221f950f998b7d978cd759f4847 = $this->env->getExtension("native_profiler");
        $__internal_148f0e8b1c330fd53501c64d9401d36e7a1e4221f950f998b7d978cd759f4847->enter($__internal_148f0e8b1c330fd53501c64d9401d36e7a1e4221f950f998b7d978cd759f4847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_148f0e8b1c330fd53501c64d9401d36e7a1e4221f950f998b7d978cd759f4847->leave($__internal_148f0e8b1c330fd53501c64d9401d36e7a1e4221f950f998b7d978cd759f4847_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6a50ccbefe8fb2b0c0cbbda2d4eb856408034bff9a214ef90babf12cec72ecd4 = $this->env->getExtension("native_profiler");
        $__internal_6a50ccbefe8fb2b0c0cbbda2d4eb856408034bff9a214ef90babf12cec72ecd4->enter($__internal_6a50ccbefe8fb2b0c0cbbda2d4eb856408034bff9a214ef90babf12cec72ecd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 8)->display($context);
        
        $__internal_6a50ccbefe8fb2b0c0cbbda2d4eb856408034bff9a214ef90babf12cec72ecd4->leave($__internal_6a50ccbefe8fb2b0c0cbbda2d4eb856408034bff9a214ef90babf12cec72ecd4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/*     {{ app.user.prenoms }} {{ app.user.nom }} - {{ parent() }} */
/* {% endblock %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
