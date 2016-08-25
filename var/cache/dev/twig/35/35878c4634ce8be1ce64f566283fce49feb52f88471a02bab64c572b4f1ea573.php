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
        $__internal_f4f0af5beab9bfcd4f6002e46021f07a5ebd9d5cca973d72c609739457a29c8f = $this->env->getExtension("native_profiler");
        $__internal_f4f0af5beab9bfcd4f6002e46021f07a5ebd9d5cca973d72c609739457a29c8f->enter($__internal_f4f0af5beab9bfcd4f6002e46021f07a5ebd9d5cca973d72c609739457a29c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4f0af5beab9bfcd4f6002e46021f07a5ebd9d5cca973d72c609739457a29c8f->leave($__internal_f4f0af5beab9bfcd4f6002e46021f07a5ebd9d5cca973d72c609739457a29c8f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b5bd5c3e662beeb0c9378bc1341b5e1dc8a68db10a95a7d075b581090fc2ce6 = $this->env->getExtension("native_profiler");
        $__internal_1b5bd5c3e662beeb0c9378bc1341b5e1dc8a68db10a95a7d075b581090fc2ce6->enter($__internal_1b5bd5c3e662beeb0c9378bc1341b5e1dc8a68db10a95a7d075b581090fc2ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1b5bd5c3e662beeb0c9378bc1341b5e1dc8a68db10a95a7d075b581090fc2ce6->leave($__internal_1b5bd5c3e662beeb0c9378bc1341b5e1dc8a68db10a95a7d075b581090fc2ce6_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2e0769796fc3399e46af69a90597e6ec1d0c846137b0971548555e9e0ceda023 = $this->env->getExtension("native_profiler");
        $__internal_2e0769796fc3399e46af69a90597e6ec1d0c846137b0971548555e9e0ceda023->enter($__internal_2e0769796fc3399e46af69a90597e6ec1d0c846137b0971548555e9e0ceda023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 8)->display($context);
        
        $__internal_2e0769796fc3399e46af69a90597e6ec1d0c846137b0971548555e9e0ceda023->leave($__internal_2e0769796fc3399e46af69a90597e6ec1d0c846137b0971548555e9e0ceda023_prof);

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
