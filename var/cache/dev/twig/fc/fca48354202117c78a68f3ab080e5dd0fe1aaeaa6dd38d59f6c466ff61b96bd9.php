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
        $__internal_3c72661edec233499e56399337fb131b92e625b57df9ce4c9a7a9f642b1034c4 = $this->env->getExtension("native_profiler");
        $__internal_3c72661edec233499e56399337fb131b92e625b57df9ce4c9a7a9f642b1034c4->enter($__internal_3c72661edec233499e56399337fb131b92e625b57df9ce4c9a7a9f642b1034c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c72661edec233499e56399337fb131b92e625b57df9ce4c9a7a9f642b1034c4->leave($__internal_3c72661edec233499e56399337fb131b92e625b57df9ce4c9a7a9f642b1034c4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_41136772704576fc2276fb4aec38e7e9db49f138a90342e84a6b20cdd6415f16 = $this->env->getExtension("native_profiler");
        $__internal_41136772704576fc2276fb4aec38e7e9db49f138a90342e84a6b20cdd6415f16->enter($__internal_41136772704576fc2276fb4aec38e7e9db49f138a90342e84a6b20cdd6415f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_41136772704576fc2276fb4aec38e7e9db49f138a90342e84a6b20cdd6415f16->leave($__internal_41136772704576fc2276fb4aec38e7e9db49f138a90342e84a6b20cdd6415f16_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4bc071c6576819d9a258bd154c16d5010fb009e092191c0953a6577cf915b248 = $this->env->getExtension("native_profiler");
        $__internal_4bc071c6576819d9a258bd154c16d5010fb009e092191c0953a6577cf915b248->enter($__internal_4bc071c6576819d9a258bd154c16d5010fb009e092191c0953a6577cf915b248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4bc071c6576819d9a258bd154c16d5010fb009e092191c0953a6577cf915b248->leave($__internal_4bc071c6576819d9a258bd154c16d5010fb009e092191c0953a6577cf915b248_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_91112c2d26dfcf620bfac9f37b455a841a7b2e8be564e729ee1ab65e8a4a83dc = $this->env->getExtension("native_profiler");
        $__internal_91112c2d26dfcf620bfac9f37b455a841a7b2e8be564e729ee1ab65e8a4a83dc->enter($__internal_91112c2d26dfcf620bfac9f37b455a841a7b2e8be564e729ee1ab65e8a4a83dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_91112c2d26dfcf620bfac9f37b455a841a7b2e8be564e729ee1ab65e8a4a83dc->leave($__internal_91112c2d26dfcf620bfac9f37b455a841a7b2e8be564e729ee1ab65e8a4a83dc_prof);

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
