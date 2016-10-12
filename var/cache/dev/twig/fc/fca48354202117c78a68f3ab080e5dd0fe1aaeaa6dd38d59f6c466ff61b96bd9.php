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
        $__internal_03c5f5bbdbc32bec4a98ce148db3440707c646ce337b140072d117c968595761 = $this->env->getExtension("native_profiler");
        $__internal_03c5f5bbdbc32bec4a98ce148db3440707c646ce337b140072d117c968595761->enter($__internal_03c5f5bbdbc32bec4a98ce148db3440707c646ce337b140072d117c968595761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03c5f5bbdbc32bec4a98ce148db3440707c646ce337b140072d117c968595761->leave($__internal_03c5f5bbdbc32bec4a98ce148db3440707c646ce337b140072d117c968595761_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4e5b5805dac7d98d9c9f6126273e226df7ac5d201704120dea12459449adcf18 = $this->env->getExtension("native_profiler");
        $__internal_4e5b5805dac7d98d9c9f6126273e226df7ac5d201704120dea12459449adcf18->enter($__internal_4e5b5805dac7d98d9c9f6126273e226df7ac5d201704120dea12459449adcf18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4e5b5805dac7d98d9c9f6126273e226df7ac5d201704120dea12459449adcf18->leave($__internal_4e5b5805dac7d98d9c9f6126273e226df7ac5d201704120dea12459449adcf18_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_22c41cee8fb68492ecefbe22d270444476d3fcf855115e2b95aaa85b112e5a0b = $this->env->getExtension("native_profiler");
        $__internal_22c41cee8fb68492ecefbe22d270444476d3fcf855115e2b95aaa85b112e5a0b->enter($__internal_22c41cee8fb68492ecefbe22d270444476d3fcf855115e2b95aaa85b112e5a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_22c41cee8fb68492ecefbe22d270444476d3fcf855115e2b95aaa85b112e5a0b->leave($__internal_22c41cee8fb68492ecefbe22d270444476d3fcf855115e2b95aaa85b112e5a0b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_01bc4dc2a395a4c0c00140ace4ad968ed00b4a852a10e64037f1da1e2040c25a = $this->env->getExtension("native_profiler");
        $__internal_01bc4dc2a395a4c0c00140ace4ad968ed00b4a852a10e64037f1da1e2040c25a->enter($__internal_01bc4dc2a395a4c0c00140ace4ad968ed00b4a852a10e64037f1da1e2040c25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_01bc4dc2a395a4c0c00140ace4ad968ed00b4a852a10e64037f1da1e2040c25a->leave($__internal_01bc4dc2a395a4c0c00140ace4ad968ed00b4a852a10e64037f1da1e2040c25a_prof);

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
