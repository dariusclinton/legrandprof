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
        $__internal_6247589e2370d9b97edd7d415bed3bc0566ff624f7365a586ae89328de1b2b23 = $this->env->getExtension("native_profiler");
        $__internal_6247589e2370d9b97edd7d415bed3bc0566ff624f7365a586ae89328de1b2b23->enter($__internal_6247589e2370d9b97edd7d415bed3bc0566ff624f7365a586ae89328de1b2b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6247589e2370d9b97edd7d415bed3bc0566ff624f7365a586ae89328de1b2b23->leave($__internal_6247589e2370d9b97edd7d415bed3bc0566ff624f7365a586ae89328de1b2b23_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9fa8f1b8939e2192425fd1230a149c44548a6b34c041d9f4d954a337d8e10572 = $this->env->getExtension("native_profiler");
        $__internal_9fa8f1b8939e2192425fd1230a149c44548a6b34c041d9f4d954a337d8e10572->enter($__internal_9fa8f1b8939e2192425fd1230a149c44548a6b34c041d9f4d954a337d8e10572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9fa8f1b8939e2192425fd1230a149c44548a6b34c041d9f4d954a337d8e10572->leave($__internal_9fa8f1b8939e2192425fd1230a149c44548a6b34c041d9f4d954a337d8e10572_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8e6f9effc8b2940d25c6c15b582316b579a15112d845d89912325f9b8841f1f5 = $this->env->getExtension("native_profiler");
        $__internal_8e6f9effc8b2940d25c6c15b582316b579a15112d845d89912325f9b8841f1f5->enter($__internal_8e6f9effc8b2940d25c6c15b582316b579a15112d845d89912325f9b8841f1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8e6f9effc8b2940d25c6c15b582316b579a15112d845d89912325f9b8841f1f5->leave($__internal_8e6f9effc8b2940d25c6c15b582316b579a15112d845d89912325f9b8841f1f5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_33b371e5315ebeb087cc91d4e7280d2f935792d15cf04965aae80d0017136efb = $this->env->getExtension("native_profiler");
        $__internal_33b371e5315ebeb087cc91d4e7280d2f935792d15cf04965aae80d0017136efb->enter($__internal_33b371e5315ebeb087cc91d4e7280d2f935792d15cf04965aae80d0017136efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_33b371e5315ebeb087cc91d4e7280d2f935792d15cf04965aae80d0017136efb->leave($__internal_33b371e5315ebeb087cc91d4e7280d2f935792d15cf04965aae80d0017136efb_prof);

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
