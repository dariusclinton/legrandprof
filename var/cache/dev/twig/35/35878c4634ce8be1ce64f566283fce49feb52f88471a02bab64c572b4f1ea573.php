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
        $__internal_3809287c7ecc89aa08c44a23dfe050c13f2c1ba5d7709426a7c3064ab9610b21 = $this->env->getExtension("native_profiler");
        $__internal_3809287c7ecc89aa08c44a23dfe050c13f2c1ba5d7709426a7c3064ab9610b21->enter($__internal_3809287c7ecc89aa08c44a23dfe050c13f2c1ba5d7709426a7c3064ab9610b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3809287c7ecc89aa08c44a23dfe050c13f2c1ba5d7709426a7c3064ab9610b21->leave($__internal_3809287c7ecc89aa08c44a23dfe050c13f2c1ba5d7709426a7c3064ab9610b21_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_268301a4f05354b22c6302e527b2625cbe298168977e9a9555d560abb891c5b0 = $this->env->getExtension("native_profiler");
        $__internal_268301a4f05354b22c6302e527b2625cbe298168977e9a9555d560abb891c5b0->enter($__internal_268301a4f05354b22c6302e527b2625cbe298168977e9a9555d560abb891c5b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_268301a4f05354b22c6302e527b2625cbe298168977e9a9555d560abb891c5b0->leave($__internal_268301a4f05354b22c6302e527b2625cbe298168977e9a9555d560abb891c5b0_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a5ebbb58a6f4a0a55feb49c68a93eb9be7f24b2a34f7ab67466578252c702558 = $this->env->getExtension("native_profiler");
        $__internal_a5ebbb58a6f4a0a55feb49c68a93eb9be7f24b2a34f7ab67466578252c702558->enter($__internal_a5ebbb58a6f4a0a55feb49c68a93eb9be7f24b2a34f7ab67466578252c702558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 8)->display($context);
        
        $__internal_a5ebbb58a6f4a0a55feb49c68a93eb9be7f24b2a34f7ab67466578252c702558->leave($__internal_a5ebbb58a6f4a0a55feb49c68a93eb9be7f24b2a34f7ab67466578252c702558_prof);

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
