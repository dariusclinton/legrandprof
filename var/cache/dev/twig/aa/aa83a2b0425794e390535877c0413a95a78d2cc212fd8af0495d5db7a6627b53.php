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
        $__internal_13ad13f6811cf244637f74ac0aead23080dfdb632a466f6bb8a3e0f4932bc97c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13ad13f6811cf244637f74ac0aead23080dfdb632a466f6bb8a3e0f4932bc97c->enter($__internal_13ad13f6811cf244637f74ac0aead23080dfdb632a466f6bb8a3e0f4932bc97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13ad13f6811cf244637f74ac0aead23080dfdb632a466f6bb8a3e0f4932bc97c->leave($__internal_13ad13f6811cf244637f74ac0aead23080dfdb632a466f6bb8a3e0f4932bc97c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6c8a23db20aab98821660d6295d16333506207c6d74c0ebe8ff0d488bb5e0363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c8a23db20aab98821660d6295d16333506207c6d74c0ebe8ff0d488bb5e0363->enter($__internal_6c8a23db20aab98821660d6295d16333506207c6d74c0ebe8ff0d488bb5e0363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6c8a23db20aab98821660d6295d16333506207c6d74c0ebe8ff0d488bb5e0363->leave($__internal_6c8a23db20aab98821660d6295d16333506207c6d74c0ebe8ff0d488bb5e0363_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_737c7dd93ad3421850ecbc38e475c0dd5ce9d9f845d5273bc8abacd0a0bdfe60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_737c7dd93ad3421850ecbc38e475c0dd5ce9d9f845d5273bc8abacd0a0bdfe60->enter($__internal_737c7dd93ad3421850ecbc38e475c0dd5ce9d9f845d5273bc8abacd0a0bdfe60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_737c7dd93ad3421850ecbc38e475c0dd5ce9d9f845d5273bc8abacd0a0bdfe60->leave($__internal_737c7dd93ad3421850ecbc38e475c0dd5ce9d9f845d5273bc8abacd0a0bdfe60_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bd731f9a934e9b0f827633d26ace6be23384ab823b43dce3f3332548816bb43f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd731f9a934e9b0f827633d26ace6be23384ab823b43dce3f3332548816bb43f->enter($__internal_bd731f9a934e9b0f827633d26ace6be23384ab823b43dce3f3332548816bb43f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bd731f9a934e9b0f827633d26ace6be23384ab823b43dce3f3332548816bb43f->leave($__internal_bd731f9a934e9b0f827633d26ace6be23384ab823b43dce3f3332548816bb43f_prof);

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
