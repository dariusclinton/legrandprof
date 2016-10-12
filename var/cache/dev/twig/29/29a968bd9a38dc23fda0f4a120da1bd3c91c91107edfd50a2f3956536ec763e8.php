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
        $__internal_98a38335cf2cc09424a907fd034493b552ac79b6a5e851aa1b13e4600811aedc = $this->env->getExtension("native_profiler");
        $__internal_98a38335cf2cc09424a907fd034493b552ac79b6a5e851aa1b13e4600811aedc->enter($__internal_98a38335cf2cc09424a907fd034493b552ac79b6a5e851aa1b13e4600811aedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98a38335cf2cc09424a907fd034493b552ac79b6a5e851aa1b13e4600811aedc->leave($__internal_98a38335cf2cc09424a907fd034493b552ac79b6a5e851aa1b13e4600811aedc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c999f25672f713d61f3cbf434998a3604b05a528fad029951c425be24be2ad91 = $this->env->getExtension("native_profiler");
        $__internal_c999f25672f713d61f3cbf434998a3604b05a528fad029951c425be24be2ad91->enter($__internal_c999f25672f713d61f3cbf434998a3604b05a528fad029951c425be24be2ad91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c999f25672f713d61f3cbf434998a3604b05a528fad029951c425be24be2ad91->leave($__internal_c999f25672f713d61f3cbf434998a3604b05a528fad029951c425be24be2ad91_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4904ae20e629c65d062d415c441a221429143acf5718fc539b54ceebe9a7da1 = $this->env->getExtension("native_profiler");
        $__internal_b4904ae20e629c65d062d415c441a221429143acf5718fc539b54ceebe9a7da1->enter($__internal_b4904ae20e629c65d062d415c441a221429143acf5718fc539b54ceebe9a7da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b4904ae20e629c65d062d415c441a221429143acf5718fc539b54ceebe9a7da1->leave($__internal_b4904ae20e629c65d062d415c441a221429143acf5718fc539b54ceebe9a7da1_prof);

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
