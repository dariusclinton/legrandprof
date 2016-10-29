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
        $__internal_96c4fdffde9897bd29a2429e429e06456b911b25bed993674cd75e767ff4c44f = $this->env->getExtension("native_profiler");
        $__internal_96c4fdffde9897bd29a2429e429e06456b911b25bed993674cd75e767ff4c44f->enter($__internal_96c4fdffde9897bd29a2429e429e06456b911b25bed993674cd75e767ff4c44f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96c4fdffde9897bd29a2429e429e06456b911b25bed993674cd75e767ff4c44f->leave($__internal_96c4fdffde9897bd29a2429e429e06456b911b25bed993674cd75e767ff4c44f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cea33b7fe96888fb55f2ad5c7100ce8f0267c5597dd8df5db8ad9a8a522176b7 = $this->env->getExtension("native_profiler");
        $__internal_cea33b7fe96888fb55f2ad5c7100ce8f0267c5597dd8df5db8ad9a8a522176b7->enter($__internal_cea33b7fe96888fb55f2ad5c7100ce8f0267c5597dd8df5db8ad9a8a522176b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cea33b7fe96888fb55f2ad5c7100ce8f0267c5597dd8df5db8ad9a8a522176b7->leave($__internal_cea33b7fe96888fb55f2ad5c7100ce8f0267c5597dd8df5db8ad9a8a522176b7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebd52084d2ff38cc7327528a6e3390a186a1d02e86dc142ed008f13ce9754ec0 = $this->env->getExtension("native_profiler");
        $__internal_ebd52084d2ff38cc7327528a6e3390a186a1d02e86dc142ed008f13ce9754ec0->enter($__internal_ebd52084d2ff38cc7327528a6e3390a186a1d02e86dc142ed008f13ce9754ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ebd52084d2ff38cc7327528a6e3390a186a1d02e86dc142ed008f13ce9754ec0->leave($__internal_ebd52084d2ff38cc7327528a6e3390a186a1d02e86dc142ed008f13ce9754ec0_prof);

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
