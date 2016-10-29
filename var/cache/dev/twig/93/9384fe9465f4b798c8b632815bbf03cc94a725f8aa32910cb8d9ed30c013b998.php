<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d40e8bc81c08156ecc19e66592d0ede98496d5b16643fe5501312cc46392c9db extends Twig_Template
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
        $__internal_a0b6026c9b517173e3fb5d80372df3e5b0738347366a339525805569477bce96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0b6026c9b517173e3fb5d80372df3e5b0738347366a339525805569477bce96->enter($__internal_a0b6026c9b517173e3fb5d80372df3e5b0738347366a339525805569477bce96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0b6026c9b517173e3fb5d80372df3e5b0738347366a339525805569477bce96->leave($__internal_a0b6026c9b517173e3fb5d80372df3e5b0738347366a339525805569477bce96_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3859fad37ae252a823e31a89291a21a9de74947347b16acfc89f09fd17f13c3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3859fad37ae252a823e31a89291a21a9de74947347b16acfc89f09fd17f13c3a->enter($__internal_3859fad37ae252a823e31a89291a21a9de74947347b16acfc89f09fd17f13c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3859fad37ae252a823e31a89291a21a9de74947347b16acfc89f09fd17f13c3a->leave($__internal_3859fad37ae252a823e31a89291a21a9de74947347b16acfc89f09fd17f13c3a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0019024af422612fa6b29ceb3c85a3f2473975947a7e71cbac9b2fe6f9901e1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0019024af422612fa6b29ceb3c85a3f2473975947a7e71cbac9b2fe6f9901e1c->enter($__internal_0019024af422612fa6b29ceb3c85a3f2473975947a7e71cbac9b2fe6f9901e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0019024af422612fa6b29ceb3c85a3f2473975947a7e71cbac9b2fe6f9901e1c->leave($__internal_0019024af422612fa6b29ceb3c85a3f2473975947a7e71cbac9b2fe6f9901e1c_prof);

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
