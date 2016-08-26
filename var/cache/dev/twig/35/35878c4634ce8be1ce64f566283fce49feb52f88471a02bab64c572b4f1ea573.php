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
        $__internal_e18878ebb6eb865cc2a18054b45dc913f7e9c64ed6ed28f2478c90cab92ef8a9 = $this->env->getExtension("native_profiler");
        $__internal_e18878ebb6eb865cc2a18054b45dc913f7e9c64ed6ed28f2478c90cab92ef8a9->enter($__internal_e18878ebb6eb865cc2a18054b45dc913f7e9c64ed6ed28f2478c90cab92ef8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e18878ebb6eb865cc2a18054b45dc913f7e9c64ed6ed28f2478c90cab92ef8a9->leave($__internal_e18878ebb6eb865cc2a18054b45dc913f7e9c64ed6ed28f2478c90cab92ef8a9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ffe0a97860c20fb4dd9bd86e58ad1d8a67d0b052b1922627fb2be9c4d375c5e8 = $this->env->getExtension("native_profiler");
        $__internal_ffe0a97860c20fb4dd9bd86e58ad1d8a67d0b052b1922627fb2be9c4d375c5e8->enter($__internal_ffe0a97860c20fb4dd9bd86e58ad1d8a67d0b052b1922627fb2be9c4d375c5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ffe0a97860c20fb4dd9bd86e58ad1d8a67d0b052b1922627fb2be9c4d375c5e8->leave($__internal_ffe0a97860c20fb4dd9bd86e58ad1d8a67d0b052b1922627fb2be9c4d375c5e8_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4c168f4179ae910ab87c8b023e60c33777b56da1cd91d7d3769ae952c1f202e3 = $this->env->getExtension("native_profiler");
        $__internal_4c168f4179ae910ab87c8b023e60c33777b56da1cd91d7d3769ae952c1f202e3->enter($__internal_4c168f4179ae910ab87c8b023e60c33777b56da1cd91d7d3769ae952c1f202e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 8)->display($context);
        
        $__internal_4c168f4179ae910ab87c8b023e60c33777b56da1cd91d7d3769ae952c1f202e3->leave($__internal_4c168f4179ae910ab87c8b023e60c33777b56da1cd91d7d3769ae952c1f202e3_prof);

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
