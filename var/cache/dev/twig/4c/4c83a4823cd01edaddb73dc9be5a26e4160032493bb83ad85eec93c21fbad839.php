<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3ef93532d91729998b6ad105b8b1910dccd9deb93c6d57f5c15943077c5dac20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_3357dcf82a7ab4dbf1341761a5e34111ff03d6c171bb0ab9efb7152eacef2540 = $this->env->getExtension("native_profiler");
        $__internal_3357dcf82a7ab4dbf1341761a5e34111ff03d6c171bb0ab9efb7152eacef2540->enter($__internal_3357dcf82a7ab4dbf1341761a5e34111ff03d6c171bb0ab9efb7152eacef2540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3357dcf82a7ab4dbf1341761a5e34111ff03d6c171bb0ab9efb7152eacef2540->leave($__internal_3357dcf82a7ab4dbf1341761a5e34111ff03d6c171bb0ab9efb7152eacef2540_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_51546300f6b42b0c6bc76dabbf13b56f1c8b54522a7862381c746c39beba928d = $this->env->getExtension("native_profiler");
        $__internal_51546300f6b42b0c6bc76dabbf13b56f1c8b54522a7862381c746c39beba928d->enter($__internal_51546300f6b42b0c6bc76dabbf13b56f1c8b54522a7862381c746c39beba928d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_51546300f6b42b0c6bc76dabbf13b56f1c8b54522a7862381c746c39beba928d->leave($__internal_51546300f6b42b0c6bc76dabbf13b56f1c8b54522a7862381c746c39beba928d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c3faf559be258eb954386a2eec0d6d2be290149b0ce6a3f264abe1164c939b8 = $this->env->getExtension("native_profiler");
        $__internal_2c3faf559be258eb954386a2eec0d6d2be290149b0ce6a3f264abe1164c939b8->enter($__internal_2c3faf559be258eb954386a2eec0d6d2be290149b0ce6a3f264abe1164c939b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2c3faf559be258eb954386a2eec0d6d2be290149b0ce6a3f264abe1164c939b8->leave($__internal_2c3faf559be258eb954386a2eec0d6d2be290149b0ce6a3f264abe1164c939b8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_14f613d3dedd4bd42ab7e658886b6cc51430ab7844e973f2860150ea02144bf2 = $this->env->getExtension("native_profiler");
        $__internal_14f613d3dedd4bd42ab7e658886b6cc51430ab7844e973f2860150ea02144bf2->enter($__internal_14f613d3dedd4bd42ab7e658886b6cc51430ab7844e973f2860150ea02144bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_14f613d3dedd4bd42ab7e658886b6cc51430ab7844e973f2860150ea02144bf2->leave($__internal_14f613d3dedd4bd42ab7e658886b6cc51430ab7844e973f2860150ea02144bf2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
