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
        $__internal_5c4c1fc841c7050b0d4a3f1ec142cdcd88db77d8fa2d47355b31eac4b2570eea = $this->env->getExtension("native_profiler");
        $__internal_5c4c1fc841c7050b0d4a3f1ec142cdcd88db77d8fa2d47355b31eac4b2570eea->enter($__internal_5c4c1fc841c7050b0d4a3f1ec142cdcd88db77d8fa2d47355b31eac4b2570eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c4c1fc841c7050b0d4a3f1ec142cdcd88db77d8fa2d47355b31eac4b2570eea->leave($__internal_5c4c1fc841c7050b0d4a3f1ec142cdcd88db77d8fa2d47355b31eac4b2570eea_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d537e4322928e89f049e2a2530d5344ea51be59d1e34e1aeeb8a819785b816b7 = $this->env->getExtension("native_profiler");
        $__internal_d537e4322928e89f049e2a2530d5344ea51be59d1e34e1aeeb8a819785b816b7->enter($__internal_d537e4322928e89f049e2a2530d5344ea51be59d1e34e1aeeb8a819785b816b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d537e4322928e89f049e2a2530d5344ea51be59d1e34e1aeeb8a819785b816b7->leave($__internal_d537e4322928e89f049e2a2530d5344ea51be59d1e34e1aeeb8a819785b816b7_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_645a579e0581b9f01c35d79b3c0870b267241a44d2d7c4716a5c4559ff96e04e = $this->env->getExtension("native_profiler");
        $__internal_645a579e0581b9f01c35d79b3c0870b267241a44d2d7c4716a5c4559ff96e04e->enter($__internal_645a579e0581b9f01c35d79b3c0870b267241a44d2d7c4716a5c4559ff96e04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 8)->display($context);
        
        $__internal_645a579e0581b9f01c35d79b3c0870b267241a44d2d7c4716a5c4559ff96e04e->leave($__internal_645a579e0581b9f01c35d79b3c0870b267241a44d2d7c4716a5c4559ff96e04e_prof);

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
