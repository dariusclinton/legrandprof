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
        $__internal_497aac8812a1181ddc3ad4bb1d71ad43f8269a73b74af40777b9f1e6243840e2 = $this->env->getExtension("native_profiler");
        $__internal_497aac8812a1181ddc3ad4bb1d71ad43f8269a73b74af40777b9f1e6243840e2->enter($__internal_497aac8812a1181ddc3ad4bb1d71ad43f8269a73b74af40777b9f1e6243840e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_497aac8812a1181ddc3ad4bb1d71ad43f8269a73b74af40777b9f1e6243840e2->leave($__internal_497aac8812a1181ddc3ad4bb1d71ad43f8269a73b74af40777b9f1e6243840e2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ec8b8e3edd53d6d7b6c56da36af5259f52dbc33163bb6b41c9199b5e9e431acf = $this->env->getExtension("native_profiler");
        $__internal_ec8b8e3edd53d6d7b6c56da36af5259f52dbc33163bb6b41c9199b5e9e431acf->enter($__internal_ec8b8e3edd53d6d7b6c56da36af5259f52dbc33163bb6b41c9199b5e9e431acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ec8b8e3edd53d6d7b6c56da36af5259f52dbc33163bb6b41c9199b5e9e431acf->leave($__internal_ec8b8e3edd53d6d7b6c56da36af5259f52dbc33163bb6b41c9199b5e9e431acf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cc69a62c470b5afd5b3831bba335b8ebcc0925ea0ba00a7b32b5224739796dd6 = $this->env->getExtension("native_profiler");
        $__internal_cc69a62c470b5afd5b3831bba335b8ebcc0925ea0ba00a7b32b5224739796dd6->enter($__internal_cc69a62c470b5afd5b3831bba335b8ebcc0925ea0ba00a7b32b5224739796dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cc69a62c470b5afd5b3831bba335b8ebcc0925ea0ba00a7b32b5224739796dd6->leave($__internal_cc69a62c470b5afd5b3831bba335b8ebcc0925ea0ba00a7b32b5224739796dd6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7462f209c6897b434794fcb492ff572d5b33a3304c080be8e58b1c7d3fcf7d25 = $this->env->getExtension("native_profiler");
        $__internal_7462f209c6897b434794fcb492ff572d5b33a3304c080be8e58b1c7d3fcf7d25->enter($__internal_7462f209c6897b434794fcb492ff572d5b33a3304c080be8e58b1c7d3fcf7d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7462f209c6897b434794fcb492ff572d5b33a3304c080be8e58b1c7d3fcf7d25->leave($__internal_7462f209c6897b434794fcb492ff572d5b33a3304c080be8e58b1c7d3fcf7d25_prof);

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
