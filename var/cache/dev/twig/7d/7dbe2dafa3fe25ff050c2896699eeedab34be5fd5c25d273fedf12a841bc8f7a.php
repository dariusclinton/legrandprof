<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c540542da6661f22dd959f9bc2b595fd4127ea0ddbcbb9066e46ee2b63dc1e75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_9d589135f6da9291eb6ff1bb259cf952f77640bd071c6290ee0692e756ab38d8 = $this->env->getExtension("native_profiler");
        $__internal_9d589135f6da9291eb6ff1bb259cf952f77640bd071c6290ee0692e756ab38d8->enter($__internal_9d589135f6da9291eb6ff1bb259cf952f77640bd071c6290ee0692e756ab38d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d589135f6da9291eb6ff1bb259cf952f77640bd071c6290ee0692e756ab38d8->leave($__internal_9d589135f6da9291eb6ff1bb259cf952f77640bd071c6290ee0692e756ab38d8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3e29e32085657879898c872c1740ebf6c7c321919104ef44d60cd8f5a7adf766 = $this->env->getExtension("native_profiler");
        $__internal_3e29e32085657879898c872c1740ebf6c7c321919104ef44d60cd8f5a7adf766->enter($__internal_3e29e32085657879898c872c1740ebf6c7c321919104ef44d60cd8f5a7adf766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3e29e32085657879898c872c1740ebf6c7c321919104ef44d60cd8f5a7adf766->leave($__internal_3e29e32085657879898c872c1740ebf6c7c321919104ef44d60cd8f5a7adf766_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a9afe0cd609547c4e1cb2730bd8e6aae9de6af388cc493b1d05a0b8382306d5a = $this->env->getExtension("native_profiler");
        $__internal_a9afe0cd609547c4e1cb2730bd8e6aae9de6af388cc493b1d05a0b8382306d5a->enter($__internal_a9afe0cd609547c4e1cb2730bd8e6aae9de6af388cc493b1d05a0b8382306d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a9afe0cd609547c4e1cb2730bd8e6aae9de6af388cc493b1d05a0b8382306d5a->leave($__internal_a9afe0cd609547c4e1cb2730bd8e6aae9de6af388cc493b1d05a0b8382306d5a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_67060088507351a6a18b4a8b62afd023e097eade295476efd540e4a8d6cdc63a = $this->env->getExtension("native_profiler");
        $__internal_67060088507351a6a18b4a8b62afd023e097eade295476efd540e4a8d6cdc63a->enter($__internal_67060088507351a6a18b4a8b62afd023e097eade295476efd540e4a8d6cdc63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_67060088507351a6a18b4a8b62afd023e097eade295476efd540e4a8d6cdc63a->leave($__internal_67060088507351a6a18b4a8b62afd023e097eade295476efd540e4a8d6cdc63a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
