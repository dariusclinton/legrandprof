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
        $__internal_2722ea18df67ebf7c23cca8c755d76652e3cc631f4a3d68d6c089061c46811cb = $this->env->getExtension("native_profiler");
        $__internal_2722ea18df67ebf7c23cca8c755d76652e3cc631f4a3d68d6c089061c46811cb->enter($__internal_2722ea18df67ebf7c23cca8c755d76652e3cc631f4a3d68d6c089061c46811cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2722ea18df67ebf7c23cca8c755d76652e3cc631f4a3d68d6c089061c46811cb->leave($__internal_2722ea18df67ebf7c23cca8c755d76652e3cc631f4a3d68d6c089061c46811cb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d1736a99f2e9c003f0d4e0adae09ae5f801ff71fea9e3d34c122ebfe303c4585 = $this->env->getExtension("native_profiler");
        $__internal_d1736a99f2e9c003f0d4e0adae09ae5f801ff71fea9e3d34c122ebfe303c4585->enter($__internal_d1736a99f2e9c003f0d4e0adae09ae5f801ff71fea9e3d34c122ebfe303c4585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d1736a99f2e9c003f0d4e0adae09ae5f801ff71fea9e3d34c122ebfe303c4585->leave($__internal_d1736a99f2e9c003f0d4e0adae09ae5f801ff71fea9e3d34c122ebfe303c4585_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3240445dc4b12bdf7d2088de1ef3bd32f72092f5e2ec7af6a617453c81640fb8 = $this->env->getExtension("native_profiler");
        $__internal_3240445dc4b12bdf7d2088de1ef3bd32f72092f5e2ec7af6a617453c81640fb8->enter($__internal_3240445dc4b12bdf7d2088de1ef3bd32f72092f5e2ec7af6a617453c81640fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3240445dc4b12bdf7d2088de1ef3bd32f72092f5e2ec7af6a617453c81640fb8->leave($__internal_3240445dc4b12bdf7d2088de1ef3bd32f72092f5e2ec7af6a617453c81640fb8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2e57ef6a5a12abfa6eaca79858942235bb481ec5ab7bb26db77787b5c57acdf3 = $this->env->getExtension("native_profiler");
        $__internal_2e57ef6a5a12abfa6eaca79858942235bb481ec5ab7bb26db77787b5c57acdf3->enter($__internal_2e57ef6a5a12abfa6eaca79858942235bb481ec5ab7bb26db77787b5c57acdf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2e57ef6a5a12abfa6eaca79858942235bb481ec5ab7bb26db77787b5c57acdf3->leave($__internal_2e57ef6a5a12abfa6eaca79858942235bb481ec5ab7bb26db77787b5c57acdf3_prof);

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
