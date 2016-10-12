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
        $__internal_9fa8751c9820b550923c07fc411f9b716a099371f390ab2c20407c494575f706 = $this->env->getExtension("native_profiler");
        $__internal_9fa8751c9820b550923c07fc411f9b716a099371f390ab2c20407c494575f706->enter($__internal_9fa8751c9820b550923c07fc411f9b716a099371f390ab2c20407c494575f706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fa8751c9820b550923c07fc411f9b716a099371f390ab2c20407c494575f706->leave($__internal_9fa8751c9820b550923c07fc411f9b716a099371f390ab2c20407c494575f706_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e4330d29dc4370976770fa8312e743e89651bd9bcfa41b8a09126131ab097caa = $this->env->getExtension("native_profiler");
        $__internal_e4330d29dc4370976770fa8312e743e89651bd9bcfa41b8a09126131ab097caa->enter($__internal_e4330d29dc4370976770fa8312e743e89651bd9bcfa41b8a09126131ab097caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e4330d29dc4370976770fa8312e743e89651bd9bcfa41b8a09126131ab097caa->leave($__internal_e4330d29dc4370976770fa8312e743e89651bd9bcfa41b8a09126131ab097caa_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_377fe5f2f23f90ee4f26331dd7c1d952756a9fdc337970f6d42a59ff754930dd = $this->env->getExtension("native_profiler");
        $__internal_377fe5f2f23f90ee4f26331dd7c1d952756a9fdc337970f6d42a59ff754930dd->enter($__internal_377fe5f2f23f90ee4f26331dd7c1d952756a9fdc337970f6d42a59ff754930dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_377fe5f2f23f90ee4f26331dd7c1d952756a9fdc337970f6d42a59ff754930dd->leave($__internal_377fe5f2f23f90ee4f26331dd7c1d952756a9fdc337970f6d42a59ff754930dd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b119c4535f904d0849f63d08028ec47d3bcc2ae714c210eef70d5a8b18387dbc = $this->env->getExtension("native_profiler");
        $__internal_b119c4535f904d0849f63d08028ec47d3bcc2ae714c210eef70d5a8b18387dbc->enter($__internal_b119c4535f904d0849f63d08028ec47d3bcc2ae714c210eef70d5a8b18387dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b119c4535f904d0849f63d08028ec47d3bcc2ae714c210eef70d5a8b18387dbc->leave($__internal_b119c4535f904d0849f63d08028ec47d3bcc2ae714c210eef70d5a8b18387dbc_prof);

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
