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
        $__internal_ba82fef40fec3edc7b7d6ac0403999001ad823340a2135b1c8c8535641f9caee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba82fef40fec3edc7b7d6ac0403999001ad823340a2135b1c8c8535641f9caee->enter($__internal_ba82fef40fec3edc7b7d6ac0403999001ad823340a2135b1c8c8535641f9caee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba82fef40fec3edc7b7d6ac0403999001ad823340a2135b1c8c8535641f9caee->leave($__internal_ba82fef40fec3edc7b7d6ac0403999001ad823340a2135b1c8c8535641f9caee_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_95fcf3d04426da1a8c6e33021bffbb6c05f453bf87a2141594f80f8ddbeda3c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95fcf3d04426da1a8c6e33021bffbb6c05f453bf87a2141594f80f8ddbeda3c9->enter($__internal_95fcf3d04426da1a8c6e33021bffbb6c05f453bf87a2141594f80f8ddbeda3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_95fcf3d04426da1a8c6e33021bffbb6c05f453bf87a2141594f80f8ddbeda3c9->leave($__internal_95fcf3d04426da1a8c6e33021bffbb6c05f453bf87a2141594f80f8ddbeda3c9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_79569bf366bf6a24bf2c729c6b43239a54f9adb3623d2bac511a5f2913c82d5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79569bf366bf6a24bf2c729c6b43239a54f9adb3623d2bac511a5f2913c82d5c->enter($__internal_79569bf366bf6a24bf2c729c6b43239a54f9adb3623d2bac511a5f2913c82d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_79569bf366bf6a24bf2c729c6b43239a54f9adb3623d2bac511a5f2913c82d5c->leave($__internal_79569bf366bf6a24bf2c729c6b43239a54f9adb3623d2bac511a5f2913c82d5c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_168786f805061630f7b0924b3dbb41b884b39f6d09ad762d6972283d989e9f42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_168786f805061630f7b0924b3dbb41b884b39f6d09ad762d6972283d989e9f42->enter($__internal_168786f805061630f7b0924b3dbb41b884b39f6d09ad762d6972283d989e9f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_168786f805061630f7b0924b3dbb41b884b39f6d09ad762d6972283d989e9f42->leave($__internal_168786f805061630f7b0924b3dbb41b884b39f6d09ad762d6972283d989e9f42_prof);

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
