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
        $__internal_b837953adf4b579f013fc0a9fb548146033e68009f439da9785cbb701e267a52 = $this->env->getExtension("native_profiler");
        $__internal_b837953adf4b579f013fc0a9fb548146033e68009f439da9785cbb701e267a52->enter($__internal_b837953adf4b579f013fc0a9fb548146033e68009f439da9785cbb701e267a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b837953adf4b579f013fc0a9fb548146033e68009f439da9785cbb701e267a52->leave($__internal_b837953adf4b579f013fc0a9fb548146033e68009f439da9785cbb701e267a52_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dc2853b6285aa7fefc98bb92842b23eaa92bdc2cd1244804930599844d6030c6 = $this->env->getExtension("native_profiler");
        $__internal_dc2853b6285aa7fefc98bb92842b23eaa92bdc2cd1244804930599844d6030c6->enter($__internal_dc2853b6285aa7fefc98bb92842b23eaa92bdc2cd1244804930599844d6030c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dc2853b6285aa7fefc98bb92842b23eaa92bdc2cd1244804930599844d6030c6->leave($__internal_dc2853b6285aa7fefc98bb92842b23eaa92bdc2cd1244804930599844d6030c6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cc7ec986d684aca5db1064ecd5ad8febcc571980189ddaae9afdd43ea2e56eb7 = $this->env->getExtension("native_profiler");
        $__internal_cc7ec986d684aca5db1064ecd5ad8febcc571980189ddaae9afdd43ea2e56eb7->enter($__internal_cc7ec986d684aca5db1064ecd5ad8febcc571980189ddaae9afdd43ea2e56eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cc7ec986d684aca5db1064ecd5ad8febcc571980189ddaae9afdd43ea2e56eb7->leave($__internal_cc7ec986d684aca5db1064ecd5ad8febcc571980189ddaae9afdd43ea2e56eb7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c59ce46c2f35116945b7dcbb297302d26fbba218bcadc6a99399b3d5cf4d43a2 = $this->env->getExtension("native_profiler");
        $__internal_c59ce46c2f35116945b7dcbb297302d26fbba218bcadc6a99399b3d5cf4d43a2->enter($__internal_c59ce46c2f35116945b7dcbb297302d26fbba218bcadc6a99399b3d5cf4d43a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c59ce46c2f35116945b7dcbb297302d26fbba218bcadc6a99399b3d5cf4d43a2->leave($__internal_c59ce46c2f35116945b7dcbb297302d26fbba218bcadc6a99399b3d5cf4d43a2_prof);

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
