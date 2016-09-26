<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_b63a6655115bcba57209fe9e8af7867f9d5833126705499378146f333eaf06af extends Twig_Template
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
        $__internal_8c049a171746f02a93fad6a0923bb555099ffcf8b428700e2e34ea35041ca4d8 = $this->env->getExtension("native_profiler");
        $__internal_8c049a171746f02a93fad6a0923bb555099ffcf8b428700e2e34ea35041ca4d8->enter($__internal_8c049a171746f02a93fad6a0923bb555099ffcf8b428700e2e34ea35041ca4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c049a171746f02a93fad6a0923bb555099ffcf8b428700e2e34ea35041ca4d8->leave($__internal_8c049a171746f02a93fad6a0923bb555099ffcf8b428700e2e34ea35041ca4d8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fec2b809cd917ee2ceeb3d8116d3557e7c571d8460fc02ab37e4190d53f034c4 = $this->env->getExtension("native_profiler");
        $__internal_fec2b809cd917ee2ceeb3d8116d3557e7c571d8460fc02ab37e4190d53f034c4->enter($__internal_fec2b809cd917ee2ceeb3d8116d3557e7c571d8460fc02ab37e4190d53f034c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_fec2b809cd917ee2ceeb3d8116d3557e7c571d8460fc02ab37e4190d53f034c4->leave($__internal_fec2b809cd917ee2ceeb3d8116d3557e7c571d8460fc02ab37e4190d53f034c4_prof);

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

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
";
    }
}
