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
        $__internal_8f9f8b8e41eb3b428f976c9cea69384a892a2381e42eb027ec172123ab4f95aa = $this->env->getExtension("native_profiler");
        $__internal_8f9f8b8e41eb3b428f976c9cea69384a892a2381e42eb027ec172123ab4f95aa->enter($__internal_8f9f8b8e41eb3b428f976c9cea69384a892a2381e42eb027ec172123ab4f95aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f9f8b8e41eb3b428f976c9cea69384a892a2381e42eb027ec172123ab4f95aa->leave($__internal_8f9f8b8e41eb3b428f976c9cea69384a892a2381e42eb027ec172123ab4f95aa_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2b2c681e64a6259464a057f6acf6fed7e0e1baafdcaf8278acf7e85de208e0ec = $this->env->getExtension("native_profiler");
        $__internal_2b2c681e64a6259464a057f6acf6fed7e0e1baafdcaf8278acf7e85de208e0ec->enter($__internal_2b2c681e64a6259464a057f6acf6fed7e0e1baafdcaf8278acf7e85de208e0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_2b2c681e64a6259464a057f6acf6fed7e0e1baafdcaf8278acf7e85de208e0ec->leave($__internal_2b2c681e64a6259464a057f6acf6fed7e0e1baafdcaf8278acf7e85de208e0ec_prof);

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
