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
        $__internal_125934ef85ffc8262e7b5d8eff13606e1aed9af1ea02d50cf5a056094fb33bcd = $this->env->getExtension("native_profiler");
        $__internal_125934ef85ffc8262e7b5d8eff13606e1aed9af1ea02d50cf5a056094fb33bcd->enter($__internal_125934ef85ffc8262e7b5d8eff13606e1aed9af1ea02d50cf5a056094fb33bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_125934ef85ffc8262e7b5d8eff13606e1aed9af1ea02d50cf5a056094fb33bcd->leave($__internal_125934ef85ffc8262e7b5d8eff13606e1aed9af1ea02d50cf5a056094fb33bcd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_af8f8a308128cd9c1ef02099d3dd2725c663c2f605ab61cc38f9b226fffb6ea1 = $this->env->getExtension("native_profiler");
        $__internal_af8f8a308128cd9c1ef02099d3dd2725c663c2f605ab61cc38f9b226fffb6ea1->enter($__internal_af8f8a308128cd9c1ef02099d3dd2725c663c2f605ab61cc38f9b226fffb6ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_af8f8a308128cd9c1ef02099d3dd2725c663c2f605ab61cc38f9b226fffb6ea1->leave($__internal_af8f8a308128cd9c1ef02099d3dd2725c663c2f605ab61cc38f9b226fffb6ea1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cdf0f9452a4e8f3596761a2c0d7e34bea9d55277b1e8796cc42170a7ae8faef6 = $this->env->getExtension("native_profiler");
        $__internal_cdf0f9452a4e8f3596761a2c0d7e34bea9d55277b1e8796cc42170a7ae8faef6->enter($__internal_cdf0f9452a4e8f3596761a2c0d7e34bea9d55277b1e8796cc42170a7ae8faef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cdf0f9452a4e8f3596761a2c0d7e34bea9d55277b1e8796cc42170a7ae8faef6->leave($__internal_cdf0f9452a4e8f3596761a2c0d7e34bea9d55277b1e8796cc42170a7ae8faef6_prof);

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
