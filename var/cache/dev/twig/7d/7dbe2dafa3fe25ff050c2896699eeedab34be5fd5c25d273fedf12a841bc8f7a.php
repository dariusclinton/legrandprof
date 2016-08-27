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
        $__internal_78d9194ec96316a853e87e86f3739ecfe81b1abee1a54b1c78036a3eb894b493 = $this->env->getExtension("native_profiler");
        $__internal_78d9194ec96316a853e87e86f3739ecfe81b1abee1a54b1c78036a3eb894b493->enter($__internal_78d9194ec96316a853e87e86f3739ecfe81b1abee1a54b1c78036a3eb894b493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78d9194ec96316a853e87e86f3739ecfe81b1abee1a54b1c78036a3eb894b493->leave($__internal_78d9194ec96316a853e87e86f3739ecfe81b1abee1a54b1c78036a3eb894b493_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_30e6b86a7daba884d3e7fa28e54703e9c0492024f40c0ef6869759cd44e9da4c = $this->env->getExtension("native_profiler");
        $__internal_30e6b86a7daba884d3e7fa28e54703e9c0492024f40c0ef6869759cd44e9da4c->enter($__internal_30e6b86a7daba884d3e7fa28e54703e9c0492024f40c0ef6869759cd44e9da4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_30e6b86a7daba884d3e7fa28e54703e9c0492024f40c0ef6869759cd44e9da4c->leave($__internal_30e6b86a7daba884d3e7fa28e54703e9c0492024f40c0ef6869759cd44e9da4c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_07cfd4f3fb748e553951a0ee8093c0850e7a5e398b197f7d4050f3a93cece721 = $this->env->getExtension("native_profiler");
        $__internal_07cfd4f3fb748e553951a0ee8093c0850e7a5e398b197f7d4050f3a93cece721->enter($__internal_07cfd4f3fb748e553951a0ee8093c0850e7a5e398b197f7d4050f3a93cece721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_07cfd4f3fb748e553951a0ee8093c0850e7a5e398b197f7d4050f3a93cece721->leave($__internal_07cfd4f3fb748e553951a0ee8093c0850e7a5e398b197f7d4050f3a93cece721_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7e6322fd14725c88722e987bb0c13dfe650dfdf019578eed39f9bc4d6817f2a4 = $this->env->getExtension("native_profiler");
        $__internal_7e6322fd14725c88722e987bb0c13dfe650dfdf019578eed39f9bc4d6817f2a4->enter($__internal_7e6322fd14725c88722e987bb0c13dfe650dfdf019578eed39f9bc4d6817f2a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7e6322fd14725c88722e987bb0c13dfe650dfdf019578eed39f9bc4d6817f2a4->leave($__internal_7e6322fd14725c88722e987bb0c13dfe650dfdf019578eed39f9bc4d6817f2a4_prof);

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
