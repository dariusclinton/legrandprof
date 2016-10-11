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
        $__internal_b6b4c04935736e4a9bfedb8ca714409233ff5a7a3684c043ecdd31d2d9690499 = $this->env->getExtension("native_profiler");
        $__internal_b6b4c04935736e4a9bfedb8ca714409233ff5a7a3684c043ecdd31d2d9690499->enter($__internal_b6b4c04935736e4a9bfedb8ca714409233ff5a7a3684c043ecdd31d2d9690499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6b4c04935736e4a9bfedb8ca714409233ff5a7a3684c043ecdd31d2d9690499->leave($__internal_b6b4c04935736e4a9bfedb8ca714409233ff5a7a3684c043ecdd31d2d9690499_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e55f4893e7b1d5d6b159f8297313951bee1d4c24023975b8c93ac8f1c2f51d66 = $this->env->getExtension("native_profiler");
        $__internal_e55f4893e7b1d5d6b159f8297313951bee1d4c24023975b8c93ac8f1c2f51d66->enter($__internal_e55f4893e7b1d5d6b159f8297313951bee1d4c24023975b8c93ac8f1c2f51d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e55f4893e7b1d5d6b159f8297313951bee1d4c24023975b8c93ac8f1c2f51d66->leave($__internal_e55f4893e7b1d5d6b159f8297313951bee1d4c24023975b8c93ac8f1c2f51d66_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e1d561fbaba386b98c74b83d04559ea40ce2b60d1b5827bbeb47f72474b24aa8 = $this->env->getExtension("native_profiler");
        $__internal_e1d561fbaba386b98c74b83d04559ea40ce2b60d1b5827bbeb47f72474b24aa8->enter($__internal_e1d561fbaba386b98c74b83d04559ea40ce2b60d1b5827bbeb47f72474b24aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e1d561fbaba386b98c74b83d04559ea40ce2b60d1b5827bbeb47f72474b24aa8->leave($__internal_e1d561fbaba386b98c74b83d04559ea40ce2b60d1b5827bbeb47f72474b24aa8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3e50cc0185f5cb60d57154585e9461c1f7908e21edfe59b13c0aee4fe6c77f58 = $this->env->getExtension("native_profiler");
        $__internal_3e50cc0185f5cb60d57154585e9461c1f7908e21edfe59b13c0aee4fe6c77f58->enter($__internal_3e50cc0185f5cb60d57154585e9461c1f7908e21edfe59b13c0aee4fe6c77f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_3e50cc0185f5cb60d57154585e9461c1f7908e21edfe59b13c0aee4fe6c77f58->leave($__internal_3e50cc0185f5cb60d57154585e9461c1f7908e21edfe59b13c0aee4fe6c77f58_prof);

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
