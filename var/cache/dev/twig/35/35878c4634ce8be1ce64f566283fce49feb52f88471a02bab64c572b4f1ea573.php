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
        $__internal_c767d1034e754d562d6188f6d1113f4c7176c52c5dcc1d163ddeb0cc20c80bb6 = $this->env->getExtension("native_profiler");
        $__internal_c767d1034e754d562d6188f6d1113f4c7176c52c5dcc1d163ddeb0cc20c80bb6->enter($__internal_c767d1034e754d562d6188f6d1113f4c7176c52c5dcc1d163ddeb0cc20c80bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c767d1034e754d562d6188f6d1113f4c7176c52c5dcc1d163ddeb0cc20c80bb6->leave($__internal_c767d1034e754d562d6188f6d1113f4c7176c52c5dcc1d163ddeb0cc20c80bb6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5fba0c945982dc192ab50bab985ac54befb41f2cdd33efcd13daab84e37bcf0 = $this->env->getExtension("native_profiler");
        $__internal_a5fba0c945982dc192ab50bab985ac54befb41f2cdd33efcd13daab84e37bcf0->enter($__internal_a5fba0c945982dc192ab50bab985ac54befb41f2cdd33efcd13daab84e37bcf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a5fba0c945982dc192ab50bab985ac54befb41f2cdd33efcd13daab84e37bcf0->leave($__internal_a5fba0c945982dc192ab50bab985ac54befb41f2cdd33efcd13daab84e37bcf0_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8436e241c81259f8abcd6a7de94fca3d9406c79dabf2fe918657b100f6d08b00 = $this->env->getExtension("native_profiler");
        $__internal_8436e241c81259f8abcd6a7de94fca3d9406c79dabf2fe918657b100f6d08b00->enter($__internal_8436e241c81259f8abcd6a7de94fca3d9406c79dabf2fe918657b100f6d08b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 8)->display($context);
        
        $__internal_8436e241c81259f8abcd6a7de94fca3d9406c79dabf2fe918657b100f6d08b00->leave($__internal_8436e241c81259f8abcd6a7de94fca3d9406c79dabf2fe918657b100f6d08b00_prof);

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
