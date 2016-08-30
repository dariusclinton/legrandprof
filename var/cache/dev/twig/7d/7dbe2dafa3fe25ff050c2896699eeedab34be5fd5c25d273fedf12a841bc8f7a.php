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
        $__internal_cee858f26fe7c2415aeef07bd0924cdaccb34339a020b56054e99feaab8fb4b5 = $this->env->getExtension("native_profiler");
        $__internal_cee858f26fe7c2415aeef07bd0924cdaccb34339a020b56054e99feaab8fb4b5->enter($__internal_cee858f26fe7c2415aeef07bd0924cdaccb34339a020b56054e99feaab8fb4b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cee858f26fe7c2415aeef07bd0924cdaccb34339a020b56054e99feaab8fb4b5->leave($__internal_cee858f26fe7c2415aeef07bd0924cdaccb34339a020b56054e99feaab8fb4b5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_15d76a0fc22fa98ab26f49d250dd2a7043903980ad528a91595066ee201d8da3 = $this->env->getExtension("native_profiler");
        $__internal_15d76a0fc22fa98ab26f49d250dd2a7043903980ad528a91595066ee201d8da3->enter($__internal_15d76a0fc22fa98ab26f49d250dd2a7043903980ad528a91595066ee201d8da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_15d76a0fc22fa98ab26f49d250dd2a7043903980ad528a91595066ee201d8da3->leave($__internal_15d76a0fc22fa98ab26f49d250dd2a7043903980ad528a91595066ee201d8da3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_72f5133c54247237bf553d78a5117e14f99e05456af0df3e22e996a000d52ef4 = $this->env->getExtension("native_profiler");
        $__internal_72f5133c54247237bf553d78a5117e14f99e05456af0df3e22e996a000d52ef4->enter($__internal_72f5133c54247237bf553d78a5117e14f99e05456af0df3e22e996a000d52ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_72f5133c54247237bf553d78a5117e14f99e05456af0df3e22e996a000d52ef4->leave($__internal_72f5133c54247237bf553d78a5117e14f99e05456af0df3e22e996a000d52ef4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d9c3c73c5ae5168b89a62a06c123f3d94fdf89df5aa90be7274937357d241a69 = $this->env->getExtension("native_profiler");
        $__internal_d9c3c73c5ae5168b89a62a06c123f3d94fdf89df5aa90be7274937357d241a69->enter($__internal_d9c3c73c5ae5168b89a62a06c123f3d94fdf89df5aa90be7274937357d241a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d9c3c73c5ae5168b89a62a06c123f3d94fdf89df5aa90be7274937357d241a69->leave($__internal_d9c3c73c5ae5168b89a62a06c123f3d94fdf89df5aa90be7274937357d241a69_prof);

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
