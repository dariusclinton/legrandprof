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
        $__internal_4df1056db2f7f75c9a62b572fb8a5d1fba2879aa7b60b52b1163e8fe7c787944 = $this->env->getExtension("native_profiler");
        $__internal_4df1056db2f7f75c9a62b572fb8a5d1fba2879aa7b60b52b1163e8fe7c787944->enter($__internal_4df1056db2f7f75c9a62b572fb8a5d1fba2879aa7b60b52b1163e8fe7c787944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4df1056db2f7f75c9a62b572fb8a5d1fba2879aa7b60b52b1163e8fe7c787944->leave($__internal_4df1056db2f7f75c9a62b572fb8a5d1fba2879aa7b60b52b1163e8fe7c787944_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_19ff88e09c957834a83907ada32e43eb05704719d2110e1a812aa7c2fdaa1909 = $this->env->getExtension("native_profiler");
        $__internal_19ff88e09c957834a83907ada32e43eb05704719d2110e1a812aa7c2fdaa1909->enter($__internal_19ff88e09c957834a83907ada32e43eb05704719d2110e1a812aa7c2fdaa1909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_19ff88e09c957834a83907ada32e43eb05704719d2110e1a812aa7c2fdaa1909->leave($__internal_19ff88e09c957834a83907ada32e43eb05704719d2110e1a812aa7c2fdaa1909_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fe88619dc0e3f8a5b2b81ff6d06996628b42326a6f236da65491895e2b72caa = $this->env->getExtension("native_profiler");
        $__internal_7fe88619dc0e3f8a5b2b81ff6d06996628b42326a6f236da65491895e2b72caa->enter($__internal_7fe88619dc0e3f8a5b2b81ff6d06996628b42326a6f236da65491895e2b72caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7fe88619dc0e3f8a5b2b81ff6d06996628b42326a6f236da65491895e2b72caa->leave($__internal_7fe88619dc0e3f8a5b2b81ff6d06996628b42326a6f236da65491895e2b72caa_prof);

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
