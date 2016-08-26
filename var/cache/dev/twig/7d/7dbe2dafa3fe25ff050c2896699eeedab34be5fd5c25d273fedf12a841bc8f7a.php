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
        $__internal_0433b320727085675c9eb662b3e53030514fd7dd92841d364b6b213717f81819 = $this->env->getExtension("native_profiler");
        $__internal_0433b320727085675c9eb662b3e53030514fd7dd92841d364b6b213717f81819->enter($__internal_0433b320727085675c9eb662b3e53030514fd7dd92841d364b6b213717f81819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0433b320727085675c9eb662b3e53030514fd7dd92841d364b6b213717f81819->leave($__internal_0433b320727085675c9eb662b3e53030514fd7dd92841d364b6b213717f81819_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f21020d18962bda0879d83f074c42adf904d382a68f374d3c7452b157d7ef771 = $this->env->getExtension("native_profiler");
        $__internal_f21020d18962bda0879d83f074c42adf904d382a68f374d3c7452b157d7ef771->enter($__internal_f21020d18962bda0879d83f074c42adf904d382a68f374d3c7452b157d7ef771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f21020d18962bda0879d83f074c42adf904d382a68f374d3c7452b157d7ef771->leave($__internal_f21020d18962bda0879d83f074c42adf904d382a68f374d3c7452b157d7ef771_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5c17f2c51fe6e4e3720843adc0ebb63eab64d11c917d7550ed93ea4da7db0930 = $this->env->getExtension("native_profiler");
        $__internal_5c17f2c51fe6e4e3720843adc0ebb63eab64d11c917d7550ed93ea4da7db0930->enter($__internal_5c17f2c51fe6e4e3720843adc0ebb63eab64d11c917d7550ed93ea4da7db0930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5c17f2c51fe6e4e3720843adc0ebb63eab64d11c917d7550ed93ea4da7db0930->leave($__internal_5c17f2c51fe6e4e3720843adc0ebb63eab64d11c917d7550ed93ea4da7db0930_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_264d5a6324548f2b1bfd59b3ccf6abe95623a895afed493caef144b7d800e104 = $this->env->getExtension("native_profiler");
        $__internal_264d5a6324548f2b1bfd59b3ccf6abe95623a895afed493caef144b7d800e104->enter($__internal_264d5a6324548f2b1bfd59b3ccf6abe95623a895afed493caef144b7d800e104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_264d5a6324548f2b1bfd59b3ccf6abe95623a895afed493caef144b7d800e104->leave($__internal_264d5a6324548f2b1bfd59b3ccf6abe95623a895afed493caef144b7d800e104_prof);

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
