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
        $__internal_2ca25ca078f1f4fd03e7c05d939b33ecab098c28caacd8c5853983f71d16f90a = $this->env->getExtension("native_profiler");
        $__internal_2ca25ca078f1f4fd03e7c05d939b33ecab098c28caacd8c5853983f71d16f90a->enter($__internal_2ca25ca078f1f4fd03e7c05d939b33ecab098c28caacd8c5853983f71d16f90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ca25ca078f1f4fd03e7c05d939b33ecab098c28caacd8c5853983f71d16f90a->leave($__internal_2ca25ca078f1f4fd03e7c05d939b33ecab098c28caacd8c5853983f71d16f90a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_731e169815e297036fd465169cfada28e39a4d84c2b74310a277fef885667fd9 = $this->env->getExtension("native_profiler");
        $__internal_731e169815e297036fd465169cfada28e39a4d84c2b74310a277fef885667fd9->enter($__internal_731e169815e297036fd465169cfada28e39a4d84c2b74310a277fef885667fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_731e169815e297036fd465169cfada28e39a4d84c2b74310a277fef885667fd9->leave($__internal_731e169815e297036fd465169cfada28e39a4d84c2b74310a277fef885667fd9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5c8d73f9667458ef1acba6cf6052282f6f1547c3de7688fff06fb61e9823029c = $this->env->getExtension("native_profiler");
        $__internal_5c8d73f9667458ef1acba6cf6052282f6f1547c3de7688fff06fb61e9823029c->enter($__internal_5c8d73f9667458ef1acba6cf6052282f6f1547c3de7688fff06fb61e9823029c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5c8d73f9667458ef1acba6cf6052282f6f1547c3de7688fff06fb61e9823029c->leave($__internal_5c8d73f9667458ef1acba6cf6052282f6f1547c3de7688fff06fb61e9823029c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a86f39697c31fce13f6a606e874bf1dfa36774dccb45f8ecf50339efcee5ce0a = $this->env->getExtension("native_profiler");
        $__internal_a86f39697c31fce13f6a606e874bf1dfa36774dccb45f8ecf50339efcee5ce0a->enter($__internal_a86f39697c31fce13f6a606e874bf1dfa36774dccb45f8ecf50339efcee5ce0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a86f39697c31fce13f6a606e874bf1dfa36774dccb45f8ecf50339efcee5ce0a->leave($__internal_a86f39697c31fce13f6a606e874bf1dfa36774dccb45f8ecf50339efcee5ce0a_prof);

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
