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
        $__internal_20bd7c97dd7d4a068acbacd5735ae08676c5a32afb87f68481775f18ed01c350 = $this->env->getExtension("native_profiler");
        $__internal_20bd7c97dd7d4a068acbacd5735ae08676c5a32afb87f68481775f18ed01c350->enter($__internal_20bd7c97dd7d4a068acbacd5735ae08676c5a32afb87f68481775f18ed01c350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20bd7c97dd7d4a068acbacd5735ae08676c5a32afb87f68481775f18ed01c350->leave($__internal_20bd7c97dd7d4a068acbacd5735ae08676c5a32afb87f68481775f18ed01c350_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c6b411a94eab629081b49668f1d55402d2d3cae29dace371eb8c350842405e9e = $this->env->getExtension("native_profiler");
        $__internal_c6b411a94eab629081b49668f1d55402d2d3cae29dace371eb8c350842405e9e->enter($__internal_c6b411a94eab629081b49668f1d55402d2d3cae29dace371eb8c350842405e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c6b411a94eab629081b49668f1d55402d2d3cae29dace371eb8c350842405e9e->leave($__internal_c6b411a94eab629081b49668f1d55402d2d3cae29dace371eb8c350842405e9e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f8c481df367122362ff83665224bd99ddd7fa440e337e037542b62e090731e3 = $this->env->getExtension("native_profiler");
        $__internal_5f8c481df367122362ff83665224bd99ddd7fa440e337e037542b62e090731e3->enter($__internal_5f8c481df367122362ff83665224bd99ddd7fa440e337e037542b62e090731e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5f8c481df367122362ff83665224bd99ddd7fa440e337e037542b62e090731e3->leave($__internal_5f8c481df367122362ff83665224bd99ddd7fa440e337e037542b62e090731e3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0b110a63b1e2f327aa85acfa006bb19895327c8269ecc967563f79945ed3698 = $this->env->getExtension("native_profiler");
        $__internal_b0b110a63b1e2f327aa85acfa006bb19895327c8269ecc967563f79945ed3698->enter($__internal_b0b110a63b1e2f327aa85acfa006bb19895327c8269ecc967563f79945ed3698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b0b110a63b1e2f327aa85acfa006bb19895327c8269ecc967563f79945ed3698->leave($__internal_b0b110a63b1e2f327aa85acfa006bb19895327c8269ecc967563f79945ed3698_prof);

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
