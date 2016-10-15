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
        $__internal_45dd158281b440b6f7b283efb802a0f15fe7587ac070c0920464f29aa4a88d0e = $this->env->getExtension("native_profiler");
        $__internal_45dd158281b440b6f7b283efb802a0f15fe7587ac070c0920464f29aa4a88d0e->enter($__internal_45dd158281b440b6f7b283efb802a0f15fe7587ac070c0920464f29aa4a88d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45dd158281b440b6f7b283efb802a0f15fe7587ac070c0920464f29aa4a88d0e->leave($__internal_45dd158281b440b6f7b283efb802a0f15fe7587ac070c0920464f29aa4a88d0e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b41ed8b45d33673d5200d877d02228a6b759334b8012b5f3269165631bb1fe13 = $this->env->getExtension("native_profiler");
        $__internal_b41ed8b45d33673d5200d877d02228a6b759334b8012b5f3269165631bb1fe13->enter($__internal_b41ed8b45d33673d5200d877d02228a6b759334b8012b5f3269165631bb1fe13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b41ed8b45d33673d5200d877d02228a6b759334b8012b5f3269165631bb1fe13->leave($__internal_b41ed8b45d33673d5200d877d02228a6b759334b8012b5f3269165631bb1fe13_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_01e7684fa488a971115a151e776a00a9f9de6477bb189fd72df852279a55802d = $this->env->getExtension("native_profiler");
        $__internal_01e7684fa488a971115a151e776a00a9f9de6477bb189fd72df852279a55802d->enter($__internal_01e7684fa488a971115a151e776a00a9f9de6477bb189fd72df852279a55802d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_01e7684fa488a971115a151e776a00a9f9de6477bb189fd72df852279a55802d->leave($__internal_01e7684fa488a971115a151e776a00a9f9de6477bb189fd72df852279a55802d_prof);

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
