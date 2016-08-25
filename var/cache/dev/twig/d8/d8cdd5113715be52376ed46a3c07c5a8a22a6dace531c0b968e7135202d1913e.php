<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_47081e6e7f3fedde333bbfc1f0c478bd4b6bc9f2f613634adf2c913d4746f94a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_711ee2101c0a032202bbf79161f699cd21a0ca62690fced8a556965f2dfdfe5b = $this->env->getExtension("native_profiler");
        $__internal_711ee2101c0a032202bbf79161f699cd21a0ca62690fced8a556965f2dfdfe5b->enter($__internal_711ee2101c0a032202bbf79161f699cd21a0ca62690fced8a556965f2dfdfe5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_711ee2101c0a032202bbf79161f699cd21a0ca62690fced8a556965f2dfdfe5b->leave($__internal_711ee2101c0a032202bbf79161f699cd21a0ca62690fced8a556965f2dfdfe5b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_11f2a054a391cb166b50b00a828eb0ac15c7b3deef4a9473be1744fc7fad436a = $this->env->getExtension("native_profiler");
        $__internal_11f2a054a391cb166b50b00a828eb0ac15c7b3deef4a9473be1744fc7fad436a->enter($__internal_11f2a054a391cb166b50b00a828eb0ac15c7b3deef4a9473be1744fc7fad436a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_11f2a054a391cb166b50b00a828eb0ac15c7b3deef4a9473be1744fc7fad436a->leave($__internal_11f2a054a391cb166b50b00a828eb0ac15c7b3deef4a9473be1744fc7fad436a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
