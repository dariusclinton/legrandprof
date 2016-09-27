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
        $__internal_00eb6bff20862d3d294aaadf597e43435875b9386baaf58d73a65551a98cb8d4 = $this->env->getExtension("native_profiler");
        $__internal_00eb6bff20862d3d294aaadf597e43435875b9386baaf58d73a65551a98cb8d4->enter($__internal_00eb6bff20862d3d294aaadf597e43435875b9386baaf58d73a65551a98cb8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00eb6bff20862d3d294aaadf597e43435875b9386baaf58d73a65551a98cb8d4->leave($__internal_00eb6bff20862d3d294aaadf597e43435875b9386baaf58d73a65551a98cb8d4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_86bb1a27537664215ce4c79d4181438167f80971dcf144c72c91843eba90d325 = $this->env->getExtension("native_profiler");
        $__internal_86bb1a27537664215ce4c79d4181438167f80971dcf144c72c91843eba90d325->enter($__internal_86bb1a27537664215ce4c79d4181438167f80971dcf144c72c91843eba90d325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_86bb1a27537664215ce4c79d4181438167f80971dcf144c72c91843eba90d325->leave($__internal_86bb1a27537664215ce4c79d4181438167f80971dcf144c72c91843eba90d325_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_04f0a6fb6c0f0cd53ea3ac28b4810df2037af627fcc6e392870c1479cc1454dd = $this->env->getExtension("native_profiler");
        $__internal_04f0a6fb6c0f0cd53ea3ac28b4810df2037af627fcc6e392870c1479cc1454dd->enter($__internal_04f0a6fb6c0f0cd53ea3ac28b4810df2037af627fcc6e392870c1479cc1454dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_04f0a6fb6c0f0cd53ea3ac28b4810df2037af627fcc6e392870c1479cc1454dd->leave($__internal_04f0a6fb6c0f0cd53ea3ac28b4810df2037af627fcc6e392870c1479cc1454dd_prof);

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
