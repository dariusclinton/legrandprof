<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_49db1122e7348e1513708e7dc0fd2463d5462f4edcdfb18c9460de433a079966 extends Twig_Template
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
        $__internal_447cab73b2a04c9fdc021624315cc22d330ad77326a71d4da2da9e9fdf187873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_447cab73b2a04c9fdc021624315cc22d330ad77326a71d4da2da9e9fdf187873->enter($__internal_447cab73b2a04c9fdc021624315cc22d330ad77326a71d4da2da9e9fdf187873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_447cab73b2a04c9fdc021624315cc22d330ad77326a71d4da2da9e9fdf187873->leave($__internal_447cab73b2a04c9fdc021624315cc22d330ad77326a71d4da2da9e9fdf187873_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_007d2959035bf5febd5640c99198d2f7de8c8b13982ae96e3c97c2592420ee4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_007d2959035bf5febd5640c99198d2f7de8c8b13982ae96e3c97c2592420ee4a->enter($__internal_007d2959035bf5febd5640c99198d2f7de8c8b13982ae96e3c97c2592420ee4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_007d2959035bf5febd5640c99198d2f7de8c8b13982ae96e3c97c2592420ee4a->leave($__internal_007d2959035bf5febd5640c99198d2f7de8c8b13982ae96e3c97c2592420ee4a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8ead25b0bb5a8ac7f943af3cb0fa1bcd3cc95042a47c7f80162056ef4efed46e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ead25b0bb5a8ac7f943af3cb0fa1bcd3cc95042a47c7f80162056ef4efed46e->enter($__internal_8ead25b0bb5a8ac7f943af3cb0fa1bcd3cc95042a47c7f80162056ef4efed46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8ead25b0bb5a8ac7f943af3cb0fa1bcd3cc95042a47c7f80162056ef4efed46e->leave($__internal_8ead25b0bb5a8ac7f943af3cb0fa1bcd3cc95042a47c7f80162056ef4efed46e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b40f0af8e07b735f0009542acd031d57f7e51ac6aca874198a131e160d6342a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b40f0af8e07b735f0009542acd031d57f7e51ac6aca874198a131e160d6342a3->enter($__internal_b40f0af8e07b735f0009542acd031d57f7e51ac6aca874198a131e160d6342a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b40f0af8e07b735f0009542acd031d57f7e51ac6aca874198a131e160d6342a3->leave($__internal_b40f0af8e07b735f0009542acd031d57f7e51ac6aca874198a131e160d6342a3_prof);

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
