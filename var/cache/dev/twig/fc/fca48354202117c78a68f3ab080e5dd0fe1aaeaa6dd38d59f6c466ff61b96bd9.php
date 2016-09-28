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
        $__internal_20433ccc0a2dbcefa7e2eec2deaf5da47a15125b4fadd7db611844ebe5f70dab = $this->env->getExtension("native_profiler");
        $__internal_20433ccc0a2dbcefa7e2eec2deaf5da47a15125b4fadd7db611844ebe5f70dab->enter($__internal_20433ccc0a2dbcefa7e2eec2deaf5da47a15125b4fadd7db611844ebe5f70dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20433ccc0a2dbcefa7e2eec2deaf5da47a15125b4fadd7db611844ebe5f70dab->leave($__internal_20433ccc0a2dbcefa7e2eec2deaf5da47a15125b4fadd7db611844ebe5f70dab_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7140fdb0662c0fbd9394bee8bc024cc2ad96932d974238d69325f843c6e16426 = $this->env->getExtension("native_profiler");
        $__internal_7140fdb0662c0fbd9394bee8bc024cc2ad96932d974238d69325f843c6e16426->enter($__internal_7140fdb0662c0fbd9394bee8bc024cc2ad96932d974238d69325f843c6e16426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7140fdb0662c0fbd9394bee8bc024cc2ad96932d974238d69325f843c6e16426->leave($__internal_7140fdb0662c0fbd9394bee8bc024cc2ad96932d974238d69325f843c6e16426_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d8741a204a59459dcbcbf6b8bbba0ad7cfde47e72bf4a69736185692e5f107b4 = $this->env->getExtension("native_profiler");
        $__internal_d8741a204a59459dcbcbf6b8bbba0ad7cfde47e72bf4a69736185692e5f107b4->enter($__internal_d8741a204a59459dcbcbf6b8bbba0ad7cfde47e72bf4a69736185692e5f107b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d8741a204a59459dcbcbf6b8bbba0ad7cfde47e72bf4a69736185692e5f107b4->leave($__internal_d8741a204a59459dcbcbf6b8bbba0ad7cfde47e72bf4a69736185692e5f107b4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7d786fd3d1ca3c79ea3a777117162b08d278e272f32b6046fd0a808e87298384 = $this->env->getExtension("native_profiler");
        $__internal_7d786fd3d1ca3c79ea3a777117162b08d278e272f32b6046fd0a808e87298384->enter($__internal_7d786fd3d1ca3c79ea3a777117162b08d278e272f32b6046fd0a808e87298384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7d786fd3d1ca3c79ea3a777117162b08d278e272f32b6046fd0a808e87298384->leave($__internal_7d786fd3d1ca3c79ea3a777117162b08d278e272f32b6046fd0a808e87298384_prof);

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
