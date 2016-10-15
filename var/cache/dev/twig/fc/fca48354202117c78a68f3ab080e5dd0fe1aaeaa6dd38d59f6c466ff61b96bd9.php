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
        $__internal_c4b2f04537161c600286daf41f894014838f4fb5c326ba5d0ac1fa01c4357ea9 = $this->env->getExtension("native_profiler");
        $__internal_c4b2f04537161c600286daf41f894014838f4fb5c326ba5d0ac1fa01c4357ea9->enter($__internal_c4b2f04537161c600286daf41f894014838f4fb5c326ba5d0ac1fa01c4357ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4b2f04537161c600286daf41f894014838f4fb5c326ba5d0ac1fa01c4357ea9->leave($__internal_c4b2f04537161c600286daf41f894014838f4fb5c326ba5d0ac1fa01c4357ea9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_95717638a46fa531b30767f86467f3d59679296e8fd2752addac07bbd48d24df = $this->env->getExtension("native_profiler");
        $__internal_95717638a46fa531b30767f86467f3d59679296e8fd2752addac07bbd48d24df->enter($__internal_95717638a46fa531b30767f86467f3d59679296e8fd2752addac07bbd48d24df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_95717638a46fa531b30767f86467f3d59679296e8fd2752addac07bbd48d24df->leave($__internal_95717638a46fa531b30767f86467f3d59679296e8fd2752addac07bbd48d24df_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b34b5be8b5cfd0d8ca8d702b3748c714048b9f4c013beddf68c6c6be408b7da3 = $this->env->getExtension("native_profiler");
        $__internal_b34b5be8b5cfd0d8ca8d702b3748c714048b9f4c013beddf68c6c6be408b7da3->enter($__internal_b34b5be8b5cfd0d8ca8d702b3748c714048b9f4c013beddf68c6c6be408b7da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b34b5be8b5cfd0d8ca8d702b3748c714048b9f4c013beddf68c6c6be408b7da3->leave($__internal_b34b5be8b5cfd0d8ca8d702b3748c714048b9f4c013beddf68c6c6be408b7da3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e3d194521e993820424ba0243b464c9e9ecb09ebc5f92ea7ff69805e0c123b64 = $this->env->getExtension("native_profiler");
        $__internal_e3d194521e993820424ba0243b464c9e9ecb09ebc5f92ea7ff69805e0c123b64->enter($__internal_e3d194521e993820424ba0243b464c9e9ecb09ebc5f92ea7ff69805e0c123b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e3d194521e993820424ba0243b464c9e9ecb09ebc5f92ea7ff69805e0c123b64->leave($__internal_e3d194521e993820424ba0243b464c9e9ecb09ebc5f92ea7ff69805e0c123b64_prof);

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
