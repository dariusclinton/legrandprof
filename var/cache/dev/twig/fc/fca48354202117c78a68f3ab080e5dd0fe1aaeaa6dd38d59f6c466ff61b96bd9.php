<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f3446a0d7a9ba67f2180fcfc606e57efd00b990511ba88de04fee30b939eb745 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_f248e9023a201229d51a9b297840c2ed421f6469aef2ff733e975feea2bffd3e = $this->env->getExtension("native_profiler");
        $__internal_f248e9023a201229d51a9b297840c2ed421f6469aef2ff733e975feea2bffd3e->enter($__internal_f248e9023a201229d51a9b297840c2ed421f6469aef2ff733e975feea2bffd3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f248e9023a201229d51a9b297840c2ed421f6469aef2ff733e975feea2bffd3e->leave($__internal_f248e9023a201229d51a9b297840c2ed421f6469aef2ff733e975feea2bffd3e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6517d2479e420b7bdf13dbea8dc30d0c88b666bc12559e15e9b389b631b0ff82 = $this->env->getExtension("native_profiler");
        $__internal_6517d2479e420b7bdf13dbea8dc30d0c88b666bc12559e15e9b389b631b0ff82->enter($__internal_6517d2479e420b7bdf13dbea8dc30d0c88b666bc12559e15e9b389b631b0ff82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6517d2479e420b7bdf13dbea8dc30d0c88b666bc12559e15e9b389b631b0ff82->leave($__internal_6517d2479e420b7bdf13dbea8dc30d0c88b666bc12559e15e9b389b631b0ff82_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6fe90d9ab8b0a28b544231a86e52fe6cb1c73c629f724b3517aa212f6691be79 = $this->env->getExtension("native_profiler");
        $__internal_6fe90d9ab8b0a28b544231a86e52fe6cb1c73c629f724b3517aa212f6691be79->enter($__internal_6fe90d9ab8b0a28b544231a86e52fe6cb1c73c629f724b3517aa212f6691be79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6fe90d9ab8b0a28b544231a86e52fe6cb1c73c629f724b3517aa212f6691be79->leave($__internal_6fe90d9ab8b0a28b544231a86e52fe6cb1c73c629f724b3517aa212f6691be79_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3bb15815783822464a422ef7614fd4b79034594d266028128f6098b08b2d2f95 = $this->env->getExtension("native_profiler");
        $__internal_3bb15815783822464a422ef7614fd4b79034594d266028128f6098b08b2d2f95->enter($__internal_3bb15815783822464a422ef7614fd4b79034594d266028128f6098b08b2d2f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3bb15815783822464a422ef7614fd4b79034594d266028128f6098b08b2d2f95->leave($__internal_3bb15815783822464a422ef7614fd4b79034594d266028128f6098b08b2d2f95_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
