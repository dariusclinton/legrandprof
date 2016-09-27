<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_89e997cf39be608829c9f4d9104aa2fd0e2893f67c6291240b67267f5787e0e7 extends Twig_Template
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
        $__internal_99f31f9f5c887e8fbf3a81ac9f43f2a170614ec0cdd6f35a5585ef9f355001a3 = $this->env->getExtension("native_profiler");
        $__internal_99f31f9f5c887e8fbf3a81ac9f43f2a170614ec0cdd6f35a5585ef9f355001a3->enter($__internal_99f31f9f5c887e8fbf3a81ac9f43f2a170614ec0cdd6f35a5585ef9f355001a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99f31f9f5c887e8fbf3a81ac9f43f2a170614ec0cdd6f35a5585ef9f355001a3->leave($__internal_99f31f9f5c887e8fbf3a81ac9f43f2a170614ec0cdd6f35a5585ef9f355001a3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d47343abd8f1414fa59aceee1c5bfa1a8479f19734e4a7089623504a0c8bc0d6 = $this->env->getExtension("native_profiler");
        $__internal_d47343abd8f1414fa59aceee1c5bfa1a8479f19734e4a7089623504a0c8bc0d6->enter($__internal_d47343abd8f1414fa59aceee1c5bfa1a8479f19734e4a7089623504a0c8bc0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_d47343abd8f1414fa59aceee1c5bfa1a8479f19734e4a7089623504a0c8bc0d6->leave($__internal_d47343abd8f1414fa59aceee1c5bfa1a8479f19734e4a7089623504a0c8bc0d6_prof);

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
