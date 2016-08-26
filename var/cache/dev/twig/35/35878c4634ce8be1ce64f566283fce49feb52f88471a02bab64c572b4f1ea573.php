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
        $__internal_c3e06c69e3275389712d11c050d89bd061fadbc66cd091cc54e22ec2b7fe2397 = $this->env->getExtension("native_profiler");
        $__internal_c3e06c69e3275389712d11c050d89bd061fadbc66cd091cc54e22ec2b7fe2397->enter($__internal_c3e06c69e3275389712d11c050d89bd061fadbc66cd091cc54e22ec2b7fe2397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3e06c69e3275389712d11c050d89bd061fadbc66cd091cc54e22ec2b7fe2397->leave($__internal_c3e06c69e3275389712d11c050d89bd061fadbc66cd091cc54e22ec2b7fe2397_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3434ae2799d5a8a4f845e7710f0b966eeafbf48537687482e5850d109959ce24 = $this->env->getExtension("native_profiler");
        $__internal_3434ae2799d5a8a4f845e7710f0b966eeafbf48537687482e5850d109959ce24->enter($__internal_3434ae2799d5a8a4f845e7710f0b966eeafbf48537687482e5850d109959ce24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3434ae2799d5a8a4f845e7710f0b966eeafbf48537687482e5850d109959ce24->leave($__internal_3434ae2799d5a8a4f845e7710f0b966eeafbf48537687482e5850d109959ce24_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d75f81d7cf2b8a98e1e8baaeff337c5b9f1d74b496d5b36b5fcf44e213a4fb74 = $this->env->getExtension("native_profiler");
        $__internal_d75f81d7cf2b8a98e1e8baaeff337c5b9f1d74b496d5b36b5fcf44e213a4fb74->enter($__internal_d75f81d7cf2b8a98e1e8baaeff337c5b9f1d74b496d5b36b5fcf44e213a4fb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 8)->display($context);
        
        $__internal_d75f81d7cf2b8a98e1e8baaeff337c5b9f1d74b496d5b36b5fcf44e213a4fb74->leave($__internal_d75f81d7cf2b8a98e1e8baaeff337c5b9f1d74b496d5b36b5fcf44e213a4fb74_prof);

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
