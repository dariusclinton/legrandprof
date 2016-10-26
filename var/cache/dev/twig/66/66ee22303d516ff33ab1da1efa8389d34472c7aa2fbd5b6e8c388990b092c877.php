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
        $__internal_4d3d60b3d0d846ebfc2e9b49c0d73de304f0fb220510ea18af3b55f3d714bee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d3d60b3d0d846ebfc2e9b49c0d73de304f0fb220510ea18af3b55f3d714bee3->enter($__internal_4d3d60b3d0d846ebfc2e9b49c0d73de304f0fb220510ea18af3b55f3d714bee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d3d60b3d0d846ebfc2e9b49c0d73de304f0fb220510ea18af3b55f3d714bee3->leave($__internal_4d3d60b3d0d846ebfc2e9b49c0d73de304f0fb220510ea18af3b55f3d714bee3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_efbee9859d2355d80f85a724f6bb291f3f8918f77ec50360fbdd6b8622bed022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efbee9859d2355d80f85a724f6bb291f3f8918f77ec50360fbdd6b8622bed022->enter($__internal_efbee9859d2355d80f85a724f6bb291f3f8918f77ec50360fbdd6b8622bed022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_efbee9859d2355d80f85a724f6bb291f3f8918f77ec50360fbdd6b8622bed022->leave($__internal_efbee9859d2355d80f85a724f6bb291f3f8918f77ec50360fbdd6b8622bed022_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b93eb708b459d87fbfc873ca3adc21a32ebe73bcc6fdb1667f092e73411e02d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b93eb708b459d87fbfc873ca3adc21a32ebe73bcc6fdb1667f092e73411e02d3->enter($__internal_b93eb708b459d87fbfc873ca3adc21a32ebe73bcc6fdb1667f092e73411e02d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b93eb708b459d87fbfc873ca3adc21a32ebe73bcc6fdb1667f092e73411e02d3->leave($__internal_b93eb708b459d87fbfc873ca3adc21a32ebe73bcc6fdb1667f092e73411e02d3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a0940b991960f503ea4aee6cf01e6dd48b8c01ddf0ba7fa6687ccfb64b49549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a0940b991960f503ea4aee6cf01e6dd48b8c01ddf0ba7fa6687ccfb64b49549->enter($__internal_8a0940b991960f503ea4aee6cf01e6dd48b8c01ddf0ba7fa6687ccfb64b49549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8a0940b991960f503ea4aee6cf01e6dd48b8c01ddf0ba7fa6687ccfb64b49549->leave($__internal_8a0940b991960f503ea4aee6cf01e6dd48b8c01ddf0ba7fa6687ccfb64b49549_prof);

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
