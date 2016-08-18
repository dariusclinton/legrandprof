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
        $__internal_8d3895a286fcb20ce6450d845278de454e55867ad978bedd994f1af5e19d8894 = $this->env->getExtension("native_profiler");
        $__internal_8d3895a286fcb20ce6450d845278de454e55867ad978bedd994f1af5e19d8894->enter($__internal_8d3895a286fcb20ce6450d845278de454e55867ad978bedd994f1af5e19d8894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d3895a286fcb20ce6450d845278de454e55867ad978bedd994f1af5e19d8894->leave($__internal_8d3895a286fcb20ce6450d845278de454e55867ad978bedd994f1af5e19d8894_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2f71b8c9b662b62ace4ddb8cc25b00148f83185dd9f00cb2bda84068cf24a726 = $this->env->getExtension("native_profiler");
        $__internal_2f71b8c9b662b62ace4ddb8cc25b00148f83185dd9f00cb2bda84068cf24a726->enter($__internal_2f71b8c9b662b62ace4ddb8cc25b00148f83185dd9f00cb2bda84068cf24a726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2f71b8c9b662b62ace4ddb8cc25b00148f83185dd9f00cb2bda84068cf24a726->leave($__internal_2f71b8c9b662b62ace4ddb8cc25b00148f83185dd9f00cb2bda84068cf24a726_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_308576bcb15fb356c83447fcc6a382c71e1aa396b2ac2bac3b5d647ec6d22c8a = $this->env->getExtension("native_profiler");
        $__internal_308576bcb15fb356c83447fcc6a382c71e1aa396b2ac2bac3b5d647ec6d22c8a->enter($__internal_308576bcb15fb356c83447fcc6a382c71e1aa396b2ac2bac3b5d647ec6d22c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_308576bcb15fb356c83447fcc6a382c71e1aa396b2ac2bac3b5d647ec6d22c8a->leave($__internal_308576bcb15fb356c83447fcc6a382c71e1aa396b2ac2bac3b5d647ec6d22c8a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3302473b64278fe4644d5535abc988a8edf7f9dea8ca0fa4b8f6023b02de32f0 = $this->env->getExtension("native_profiler");
        $__internal_3302473b64278fe4644d5535abc988a8edf7f9dea8ca0fa4b8f6023b02de32f0->enter($__internal_3302473b64278fe4644d5535abc988a8edf7f9dea8ca0fa4b8f6023b02de32f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3302473b64278fe4644d5535abc988a8edf7f9dea8ca0fa4b8f6023b02de32f0->leave($__internal_3302473b64278fe4644d5535abc988a8edf7f9dea8ca0fa4b8f6023b02de32f0_prof);

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
