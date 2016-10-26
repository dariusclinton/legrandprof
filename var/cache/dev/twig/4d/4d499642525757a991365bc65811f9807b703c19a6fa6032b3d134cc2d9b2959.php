<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_1ae9e311c79119aca1e6c3433cf84a1145719f2817d047383151f3d03a11b72c extends Twig_Template
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
        $__internal_885fda3ebd41b9b7b7000833b8bafb89c6d0fa736c3287d6a55f3c4c8e9ecb7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_885fda3ebd41b9b7b7000833b8bafb89c6d0fa736c3287d6a55f3c4c8e9ecb7f->enter($__internal_885fda3ebd41b9b7b7000833b8bafb89c6d0fa736c3287d6a55f3c4c8e9ecb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_885fda3ebd41b9b7b7000833b8bafb89c6d0fa736c3287d6a55f3c4c8e9ecb7f->leave($__internal_885fda3ebd41b9b7b7000833b8bafb89c6d0fa736c3287d6a55f3c4c8e9ecb7f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_016835ada85f27a34f92f1ed63e773ad65ec1a8b76ce8f74ecfa4cac15df60fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_016835ada85f27a34f92f1ed63e773ad65ec1a8b76ce8f74ecfa4cac15df60fb->enter($__internal_016835ada85f27a34f92f1ed63e773ad65ec1a8b76ce8f74ecfa4cac15df60fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_016835ada85f27a34f92f1ed63e773ad65ec1a8b76ce8f74ecfa4cac15df60fb->leave($__internal_016835ada85f27a34f92f1ed63e773ad65ec1a8b76ce8f74ecfa4cac15df60fb_prof);

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
