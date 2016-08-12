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
        $__internal_b0ec218a63b591c9a930b02bff79f358dc065e102743b1ed45f72b3dc4c16f53 = $this->env->getExtension("native_profiler");
        $__internal_b0ec218a63b591c9a930b02bff79f358dc065e102743b1ed45f72b3dc4c16f53->enter($__internal_b0ec218a63b591c9a930b02bff79f358dc065e102743b1ed45f72b3dc4c16f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0ec218a63b591c9a930b02bff79f358dc065e102743b1ed45f72b3dc4c16f53->leave($__internal_b0ec218a63b591c9a930b02bff79f358dc065e102743b1ed45f72b3dc4c16f53_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d2615a6b88151e2173032268a1e6bc2af759c905bac190b60a38925efffe5708 = $this->env->getExtension("native_profiler");
        $__internal_d2615a6b88151e2173032268a1e6bc2af759c905bac190b60a38925efffe5708->enter($__internal_d2615a6b88151e2173032268a1e6bc2af759c905bac190b60a38925efffe5708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d2615a6b88151e2173032268a1e6bc2af759c905bac190b60a38925efffe5708->leave($__internal_d2615a6b88151e2173032268a1e6bc2af759c905bac190b60a38925efffe5708_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5a8a953bead68e83bf6de1bc284e4b3272f2e999384acc681d343c830d29b6bd = $this->env->getExtension("native_profiler");
        $__internal_5a8a953bead68e83bf6de1bc284e4b3272f2e999384acc681d343c830d29b6bd->enter($__internal_5a8a953bead68e83bf6de1bc284e4b3272f2e999384acc681d343c830d29b6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5a8a953bead68e83bf6de1bc284e4b3272f2e999384acc681d343c830d29b6bd->leave($__internal_5a8a953bead68e83bf6de1bc284e4b3272f2e999384acc681d343c830d29b6bd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1098a96837e3fc8fad09f20b9b7eb18c92e6d1941e2ff88c0df08b97f17825fa = $this->env->getExtension("native_profiler");
        $__internal_1098a96837e3fc8fad09f20b9b7eb18c92e6d1941e2ff88c0df08b97f17825fa->enter($__internal_1098a96837e3fc8fad09f20b9b7eb18c92e6d1941e2ff88c0df08b97f17825fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1098a96837e3fc8fad09f20b9b7eb18c92e6d1941e2ff88c0df08b97f17825fa->leave($__internal_1098a96837e3fc8fad09f20b9b7eb18c92e6d1941e2ff88c0df08b97f17825fa_prof);

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
