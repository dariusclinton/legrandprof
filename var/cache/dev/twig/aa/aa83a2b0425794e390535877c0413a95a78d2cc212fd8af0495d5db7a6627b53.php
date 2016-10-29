<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_9742eb0bd4cf956a8a841df22ba3913725fc3159d3b1dcb35e90ef8dfe1e1174 extends Twig_Template
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
        $__internal_57a0affd4078bb809d8e1182ebcc067f71c5be3de94d47b743846458c613c34a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57a0affd4078bb809d8e1182ebcc067f71c5be3de94d47b743846458c613c34a->enter($__internal_57a0affd4078bb809d8e1182ebcc067f71c5be3de94d47b743846458c613c34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57a0affd4078bb809d8e1182ebcc067f71c5be3de94d47b743846458c613c34a->leave($__internal_57a0affd4078bb809d8e1182ebcc067f71c5be3de94d47b743846458c613c34a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ec1bbfcb8112dce85587f25b0cd3c7b11aa13175918e761854496695f3e90e38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec1bbfcb8112dce85587f25b0cd3c7b11aa13175918e761854496695f3e90e38->enter($__internal_ec1bbfcb8112dce85587f25b0cd3c7b11aa13175918e761854496695f3e90e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ec1bbfcb8112dce85587f25b0cd3c7b11aa13175918e761854496695f3e90e38->leave($__internal_ec1bbfcb8112dce85587f25b0cd3c7b11aa13175918e761854496695f3e90e38_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d56df870c2b67cbe39a7b26a1f65a9411f8b0a8cdfdaa762014b551119091947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d56df870c2b67cbe39a7b26a1f65a9411f8b0a8cdfdaa762014b551119091947->enter($__internal_d56df870c2b67cbe39a7b26a1f65a9411f8b0a8cdfdaa762014b551119091947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d56df870c2b67cbe39a7b26a1f65a9411f8b0a8cdfdaa762014b551119091947->leave($__internal_d56df870c2b67cbe39a7b26a1f65a9411f8b0a8cdfdaa762014b551119091947_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cb8eb6783e99ba97e239575533729f0aeccd11e7a8d0710a5d4c7f81c1c8f5af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb8eb6783e99ba97e239575533729f0aeccd11e7a8d0710a5d4c7f81c1c8f5af->enter($__internal_cb8eb6783e99ba97e239575533729f0aeccd11e7a8d0710a5d4c7f81c1c8f5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cb8eb6783e99ba97e239575533729f0aeccd11e7a8d0710a5d4c7f81c1c8f5af->leave($__internal_cb8eb6783e99ba97e239575533729f0aeccd11e7a8d0710a5d4c7f81c1c8f5af_prof);

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
