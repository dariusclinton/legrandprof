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
        $__internal_10d28a6b9e425322b01a4b54cd648ff59ef81a0921ba15915824c3a5a29dfc54 = $this->env->getExtension("native_profiler");
        $__internal_10d28a6b9e425322b01a4b54cd648ff59ef81a0921ba15915824c3a5a29dfc54->enter($__internal_10d28a6b9e425322b01a4b54cd648ff59ef81a0921ba15915824c3a5a29dfc54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10d28a6b9e425322b01a4b54cd648ff59ef81a0921ba15915824c3a5a29dfc54->leave($__internal_10d28a6b9e425322b01a4b54cd648ff59ef81a0921ba15915824c3a5a29dfc54_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3cf44b451523a3c45ebf832b8f56da4df833be36b38000518d8fa2d60974c633 = $this->env->getExtension("native_profiler");
        $__internal_3cf44b451523a3c45ebf832b8f56da4df833be36b38000518d8fa2d60974c633->enter($__internal_3cf44b451523a3c45ebf832b8f56da4df833be36b38000518d8fa2d60974c633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_3cf44b451523a3c45ebf832b8f56da4df833be36b38000518d8fa2d60974c633->leave($__internal_3cf44b451523a3c45ebf832b8f56da4df833be36b38000518d8fa2d60974c633_prof);

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
