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
        $__internal_3e8f08043f77d31ad7ffdd891ba353158a078ce3ecc901129da26ebb10c93faa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e8f08043f77d31ad7ffdd891ba353158a078ce3ecc901129da26ebb10c93faa->enter($__internal_3e8f08043f77d31ad7ffdd891ba353158a078ce3ecc901129da26ebb10c93faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e8f08043f77d31ad7ffdd891ba353158a078ce3ecc901129da26ebb10c93faa->leave($__internal_3e8f08043f77d31ad7ffdd891ba353158a078ce3ecc901129da26ebb10c93faa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f64cd13573dca1d3a326d8748ee788235476842f0f985a739e74f4c0188481d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f64cd13573dca1d3a326d8748ee788235476842f0f985a739e74f4c0188481d5->enter($__internal_f64cd13573dca1d3a326d8748ee788235476842f0f985a739e74f4c0188481d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f64cd13573dca1d3a326d8748ee788235476842f0f985a739e74f4c0188481d5->leave($__internal_f64cd13573dca1d3a326d8748ee788235476842f0f985a739e74f4c0188481d5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a6fe7fe0cde814ce7519a3ed43d72eadd444d604406239e0671e8445e516e54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a6fe7fe0cde814ce7519a3ed43d72eadd444d604406239e0671e8445e516e54->enter($__internal_9a6fe7fe0cde814ce7519a3ed43d72eadd444d604406239e0671e8445e516e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9a6fe7fe0cde814ce7519a3ed43d72eadd444d604406239e0671e8445e516e54->leave($__internal_9a6fe7fe0cde814ce7519a3ed43d72eadd444d604406239e0671e8445e516e54_prof);

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
