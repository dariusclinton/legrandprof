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
        $__internal_e3701890e5227aad832b654afe3a712f57b2c47827582319f558321ec4a26fb8 = $this->env->getExtension("native_profiler");
        $__internal_e3701890e5227aad832b654afe3a712f57b2c47827582319f558321ec4a26fb8->enter($__internal_e3701890e5227aad832b654afe3a712f57b2c47827582319f558321ec4a26fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3701890e5227aad832b654afe3a712f57b2c47827582319f558321ec4a26fb8->leave($__internal_e3701890e5227aad832b654afe3a712f57b2c47827582319f558321ec4a26fb8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1afb42c0769a7d40b3e27e9ade98c7bf27b6c0ba3d3d0ed45f0981bbfcf56261 = $this->env->getExtension("native_profiler");
        $__internal_1afb42c0769a7d40b3e27e9ade98c7bf27b6c0ba3d3d0ed45f0981bbfcf56261->enter($__internal_1afb42c0769a7d40b3e27e9ade98c7bf27b6c0ba3d3d0ed45f0981bbfcf56261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1afb42c0769a7d40b3e27e9ade98c7bf27b6c0ba3d3d0ed45f0981bbfcf56261->leave($__internal_1afb42c0769a7d40b3e27e9ade98c7bf27b6c0ba3d3d0ed45f0981bbfcf56261_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_af5ddd4e5b52de36a5b2fa23a557696e6e4026e3eba0934adc18c3cf80358d10 = $this->env->getExtension("native_profiler");
        $__internal_af5ddd4e5b52de36a5b2fa23a557696e6e4026e3eba0934adc18c3cf80358d10->enter($__internal_af5ddd4e5b52de36a5b2fa23a557696e6e4026e3eba0934adc18c3cf80358d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_af5ddd4e5b52de36a5b2fa23a557696e6e4026e3eba0934adc18c3cf80358d10->leave($__internal_af5ddd4e5b52de36a5b2fa23a557696e6e4026e3eba0934adc18c3cf80358d10_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6e9025bd3161bfe9475eb903d2cdbc7ea88d0e7fdda453a7f8a515245c8aed7 = $this->env->getExtension("native_profiler");
        $__internal_d6e9025bd3161bfe9475eb903d2cdbc7ea88d0e7fdda453a7f8a515245c8aed7->enter($__internal_d6e9025bd3161bfe9475eb903d2cdbc7ea88d0e7fdda453a7f8a515245c8aed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d6e9025bd3161bfe9475eb903d2cdbc7ea88d0e7fdda453a7f8a515245c8aed7->leave($__internal_d6e9025bd3161bfe9475eb903d2cdbc7ea88d0e7fdda453a7f8a515245c8aed7_prof);

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
