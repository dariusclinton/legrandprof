<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3ef93532d91729998b6ad105b8b1910dccd9deb93c6d57f5c15943077c5dac20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c910524107b51308ad1aa5b59f27dd1a64b5f1e953fa899b38be355dbc879986 = $this->env->getExtension("native_profiler");
        $__internal_c910524107b51308ad1aa5b59f27dd1a64b5f1e953fa899b38be355dbc879986->enter($__internal_c910524107b51308ad1aa5b59f27dd1a64b5f1e953fa899b38be355dbc879986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c910524107b51308ad1aa5b59f27dd1a64b5f1e953fa899b38be355dbc879986->leave($__internal_c910524107b51308ad1aa5b59f27dd1a64b5f1e953fa899b38be355dbc879986_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c93bf8f805262c842beb02cb0e58b66daa6101dc4aa3fb27535dbb804bfbac51 = $this->env->getExtension("native_profiler");
        $__internal_c93bf8f805262c842beb02cb0e58b66daa6101dc4aa3fb27535dbb804bfbac51->enter($__internal_c93bf8f805262c842beb02cb0e58b66daa6101dc4aa3fb27535dbb804bfbac51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c93bf8f805262c842beb02cb0e58b66daa6101dc4aa3fb27535dbb804bfbac51->leave($__internal_c93bf8f805262c842beb02cb0e58b66daa6101dc4aa3fb27535dbb804bfbac51_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf79725c45617103112fd0b4ebbe3678218c7f500a1e71c555e5ef0d6e8a01a9 = $this->env->getExtension("native_profiler");
        $__internal_bf79725c45617103112fd0b4ebbe3678218c7f500a1e71c555e5ef0d6e8a01a9->enter($__internal_bf79725c45617103112fd0b4ebbe3678218c7f500a1e71c555e5ef0d6e8a01a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bf79725c45617103112fd0b4ebbe3678218c7f500a1e71c555e5ef0d6e8a01a9->leave($__internal_bf79725c45617103112fd0b4ebbe3678218c7f500a1e71c555e5ef0d6e8a01a9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0858c1e7990bb9966ab5276c19a05a83f6d82a1a6550d160242cbb72335bdd6 = $this->env->getExtension("native_profiler");
        $__internal_d0858c1e7990bb9966ab5276c19a05a83f6d82a1a6550d160242cbb72335bdd6->enter($__internal_d0858c1e7990bb9966ab5276c19a05a83f6d82a1a6550d160242cbb72335bdd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d0858c1e7990bb9966ab5276c19a05a83f6d82a1a6550d160242cbb72335bdd6->leave($__internal_d0858c1e7990bb9966ab5276c19a05a83f6d82a1a6550d160242cbb72335bdd6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
