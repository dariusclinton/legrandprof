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
        $__internal_0e709eb9d4a9c9328765979e92f3b35086f9fa20f455ca2c68f7942534a4a8c0 = $this->env->getExtension("native_profiler");
        $__internal_0e709eb9d4a9c9328765979e92f3b35086f9fa20f455ca2c68f7942534a4a8c0->enter($__internal_0e709eb9d4a9c9328765979e92f3b35086f9fa20f455ca2c68f7942534a4a8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e709eb9d4a9c9328765979e92f3b35086f9fa20f455ca2c68f7942534a4a8c0->leave($__internal_0e709eb9d4a9c9328765979e92f3b35086f9fa20f455ca2c68f7942534a4a8c0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e5176c329db3a260d965ac64cdc3be7e8394facd84cb821a1fea3fc7442eb6c = $this->env->getExtension("native_profiler");
        $__internal_0e5176c329db3a260d965ac64cdc3be7e8394facd84cb821a1fea3fc7442eb6c->enter($__internal_0e5176c329db3a260d965ac64cdc3be7e8394facd84cb821a1fea3fc7442eb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0e5176c329db3a260d965ac64cdc3be7e8394facd84cb821a1fea3fc7442eb6c->leave($__internal_0e5176c329db3a260d965ac64cdc3be7e8394facd84cb821a1fea3fc7442eb6c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ddb984c238ffa56bbfc0626b143f95eea4f62a0d2d0a0bb8b9c73e89b4977ea2 = $this->env->getExtension("native_profiler");
        $__internal_ddb984c238ffa56bbfc0626b143f95eea4f62a0d2d0a0bb8b9c73e89b4977ea2->enter($__internal_ddb984c238ffa56bbfc0626b143f95eea4f62a0d2d0a0bb8b9c73e89b4977ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ddb984c238ffa56bbfc0626b143f95eea4f62a0d2d0a0bb8b9c73e89b4977ea2->leave($__internal_ddb984c238ffa56bbfc0626b143f95eea4f62a0d2d0a0bb8b9c73e89b4977ea2_prof);

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
