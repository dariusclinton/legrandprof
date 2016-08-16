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
        $__internal_f5c78c6ffa18034ca1f71c1bf22498a97b5749a2a2ce432f567e347cc45602af = $this->env->getExtension("native_profiler");
        $__internal_f5c78c6ffa18034ca1f71c1bf22498a97b5749a2a2ce432f567e347cc45602af->enter($__internal_f5c78c6ffa18034ca1f71c1bf22498a97b5749a2a2ce432f567e347cc45602af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5c78c6ffa18034ca1f71c1bf22498a97b5749a2a2ce432f567e347cc45602af->leave($__internal_f5c78c6ffa18034ca1f71c1bf22498a97b5749a2a2ce432f567e347cc45602af_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_01f94a027d456f0a6e087962ce66468d952a80bc8d6c098ee70c4e47fb0bd574 = $this->env->getExtension("native_profiler");
        $__internal_01f94a027d456f0a6e087962ce66468d952a80bc8d6c098ee70c4e47fb0bd574->enter($__internal_01f94a027d456f0a6e087962ce66468d952a80bc8d6c098ee70c4e47fb0bd574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_01f94a027d456f0a6e087962ce66468d952a80bc8d6c098ee70c4e47fb0bd574->leave($__internal_01f94a027d456f0a6e087962ce66468d952a80bc8d6c098ee70c4e47fb0bd574_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ebf6192abd316a9e4db68e34506361df321d78c998f682f14f3c6c96a9994b25 = $this->env->getExtension("native_profiler");
        $__internal_ebf6192abd316a9e4db68e34506361df321d78c998f682f14f3c6c96a9994b25->enter($__internal_ebf6192abd316a9e4db68e34506361df321d78c998f682f14f3c6c96a9994b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ebf6192abd316a9e4db68e34506361df321d78c998f682f14f3c6c96a9994b25->leave($__internal_ebf6192abd316a9e4db68e34506361df321d78c998f682f14f3c6c96a9994b25_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2d5583cf8770ba11b71a9216a5bc45a0e031005dd2d3a98914288d6ae83415d5 = $this->env->getExtension("native_profiler");
        $__internal_2d5583cf8770ba11b71a9216a5bc45a0e031005dd2d3a98914288d6ae83415d5->enter($__internal_2d5583cf8770ba11b71a9216a5bc45a0e031005dd2d3a98914288d6ae83415d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2d5583cf8770ba11b71a9216a5bc45a0e031005dd2d3a98914288d6ae83415d5->leave($__internal_2d5583cf8770ba11b71a9216a5bc45a0e031005dd2d3a98914288d6ae83415d5_prof);

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
