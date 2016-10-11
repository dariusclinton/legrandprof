<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_f3446a0d7a9ba67f2180fcfc606e57efd00b990511ba88de04fee30b939eb745 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22e2dd100e780cf03b9668ce3f7747e5a2369d656384213c90f865868c3b2a37 = $this->env->getExtension("native_profiler");
        $__internal_22e2dd100e780cf03b9668ce3f7747e5a2369d656384213c90f865868c3b2a37->enter($__internal_22e2dd100e780cf03b9668ce3f7747e5a2369d656384213c90f865868c3b2a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22e2dd100e780cf03b9668ce3f7747e5a2369d656384213c90f865868c3b2a37->leave($__internal_22e2dd100e780cf03b9668ce3f7747e5a2369d656384213c90f865868c3b2a37_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ce03389269b6bdbf89c2f99a6aee9cba8faccf81f3f193910bcdb12b94fa6d1c = $this->env->getExtension("native_profiler");
        $__internal_ce03389269b6bdbf89c2f99a6aee9cba8faccf81f3f193910bcdb12b94fa6d1c->enter($__internal_ce03389269b6bdbf89c2f99a6aee9cba8faccf81f3f193910bcdb12b94fa6d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ce03389269b6bdbf89c2f99a6aee9cba8faccf81f3f193910bcdb12b94fa6d1c->leave($__internal_ce03389269b6bdbf89c2f99a6aee9cba8faccf81f3f193910bcdb12b94fa6d1c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_16b8509265e7613313ba4f17d5f82342fad6b634676549b2c6f762d889af8f5a = $this->env->getExtension("native_profiler");
        $__internal_16b8509265e7613313ba4f17d5f82342fad6b634676549b2c6f762d889af8f5a->enter($__internal_16b8509265e7613313ba4f17d5f82342fad6b634676549b2c6f762d889af8f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_16b8509265e7613313ba4f17d5f82342fad6b634676549b2c6f762d889af8f5a->leave($__internal_16b8509265e7613313ba4f17d5f82342fad6b634676549b2c6f762d889af8f5a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f909b6ad4475e2939bddccf01e14db323e6aea3abfc4bf55b060ecb571755e66 = $this->env->getExtension("native_profiler");
        $__internal_f909b6ad4475e2939bddccf01e14db323e6aea3abfc4bf55b060ecb571755e66->enter($__internal_f909b6ad4475e2939bddccf01e14db323e6aea3abfc4bf55b060ecb571755e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f909b6ad4475e2939bddccf01e14db323e6aea3abfc4bf55b060ecb571755e66->leave($__internal_f909b6ad4475e2939bddccf01e14db323e6aea3abfc4bf55b060ecb571755e66_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
