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
        $__internal_af06e9d8d72bbccd3f04e344766400f41d063d0e565c04d5fe000f738593f120 = $this->env->getExtension("native_profiler");
        $__internal_af06e9d8d72bbccd3f04e344766400f41d063d0e565c04d5fe000f738593f120->enter($__internal_af06e9d8d72bbccd3f04e344766400f41d063d0e565c04d5fe000f738593f120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af06e9d8d72bbccd3f04e344766400f41d063d0e565c04d5fe000f738593f120->leave($__internal_af06e9d8d72bbccd3f04e344766400f41d063d0e565c04d5fe000f738593f120_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_73e75e06a3613d688e5fd624ec1fe08f5cdd1df6abda358ef0b42b808494b4b1 = $this->env->getExtension("native_profiler");
        $__internal_73e75e06a3613d688e5fd624ec1fe08f5cdd1df6abda358ef0b42b808494b4b1->enter($__internal_73e75e06a3613d688e5fd624ec1fe08f5cdd1df6abda358ef0b42b808494b4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_73e75e06a3613d688e5fd624ec1fe08f5cdd1df6abda358ef0b42b808494b4b1->leave($__internal_73e75e06a3613d688e5fd624ec1fe08f5cdd1df6abda358ef0b42b808494b4b1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b30066ce44b59ec3eb47b7126de9e9820bb22a6ad2fcf5ebdb29b0c15007a3ab = $this->env->getExtension("native_profiler");
        $__internal_b30066ce44b59ec3eb47b7126de9e9820bb22a6ad2fcf5ebdb29b0c15007a3ab->enter($__internal_b30066ce44b59ec3eb47b7126de9e9820bb22a6ad2fcf5ebdb29b0c15007a3ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b30066ce44b59ec3eb47b7126de9e9820bb22a6ad2fcf5ebdb29b0c15007a3ab->leave($__internal_b30066ce44b59ec3eb47b7126de9e9820bb22a6ad2fcf5ebdb29b0c15007a3ab_prof);

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
