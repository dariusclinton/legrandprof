<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_dafc26c5342b879f08b03c1a2b61d5789976de4b27dcbd5a24b235428589c573 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_d827692726bba5b1fc08809497366ca28c0f864f64497663822d1e0ec5e168b4 = $this->env->getExtension("native_profiler");
        $__internal_d827692726bba5b1fc08809497366ca28c0f864f64497663822d1e0ec5e168b4->enter($__internal_d827692726bba5b1fc08809497366ca28c0f864f64497663822d1e0ec5e168b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d827692726bba5b1fc08809497366ca28c0f864f64497663822d1e0ec5e168b4->leave($__internal_d827692726bba5b1fc08809497366ca28c0f864f64497663822d1e0ec5e168b4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_069eb955d7ea10bbfe3dd3610a26dcd1f27aa5ef3b897ccd2951efc2575fee46 = $this->env->getExtension("native_profiler");
        $__internal_069eb955d7ea10bbfe3dd3610a26dcd1f27aa5ef3b897ccd2951efc2575fee46->enter($__internal_069eb955d7ea10bbfe3dd3610a26dcd1f27aa5ef3b897ccd2951efc2575fee46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_069eb955d7ea10bbfe3dd3610a26dcd1f27aa5ef3b897ccd2951efc2575fee46->leave($__internal_069eb955d7ea10bbfe3dd3610a26dcd1f27aa5ef3b897ccd2951efc2575fee46_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4636c5ea15ccb7646918a3ef8be78d1967d3b7d535f3963e60bfd80d44df054f = $this->env->getExtension("native_profiler");
        $__internal_4636c5ea15ccb7646918a3ef8be78d1967d3b7d535f3963e60bfd80d44df054f->enter($__internal_4636c5ea15ccb7646918a3ef8be78d1967d3b7d535f3963e60bfd80d44df054f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4636c5ea15ccb7646918a3ef8be78d1967d3b7d535f3963e60bfd80d44df054f->leave($__internal_4636c5ea15ccb7646918a3ef8be78d1967d3b7d535f3963e60bfd80d44df054f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_064299b0b6f68c735d82212359955149824894f8cbabd3e8b16742f9c44e7af2 = $this->env->getExtension("native_profiler");
        $__internal_064299b0b6f68c735d82212359955149824894f8cbabd3e8b16742f9c44e7af2->enter($__internal_064299b0b6f68c735d82212359955149824894f8cbabd3e8b16742f9c44e7af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_064299b0b6f68c735d82212359955149824894f8cbabd3e8b16742f9c44e7af2->leave($__internal_064299b0b6f68c735d82212359955149824894f8cbabd3e8b16742f9c44e7af2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
