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
        $__internal_34f90bac39b728d868745059f1c8eb895416eb794994664f9ea40d401be6c392 = $this->env->getExtension("native_profiler");
        $__internal_34f90bac39b728d868745059f1c8eb895416eb794994664f9ea40d401be6c392->enter($__internal_34f90bac39b728d868745059f1c8eb895416eb794994664f9ea40d401be6c392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34f90bac39b728d868745059f1c8eb895416eb794994664f9ea40d401be6c392->leave($__internal_34f90bac39b728d868745059f1c8eb895416eb794994664f9ea40d401be6c392_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_af4f402884a00900f5c987ff000467e12b97647b5fff0c054bb67a1bf54dceea = $this->env->getExtension("native_profiler");
        $__internal_af4f402884a00900f5c987ff000467e12b97647b5fff0c054bb67a1bf54dceea->enter($__internal_af4f402884a00900f5c987ff000467e12b97647b5fff0c054bb67a1bf54dceea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_af4f402884a00900f5c987ff000467e12b97647b5fff0c054bb67a1bf54dceea->leave($__internal_af4f402884a00900f5c987ff000467e12b97647b5fff0c054bb67a1bf54dceea_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f1b44ddfd8478312b05a2dfcd66711f63b9608b743fe66d8d53196897629a958 = $this->env->getExtension("native_profiler");
        $__internal_f1b44ddfd8478312b05a2dfcd66711f63b9608b743fe66d8d53196897629a958->enter($__internal_f1b44ddfd8478312b05a2dfcd66711f63b9608b743fe66d8d53196897629a958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f1b44ddfd8478312b05a2dfcd66711f63b9608b743fe66d8d53196897629a958->leave($__internal_f1b44ddfd8478312b05a2dfcd66711f63b9608b743fe66d8d53196897629a958_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_417213298b4eb7182715cfa55de9b5068a79aa3606f0da1e1982b45e92768fed = $this->env->getExtension("native_profiler");
        $__internal_417213298b4eb7182715cfa55de9b5068a79aa3606f0da1e1982b45e92768fed->enter($__internal_417213298b4eb7182715cfa55de9b5068a79aa3606f0da1e1982b45e92768fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_417213298b4eb7182715cfa55de9b5068a79aa3606f0da1e1982b45e92768fed->leave($__internal_417213298b4eb7182715cfa55de9b5068a79aa3606f0da1e1982b45e92768fed_prof);

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
