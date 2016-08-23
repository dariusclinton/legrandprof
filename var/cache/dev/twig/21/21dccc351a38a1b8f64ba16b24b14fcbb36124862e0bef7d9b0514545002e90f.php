<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_b455e71bbe9516ff9e8d3d8f0c9bb51f63a5e61d437fd4e8825e94889672ae8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_648fc040e526b99f0a17043d68c71366de43b40fc78ee4ca19b08e0a78746142 = $this->env->getExtension("native_profiler");
        $__internal_648fc040e526b99f0a17043d68c71366de43b40fc78ee4ca19b08e0a78746142->enter($__internal_648fc040e526b99f0a17043d68c71366de43b40fc78ee4ca19b08e0a78746142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_648fc040e526b99f0a17043d68c71366de43b40fc78ee4ca19b08e0a78746142->leave($__internal_648fc040e526b99f0a17043d68c71366de43b40fc78ee4ca19b08e0a78746142_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_212a355cc3593ca114179c1d783c2d75fb7a670fe1e802775bcdcb2e1d18baca = $this->env->getExtension("native_profiler");
        $__internal_212a355cc3593ca114179c1d783c2d75fb7a670fe1e802775bcdcb2e1d18baca->enter($__internal_212a355cc3593ca114179c1d783c2d75fb7a670fe1e802775bcdcb2e1d18baca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_212a355cc3593ca114179c1d783c2d75fb7a670fe1e802775bcdcb2e1d18baca->leave($__internal_212a355cc3593ca114179c1d783c2d75fb7a670fe1e802775bcdcb2e1d18baca_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
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
