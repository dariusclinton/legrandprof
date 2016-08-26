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
        $__internal_450491cf8ac9a0905753f1bac6cf9b55091a61b1a7686440f9099c4bd58f9672 = $this->env->getExtension("native_profiler");
        $__internal_450491cf8ac9a0905753f1bac6cf9b55091a61b1a7686440f9099c4bd58f9672->enter($__internal_450491cf8ac9a0905753f1bac6cf9b55091a61b1a7686440f9099c4bd58f9672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_450491cf8ac9a0905753f1bac6cf9b55091a61b1a7686440f9099c4bd58f9672->leave($__internal_450491cf8ac9a0905753f1bac6cf9b55091a61b1a7686440f9099c4bd58f9672_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_247f1ba1cde87d7e21192243430daa4b0489eb090fd26972e76b896ddd152e67 = $this->env->getExtension("native_profiler");
        $__internal_247f1ba1cde87d7e21192243430daa4b0489eb090fd26972e76b896ddd152e67->enter($__internal_247f1ba1cde87d7e21192243430daa4b0489eb090fd26972e76b896ddd152e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_247f1ba1cde87d7e21192243430daa4b0489eb090fd26972e76b896ddd152e67->leave($__internal_247f1ba1cde87d7e21192243430daa4b0489eb090fd26972e76b896ddd152e67_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_11ea2b1d309b9bca8673f41bac4ade49e383062ffb6d25eb3ad38b0b8849aead = $this->env->getExtension("native_profiler");
        $__internal_11ea2b1d309b9bca8673f41bac4ade49e383062ffb6d25eb3ad38b0b8849aead->enter($__internal_11ea2b1d309b9bca8673f41bac4ade49e383062ffb6d25eb3ad38b0b8849aead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 8)->display($context);
        
        $__internal_11ea2b1d309b9bca8673f41bac4ade49e383062ffb6d25eb3ad38b0b8849aead->leave($__internal_11ea2b1d309b9bca8673f41bac4ade49e383062ffb6d25eb3ad38b0b8849aead_prof);

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
