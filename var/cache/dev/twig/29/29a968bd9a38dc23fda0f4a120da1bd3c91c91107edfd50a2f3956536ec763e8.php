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
        $__internal_2a8c1c51407194fcd8c2b790da011ff0d76a9d3616fe4f1def60c32d9fa881de = $this->env->getExtension("native_profiler");
        $__internal_2a8c1c51407194fcd8c2b790da011ff0d76a9d3616fe4f1def60c32d9fa881de->enter($__internal_2a8c1c51407194fcd8c2b790da011ff0d76a9d3616fe4f1def60c32d9fa881de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a8c1c51407194fcd8c2b790da011ff0d76a9d3616fe4f1def60c32d9fa881de->leave($__internal_2a8c1c51407194fcd8c2b790da011ff0d76a9d3616fe4f1def60c32d9fa881de_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c01c1678f9584137e047ad3d3733c3227432f1f90a94974eb5ad26f28e118c9 = $this->env->getExtension("native_profiler");
        $__internal_6c01c1678f9584137e047ad3d3733c3227432f1f90a94974eb5ad26f28e118c9->enter($__internal_6c01c1678f9584137e047ad3d3733c3227432f1f90a94974eb5ad26f28e118c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6c01c1678f9584137e047ad3d3733c3227432f1f90a94974eb5ad26f28e118c9->leave($__internal_6c01c1678f9584137e047ad3d3733c3227432f1f90a94974eb5ad26f28e118c9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_06c69ad30891e6135e56a1b8b5d73b8ad86066b90e85b63bc7e30fec50bbf34f = $this->env->getExtension("native_profiler");
        $__internal_06c69ad30891e6135e56a1b8b5d73b8ad86066b90e85b63bc7e30fec50bbf34f->enter($__internal_06c69ad30891e6135e56a1b8b5d73b8ad86066b90e85b63bc7e30fec50bbf34f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_06c69ad30891e6135e56a1b8b5d73b8ad86066b90e85b63bc7e30fec50bbf34f->leave($__internal_06c69ad30891e6135e56a1b8b5d73b8ad86066b90e85b63bc7e30fec50bbf34f_prof);

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
