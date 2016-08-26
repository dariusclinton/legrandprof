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
        $__internal_33f6a87b9d6b37721ee84f978f61f9c9228eec3f18f4d96cfa3b936a48fbd52f = $this->env->getExtension("native_profiler");
        $__internal_33f6a87b9d6b37721ee84f978f61f9c9228eec3f18f4d96cfa3b936a48fbd52f->enter($__internal_33f6a87b9d6b37721ee84f978f61f9c9228eec3f18f4d96cfa3b936a48fbd52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33f6a87b9d6b37721ee84f978f61f9c9228eec3f18f4d96cfa3b936a48fbd52f->leave($__internal_33f6a87b9d6b37721ee84f978f61f9c9228eec3f18f4d96cfa3b936a48fbd52f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb4822cfad0fa84e52454092a79b324c0586512a1c3b8b621b1be57bb7de5ddc = $this->env->getExtension("native_profiler");
        $__internal_cb4822cfad0fa84e52454092a79b324c0586512a1c3b8b621b1be57bb7de5ddc->enter($__internal_cb4822cfad0fa84e52454092a79b324c0586512a1c3b8b621b1be57bb7de5ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_cb4822cfad0fa84e52454092a79b324c0586512a1c3b8b621b1be57bb7de5ddc->leave($__internal_cb4822cfad0fa84e52454092a79b324c0586512a1c3b8b621b1be57bb7de5ddc_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8fea9481991f2b9d970d04a08ad382ec19a2a018d4a1c479d71c59ad08508236 = $this->env->getExtension("native_profiler");
        $__internal_8fea9481991f2b9d970d04a08ad382ec19a2a018d4a1c479d71c59ad08508236->enter($__internal_8fea9481991f2b9d970d04a08ad382ec19a2a018d4a1c479d71c59ad08508236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 8)->display($context);
        
        $__internal_8fea9481991f2b9d970d04a08ad382ec19a2a018d4a1c479d71c59ad08508236->leave($__internal_8fea9481991f2b9d970d04a08ad382ec19a2a018d4a1c479d71c59ad08508236_prof);

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
