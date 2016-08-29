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
        $__internal_1810b70b5987375d68462a2bdc9df8d0345bedbf2f35e8ef04d52e5ee3d8329a = $this->env->getExtension("native_profiler");
        $__internal_1810b70b5987375d68462a2bdc9df8d0345bedbf2f35e8ef04d52e5ee3d8329a->enter($__internal_1810b70b5987375d68462a2bdc9df8d0345bedbf2f35e8ef04d52e5ee3d8329a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1810b70b5987375d68462a2bdc9df8d0345bedbf2f35e8ef04d52e5ee3d8329a->leave($__internal_1810b70b5987375d68462a2bdc9df8d0345bedbf2f35e8ef04d52e5ee3d8329a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fc56cec1236930c21e982e2fbca54fee6e89d6269db52804530b247b640ccb83 = $this->env->getExtension("native_profiler");
        $__internal_fc56cec1236930c21e982e2fbca54fee6e89d6269db52804530b247b640ccb83->enter($__internal_fc56cec1236930c21e982e2fbca54fee6e89d6269db52804530b247b640ccb83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fc56cec1236930c21e982e2fbca54fee6e89d6269db52804530b247b640ccb83->leave($__internal_fc56cec1236930c21e982e2fbca54fee6e89d6269db52804530b247b640ccb83_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_acb45136d75a37b146ab8787fcc41475b5c7d3221ce7123863acb00a301563c6 = $this->env->getExtension("native_profiler");
        $__internal_acb45136d75a37b146ab8787fcc41475b5c7d3221ce7123863acb00a301563c6->enter($__internal_acb45136d75a37b146ab8787fcc41475b5c7d3221ce7123863acb00a301563c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_acb45136d75a37b146ab8787fcc41475b5c7d3221ce7123863acb00a301563c6->leave($__internal_acb45136d75a37b146ab8787fcc41475b5c7d3221ce7123863acb00a301563c6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e468150105e13e7ca2cdf2d30c810ca2e1e53fa40e9689197ca69d2c3af16572 = $this->env->getExtension("native_profiler");
        $__internal_e468150105e13e7ca2cdf2d30c810ca2e1e53fa40e9689197ca69d2c3af16572->enter($__internal_e468150105e13e7ca2cdf2d30c810ca2e1e53fa40e9689197ca69d2c3af16572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e468150105e13e7ca2cdf2d30c810ca2e1e53fa40e9689197ca69d2c3af16572->leave($__internal_e468150105e13e7ca2cdf2d30c810ca2e1e53fa40e9689197ca69d2c3af16572_prof);

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
