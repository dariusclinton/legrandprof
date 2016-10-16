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
        $__internal_285f2e8215df924e22e4c8b0a215c41d5a69c488331bcbe4e7c5a043fdac4c43 = $this->env->getExtension("native_profiler");
        $__internal_285f2e8215df924e22e4c8b0a215c41d5a69c488331bcbe4e7c5a043fdac4c43->enter($__internal_285f2e8215df924e22e4c8b0a215c41d5a69c488331bcbe4e7c5a043fdac4c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_285f2e8215df924e22e4c8b0a215c41d5a69c488331bcbe4e7c5a043fdac4c43->leave($__internal_285f2e8215df924e22e4c8b0a215c41d5a69c488331bcbe4e7c5a043fdac4c43_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_66b57d9919e87334bc92a1b883e957b47786857544dd7dfec2b31de70c1ac330 = $this->env->getExtension("native_profiler");
        $__internal_66b57d9919e87334bc92a1b883e957b47786857544dd7dfec2b31de70c1ac330->enter($__internal_66b57d9919e87334bc92a1b883e957b47786857544dd7dfec2b31de70c1ac330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_66b57d9919e87334bc92a1b883e957b47786857544dd7dfec2b31de70c1ac330->leave($__internal_66b57d9919e87334bc92a1b883e957b47786857544dd7dfec2b31de70c1ac330_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a0e59b257a402b50564612e8540f01e5bea575c0bb5e68105485a9ccace31fb = $this->env->getExtension("native_profiler");
        $__internal_0a0e59b257a402b50564612e8540f01e5bea575c0bb5e68105485a9ccace31fb->enter($__internal_0a0e59b257a402b50564612e8540f01e5bea575c0bb5e68105485a9ccace31fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0a0e59b257a402b50564612e8540f01e5bea575c0bb5e68105485a9ccace31fb->leave($__internal_0a0e59b257a402b50564612e8540f01e5bea575c0bb5e68105485a9ccace31fb_prof);

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
