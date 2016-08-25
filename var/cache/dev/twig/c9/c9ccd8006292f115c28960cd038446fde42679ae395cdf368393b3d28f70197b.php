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
        $__internal_a139e09c63ef315e647a8efdd63200aa8f268957dc334131203608ecebc363c3 = $this->env->getExtension("native_profiler");
        $__internal_a139e09c63ef315e647a8efdd63200aa8f268957dc334131203608ecebc363c3->enter($__internal_a139e09c63ef315e647a8efdd63200aa8f268957dc334131203608ecebc363c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a139e09c63ef315e647a8efdd63200aa8f268957dc334131203608ecebc363c3->leave($__internal_a139e09c63ef315e647a8efdd63200aa8f268957dc334131203608ecebc363c3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4a5291c1b8bd9bf556419ede4449e1d6becb9c4666806b0deb294f2f86b228ef = $this->env->getExtension("native_profiler");
        $__internal_4a5291c1b8bd9bf556419ede4449e1d6becb9c4666806b0deb294f2f86b228ef->enter($__internal_4a5291c1b8bd9bf556419ede4449e1d6becb9c4666806b0deb294f2f86b228ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4a5291c1b8bd9bf556419ede4449e1d6becb9c4666806b0deb294f2f86b228ef->leave($__internal_4a5291c1b8bd9bf556419ede4449e1d6becb9c4666806b0deb294f2f86b228ef_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ccde26b8e5dfca3662b32c9205e5de70240e8fbf26a014f70c278cb9f78b33fd = $this->env->getExtension("native_profiler");
        $__internal_ccde26b8e5dfca3662b32c9205e5de70240e8fbf26a014f70c278cb9f78b33fd->enter($__internal_ccde26b8e5dfca3662b32c9205e5de70240e8fbf26a014f70c278cb9f78b33fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ccde26b8e5dfca3662b32c9205e5de70240e8fbf26a014f70c278cb9f78b33fd->leave($__internal_ccde26b8e5dfca3662b32c9205e5de70240e8fbf26a014f70c278cb9f78b33fd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0e010cb7ecaf9bc8e1adb46ba9821b318f77a47c8cbccb0075f2f14d0adfc54e = $this->env->getExtension("native_profiler");
        $__internal_0e010cb7ecaf9bc8e1adb46ba9821b318f77a47c8cbccb0075f2f14d0adfc54e->enter($__internal_0e010cb7ecaf9bc8e1adb46ba9821b318f77a47c8cbccb0075f2f14d0adfc54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0e010cb7ecaf9bc8e1adb46ba9821b318f77a47c8cbccb0075f2f14d0adfc54e->leave($__internal_0e010cb7ecaf9bc8e1adb46ba9821b318f77a47c8cbccb0075f2f14d0adfc54e_prof);

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
