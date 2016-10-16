<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_4f602556d35acb587e9d50d669419c62f2470a41fc023d784b2b45e7fc4a85c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_2ea8b8a8c06a8b022de44485e4c89ac0b03ca6841050f5a12135b9eb0307fbf2 = $this->env->getExtension("native_profiler");
        $__internal_2ea8b8a8c06a8b022de44485e4c89ac0b03ca6841050f5a12135b9eb0307fbf2->enter($__internal_2ea8b8a8c06a8b022de44485e4c89ac0b03ca6841050f5a12135b9eb0307fbf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ea8b8a8c06a8b022de44485e4c89ac0b03ca6841050f5a12135b9eb0307fbf2->leave($__internal_2ea8b8a8c06a8b022de44485e4c89ac0b03ca6841050f5a12135b9eb0307fbf2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_37614a979bf5aad1df7eff76ff97fcdc39907e1c6d2edd6e33cefc3bb10aef04 = $this->env->getExtension("native_profiler");
        $__internal_37614a979bf5aad1df7eff76ff97fcdc39907e1c6d2edd6e33cefc3bb10aef04->enter($__internal_37614a979bf5aad1df7eff76ff97fcdc39907e1c6d2edd6e33cefc3bb10aef04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_37614a979bf5aad1df7eff76ff97fcdc39907e1c6d2edd6e33cefc3bb10aef04->leave($__internal_37614a979bf5aad1df7eff76ff97fcdc39907e1c6d2edd6e33cefc3bb10aef04_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_909f200337e57d139bd1910d5083df006b4087457e5a12a0e4f59b0b3d6b4959 = $this->env->getExtension("native_profiler");
        $__internal_909f200337e57d139bd1910d5083df006b4087457e5a12a0e4f59b0b3d6b4959->enter($__internal_909f200337e57d139bd1910d5083df006b4087457e5a12a0e4f59b0b3d6b4959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_909f200337e57d139bd1910d5083df006b4087457e5a12a0e4f59b0b3d6b4959->leave($__internal_909f200337e57d139bd1910d5083df006b4087457e5a12a0e4f59b0b3d6b4959_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_09598d309629a6c3203db7bc7a770dfaec498471a03dbc6fe9eb9f59b1ea113c = $this->env->getExtension("native_profiler");
        $__internal_09598d309629a6c3203db7bc7a770dfaec498471a03dbc6fe9eb9f59b1ea113c->enter($__internal_09598d309629a6c3203db7bc7a770dfaec498471a03dbc6fe9eb9f59b1ea113c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_09598d309629a6c3203db7bc7a770dfaec498471a03dbc6fe9eb9f59b1ea113c->leave($__internal_09598d309629a6c3203db7bc7a770dfaec498471a03dbc6fe9eb9f59b1ea113c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
