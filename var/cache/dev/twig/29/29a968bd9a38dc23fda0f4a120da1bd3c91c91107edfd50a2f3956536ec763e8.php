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
        $__internal_2ebc46c604ccc6ff507f6fa3175256c128e6f726b98824451e54051a434370fc = $this->env->getExtension("native_profiler");
        $__internal_2ebc46c604ccc6ff507f6fa3175256c128e6f726b98824451e54051a434370fc->enter($__internal_2ebc46c604ccc6ff507f6fa3175256c128e6f726b98824451e54051a434370fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ebc46c604ccc6ff507f6fa3175256c128e6f726b98824451e54051a434370fc->leave($__internal_2ebc46c604ccc6ff507f6fa3175256c128e6f726b98824451e54051a434370fc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd31ef45210927d8f4474b4fcff2b8c7ceddd8aec396b8d749191fa754288d17 = $this->env->getExtension("native_profiler");
        $__internal_dd31ef45210927d8f4474b4fcff2b8c7ceddd8aec396b8d749191fa754288d17->enter($__internal_dd31ef45210927d8f4474b4fcff2b8c7ceddd8aec396b8d749191fa754288d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_dd31ef45210927d8f4474b4fcff2b8c7ceddd8aec396b8d749191fa754288d17->leave($__internal_dd31ef45210927d8f4474b4fcff2b8c7ceddd8aec396b8d749191fa754288d17_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_71e32fc901e9c0c36878efc0d808f26a7a78a9ce18fa8c9d9e828befd15227d8 = $this->env->getExtension("native_profiler");
        $__internal_71e32fc901e9c0c36878efc0d808f26a7a78a9ce18fa8c9d9e828befd15227d8->enter($__internal_71e32fc901e9c0c36878efc0d808f26a7a78a9ce18fa8c9d9e828befd15227d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_71e32fc901e9c0c36878efc0d808f26a7a78a9ce18fa8c9d9e828befd15227d8->leave($__internal_71e32fc901e9c0c36878efc0d808f26a7a78a9ce18fa8c9d9e828befd15227d8_prof);

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
