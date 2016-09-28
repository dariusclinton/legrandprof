<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_261dd467343fbab4dca7eca0e146161565e024897d78c571830089a0d9392b7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_aca280399cfa4d8845124d05f4e04ffb982e7af5faca3317d44344c72a2c566b = $this->env->getExtension("native_profiler");
        $__internal_aca280399cfa4d8845124d05f4e04ffb982e7af5faca3317d44344c72a2c566b->enter($__internal_aca280399cfa4d8845124d05f4e04ffb982e7af5faca3317d44344c72a2c566b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aca280399cfa4d8845124d05f4e04ffb982e7af5faca3317d44344c72a2c566b->leave($__internal_aca280399cfa4d8845124d05f4e04ffb982e7af5faca3317d44344c72a2c566b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ee6509caee549362a7141aaefb6349058e67d153dd1361fbfdc8de41b874883 = $this->env->getExtension("native_profiler");
        $__internal_5ee6509caee549362a7141aaefb6349058e67d153dd1361fbfdc8de41b874883->enter($__internal_5ee6509caee549362a7141aaefb6349058e67d153dd1361fbfdc8de41b874883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5ee6509caee549362a7141aaefb6349058e67d153dd1361fbfdc8de41b874883->leave($__internal_5ee6509caee549362a7141aaefb6349058e67d153dd1361fbfdc8de41b874883_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8669b46dfd8071ed77f4b89d3d99be01fbc498b8dce82839f8f083488db1f9d5 = $this->env->getExtension("native_profiler");
        $__internal_8669b46dfd8071ed77f4b89d3d99be01fbc498b8dce82839f8f083488db1f9d5->enter($__internal_8669b46dfd8071ed77f4b89d3d99be01fbc498b8dce82839f8f083488db1f9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_8669b46dfd8071ed77f4b89d3d99be01fbc498b8dce82839f8f083488db1f9d5->leave($__internal_8669b46dfd8071ed77f4b89d3d99be01fbc498b8dce82839f8f083488db1f9d5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
