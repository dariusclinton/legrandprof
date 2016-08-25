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
        $__internal_65b69e0220a3a683b72091c7f008f4e25d73b9610844d5bf5b745b06e1e024c4 = $this->env->getExtension("native_profiler");
        $__internal_65b69e0220a3a683b72091c7f008f4e25d73b9610844d5bf5b745b06e1e024c4->enter($__internal_65b69e0220a3a683b72091c7f008f4e25d73b9610844d5bf5b745b06e1e024c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65b69e0220a3a683b72091c7f008f4e25d73b9610844d5bf5b745b06e1e024c4->leave($__internal_65b69e0220a3a683b72091c7f008f4e25d73b9610844d5bf5b745b06e1e024c4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a346a469e3f434c96d0525c1d91447d796aadf77b5ad6a8e02040582b5f1f212 = $this->env->getExtension("native_profiler");
        $__internal_a346a469e3f434c96d0525c1d91447d796aadf77b5ad6a8e02040582b5f1f212->enter($__internal_a346a469e3f434c96d0525c1d91447d796aadf77b5ad6a8e02040582b5f1f212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a346a469e3f434c96d0525c1d91447d796aadf77b5ad6a8e02040582b5f1f212->leave($__internal_a346a469e3f434c96d0525c1d91447d796aadf77b5ad6a8e02040582b5f1f212_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b6fa203390d52df31831695763d65eb7bb470b5d8424a6fdd588e6261ed8459d = $this->env->getExtension("native_profiler");
        $__internal_b6fa203390d52df31831695763d65eb7bb470b5d8424a6fdd588e6261ed8459d->enter($__internal_b6fa203390d52df31831695763d65eb7bb470b5d8424a6fdd588e6261ed8459d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b6fa203390d52df31831695763d65eb7bb470b5d8424a6fdd588e6261ed8459d->leave($__internal_b6fa203390d52df31831695763d65eb7bb470b5d8424a6fdd588e6261ed8459d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9babd523553872e030f88c3f63c9e06fa5f1c5ac6198a635870cbd5424fbf4c7 = $this->env->getExtension("native_profiler");
        $__internal_9babd523553872e030f88c3f63c9e06fa5f1c5ac6198a635870cbd5424fbf4c7->enter($__internal_9babd523553872e030f88c3f63c9e06fa5f1c5ac6198a635870cbd5424fbf4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9babd523553872e030f88c3f63c9e06fa5f1c5ac6198a635870cbd5424fbf4c7->leave($__internal_9babd523553872e030f88c3f63c9e06fa5f1c5ac6198a635870cbd5424fbf4c7_prof);

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
