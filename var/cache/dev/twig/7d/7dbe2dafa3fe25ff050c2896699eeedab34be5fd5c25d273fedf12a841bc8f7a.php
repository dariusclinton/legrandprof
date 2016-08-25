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
        $__internal_5bdba3010d3cedf24e37550b8fb6dcd904b2705a8a7cbf64106556888182e250 = $this->env->getExtension("native_profiler");
        $__internal_5bdba3010d3cedf24e37550b8fb6dcd904b2705a8a7cbf64106556888182e250->enter($__internal_5bdba3010d3cedf24e37550b8fb6dcd904b2705a8a7cbf64106556888182e250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bdba3010d3cedf24e37550b8fb6dcd904b2705a8a7cbf64106556888182e250->leave($__internal_5bdba3010d3cedf24e37550b8fb6dcd904b2705a8a7cbf64106556888182e250_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e4253562e83d3c160c168375af9d5bf376c2cafdda42fa79bdaca4a3622596db = $this->env->getExtension("native_profiler");
        $__internal_e4253562e83d3c160c168375af9d5bf376c2cafdda42fa79bdaca4a3622596db->enter($__internal_e4253562e83d3c160c168375af9d5bf376c2cafdda42fa79bdaca4a3622596db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e4253562e83d3c160c168375af9d5bf376c2cafdda42fa79bdaca4a3622596db->leave($__internal_e4253562e83d3c160c168375af9d5bf376c2cafdda42fa79bdaca4a3622596db_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2b405934328e12bebb9d80aa08df50d0142a10fed2455dad22454c599e747bf8 = $this->env->getExtension("native_profiler");
        $__internal_2b405934328e12bebb9d80aa08df50d0142a10fed2455dad22454c599e747bf8->enter($__internal_2b405934328e12bebb9d80aa08df50d0142a10fed2455dad22454c599e747bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2b405934328e12bebb9d80aa08df50d0142a10fed2455dad22454c599e747bf8->leave($__internal_2b405934328e12bebb9d80aa08df50d0142a10fed2455dad22454c599e747bf8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_091b9f434bb88b15ce746c7f248debffa67a9d034ba0fe8ab847bd780d26e0e7 = $this->env->getExtension("native_profiler");
        $__internal_091b9f434bb88b15ce746c7f248debffa67a9d034ba0fe8ab847bd780d26e0e7->enter($__internal_091b9f434bb88b15ce746c7f248debffa67a9d034ba0fe8ab847bd780d26e0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_091b9f434bb88b15ce746c7f248debffa67a9d034ba0fe8ab847bd780d26e0e7->leave($__internal_091b9f434bb88b15ce746c7f248debffa67a9d034ba0fe8ab847bd780d26e0e7_prof);

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
