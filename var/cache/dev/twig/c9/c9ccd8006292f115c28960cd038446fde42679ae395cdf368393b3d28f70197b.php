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
        $__internal_92660c2def7fe8cd0ab58863b7af60cfb1b15bd97d7d624bb11baefda7568dd7 = $this->env->getExtension("native_profiler");
        $__internal_92660c2def7fe8cd0ab58863b7af60cfb1b15bd97d7d624bb11baefda7568dd7->enter($__internal_92660c2def7fe8cd0ab58863b7af60cfb1b15bd97d7d624bb11baefda7568dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92660c2def7fe8cd0ab58863b7af60cfb1b15bd97d7d624bb11baefda7568dd7->leave($__internal_92660c2def7fe8cd0ab58863b7af60cfb1b15bd97d7d624bb11baefda7568dd7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b66aa8dc90e803ee52f83b120c8306e0d6436b3e4a40ae2412c422dba1520e3b = $this->env->getExtension("native_profiler");
        $__internal_b66aa8dc90e803ee52f83b120c8306e0d6436b3e4a40ae2412c422dba1520e3b->enter($__internal_b66aa8dc90e803ee52f83b120c8306e0d6436b3e4a40ae2412c422dba1520e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b66aa8dc90e803ee52f83b120c8306e0d6436b3e4a40ae2412c422dba1520e3b->leave($__internal_b66aa8dc90e803ee52f83b120c8306e0d6436b3e4a40ae2412c422dba1520e3b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_802eff80551bdc49202121782e9e722a8469d8431527add8f8bef75f6de3ba37 = $this->env->getExtension("native_profiler");
        $__internal_802eff80551bdc49202121782e9e722a8469d8431527add8f8bef75f6de3ba37->enter($__internal_802eff80551bdc49202121782e9e722a8469d8431527add8f8bef75f6de3ba37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_802eff80551bdc49202121782e9e722a8469d8431527add8f8bef75f6de3ba37->leave($__internal_802eff80551bdc49202121782e9e722a8469d8431527add8f8bef75f6de3ba37_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_28423fc160bf0b603380f95a084781a92696fddd7f0e1ca34be9d1f363068ff4 = $this->env->getExtension("native_profiler");
        $__internal_28423fc160bf0b603380f95a084781a92696fddd7f0e1ca34be9d1f363068ff4->enter($__internal_28423fc160bf0b603380f95a084781a92696fddd7f0e1ca34be9d1f363068ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_28423fc160bf0b603380f95a084781a92696fddd7f0e1ca34be9d1f363068ff4->leave($__internal_28423fc160bf0b603380f95a084781a92696fddd7f0e1ca34be9d1f363068ff4_prof);

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
