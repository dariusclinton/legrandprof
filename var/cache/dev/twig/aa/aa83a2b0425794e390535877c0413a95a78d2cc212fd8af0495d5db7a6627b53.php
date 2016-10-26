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
        $__internal_0b852fa089d8d1e283454b84be85fd64ed53d39557e020ce6954717ece88b2c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b852fa089d8d1e283454b84be85fd64ed53d39557e020ce6954717ece88b2c0->enter($__internal_0b852fa089d8d1e283454b84be85fd64ed53d39557e020ce6954717ece88b2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b852fa089d8d1e283454b84be85fd64ed53d39557e020ce6954717ece88b2c0->leave($__internal_0b852fa089d8d1e283454b84be85fd64ed53d39557e020ce6954717ece88b2c0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_53de0a2885b2ed268206bbaacfa73df5cc171722efbae238f8b3c7de9cc04d60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53de0a2885b2ed268206bbaacfa73df5cc171722efbae238f8b3c7de9cc04d60->enter($__internal_53de0a2885b2ed268206bbaacfa73df5cc171722efbae238f8b3c7de9cc04d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_53de0a2885b2ed268206bbaacfa73df5cc171722efbae238f8b3c7de9cc04d60->leave($__internal_53de0a2885b2ed268206bbaacfa73df5cc171722efbae238f8b3c7de9cc04d60_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3b15d897d21c47590c76860c2d51b9a40b209e3c81090355a157981c863d520d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b15d897d21c47590c76860c2d51b9a40b209e3c81090355a157981c863d520d->enter($__internal_3b15d897d21c47590c76860c2d51b9a40b209e3c81090355a157981c863d520d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3b15d897d21c47590c76860c2d51b9a40b209e3c81090355a157981c863d520d->leave($__internal_3b15d897d21c47590c76860c2d51b9a40b209e3c81090355a157981c863d520d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1fc2c985e1214f570c6075de3f0b5a1ed6c43f92cc85e7ccf05f03db3ff99daa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fc2c985e1214f570c6075de3f0b5a1ed6c43f92cc85e7ccf05f03db3ff99daa->enter($__internal_1fc2c985e1214f570c6075de3f0b5a1ed6c43f92cc85e7ccf05f03db3ff99daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1fc2c985e1214f570c6075de3f0b5a1ed6c43f92cc85e7ccf05f03db3ff99daa->leave($__internal_1fc2c985e1214f570c6075de3f0b5a1ed6c43f92cc85e7ccf05f03db3ff99daa_prof);

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
