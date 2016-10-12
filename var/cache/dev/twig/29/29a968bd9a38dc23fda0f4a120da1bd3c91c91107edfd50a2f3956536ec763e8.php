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
        $__internal_32ff192eb4beeb20800f03b0e43d0e1f4a9e5e7399ea96aaa3fd2203c4bcee95 = $this->env->getExtension("native_profiler");
        $__internal_32ff192eb4beeb20800f03b0e43d0e1f4a9e5e7399ea96aaa3fd2203c4bcee95->enter($__internal_32ff192eb4beeb20800f03b0e43d0e1f4a9e5e7399ea96aaa3fd2203c4bcee95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32ff192eb4beeb20800f03b0e43d0e1f4a9e5e7399ea96aaa3fd2203c4bcee95->leave($__internal_32ff192eb4beeb20800f03b0e43d0e1f4a9e5e7399ea96aaa3fd2203c4bcee95_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1208700fc4ab19198eb77008caa096a7fe2704fd350558c0bff1d766f4bbbbf = $this->env->getExtension("native_profiler");
        $__internal_a1208700fc4ab19198eb77008caa096a7fe2704fd350558c0bff1d766f4bbbbf->enter($__internal_a1208700fc4ab19198eb77008caa096a7fe2704fd350558c0bff1d766f4bbbbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a1208700fc4ab19198eb77008caa096a7fe2704fd350558c0bff1d766f4bbbbf->leave($__internal_a1208700fc4ab19198eb77008caa096a7fe2704fd350558c0bff1d766f4bbbbf_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_202501ee57774225dbed5aadf466c5eabb91fca2011c918ba5fef378ac04ffb4 = $this->env->getExtension("native_profiler");
        $__internal_202501ee57774225dbed5aadf466c5eabb91fca2011c918ba5fef378ac04ffb4->enter($__internal_202501ee57774225dbed5aadf466c5eabb91fca2011c918ba5fef378ac04ffb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_202501ee57774225dbed5aadf466c5eabb91fca2011c918ba5fef378ac04ffb4->leave($__internal_202501ee57774225dbed5aadf466c5eabb91fca2011c918ba5fef378ac04ffb4_prof);

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
