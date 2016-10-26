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
        $__internal_bde13aef538c6824aebd69ab1af002f6c8766727d470143278e558eda5ad8331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde13aef538c6824aebd69ab1af002f6c8766727d470143278e558eda5ad8331->enter($__internal_bde13aef538c6824aebd69ab1af002f6c8766727d470143278e558eda5ad8331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bde13aef538c6824aebd69ab1af002f6c8766727d470143278e558eda5ad8331->leave($__internal_bde13aef538c6824aebd69ab1af002f6c8766727d470143278e558eda5ad8331_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8d2280b5bdf56fa7e5e3c06c1ed583375caba462ded8956579a3fe6dfef0e86f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d2280b5bdf56fa7e5e3c06c1ed583375caba462ded8956579a3fe6dfef0e86f->enter($__internal_8d2280b5bdf56fa7e5e3c06c1ed583375caba462ded8956579a3fe6dfef0e86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8d2280b5bdf56fa7e5e3c06c1ed583375caba462ded8956579a3fe6dfef0e86f->leave($__internal_8d2280b5bdf56fa7e5e3c06c1ed583375caba462ded8956579a3fe6dfef0e86f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e7e3a9869e0cc201bb26407a27df42914c2382881a542b9c8b2805ac1c66060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e7e3a9869e0cc201bb26407a27df42914c2382881a542b9c8b2805ac1c66060->enter($__internal_7e7e3a9869e0cc201bb26407a27df42914c2382881a542b9c8b2805ac1c66060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7e7e3a9869e0cc201bb26407a27df42914c2382881a542b9c8b2805ac1c66060->leave($__internal_7e7e3a9869e0cc201bb26407a27df42914c2382881a542b9c8b2805ac1c66060_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b28bd9074e5fc0f236e60123bdfd633b141b6df2e866a86fc41c5c91618801d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b28bd9074e5fc0f236e60123bdfd633b141b6df2e866a86fc41c5c91618801d0->enter($__internal_b28bd9074e5fc0f236e60123bdfd633b141b6df2e866a86fc41c5c91618801d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b28bd9074e5fc0f236e60123bdfd633b141b6df2e866a86fc41c5c91618801d0->leave($__internal_b28bd9074e5fc0f236e60123bdfd633b141b6df2e866a86fc41c5c91618801d0_prof);

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
