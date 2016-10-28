<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5155d6193b5d002fd7d66c4e46e348755661beb0fa9bd27465a5c15f9097548d extends Twig_Template
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
        $__internal_600dd543172a7964bca651b6cbf77f7f0ad9a7ae609782f8db3250662fb3a6f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_600dd543172a7964bca651b6cbf77f7f0ad9a7ae609782f8db3250662fb3a6f5->enter($__internal_600dd543172a7964bca651b6cbf77f7f0ad9a7ae609782f8db3250662fb3a6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_600dd543172a7964bca651b6cbf77f7f0ad9a7ae609782f8db3250662fb3a6f5->leave($__internal_600dd543172a7964bca651b6cbf77f7f0ad9a7ae609782f8db3250662fb3a6f5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a5b399de234bb0fb4058342045573bdf8886807170a5ccdac8ad3348aad4f768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b399de234bb0fb4058342045573bdf8886807170a5ccdac8ad3348aad4f768->enter($__internal_a5b399de234bb0fb4058342045573bdf8886807170a5ccdac8ad3348aad4f768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a5b399de234bb0fb4058342045573bdf8886807170a5ccdac8ad3348aad4f768->leave($__internal_a5b399de234bb0fb4058342045573bdf8886807170a5ccdac8ad3348aad4f768_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fec2e26f0a2cfdb1784ed6481f9106312adb0e1840d8707156e435ed031850df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec2e26f0a2cfdb1784ed6481f9106312adb0e1840d8707156e435ed031850df->enter($__internal_fec2e26f0a2cfdb1784ed6481f9106312adb0e1840d8707156e435ed031850df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fec2e26f0a2cfdb1784ed6481f9106312adb0e1840d8707156e435ed031850df->leave($__internal_fec2e26f0a2cfdb1784ed6481f9106312adb0e1840d8707156e435ed031850df_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb29206ae24d8d57d613222696a947815ccdba58790910c9b5eab6157e33e4a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb29206ae24d8d57d613222696a947815ccdba58790910c9b5eab6157e33e4a9->enter($__internal_fb29206ae24d8d57d613222696a947815ccdba58790910c9b5eab6157e33e4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_fb29206ae24d8d57d613222696a947815ccdba58790910c9b5eab6157e33e4a9->leave($__internal_fb29206ae24d8d57d613222696a947815ccdba58790910c9b5eab6157e33e4a9_prof);

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
