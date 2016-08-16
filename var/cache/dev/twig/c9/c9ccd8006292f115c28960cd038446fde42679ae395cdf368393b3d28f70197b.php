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
        $__internal_7a8d8be47408011af25f292126110a4a79ace94e4d9f23cf8c29d0b13ccca9a7 = $this->env->getExtension("native_profiler");
        $__internal_7a8d8be47408011af25f292126110a4a79ace94e4d9f23cf8c29d0b13ccca9a7->enter($__internal_7a8d8be47408011af25f292126110a4a79ace94e4d9f23cf8c29d0b13ccca9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a8d8be47408011af25f292126110a4a79ace94e4d9f23cf8c29d0b13ccca9a7->leave($__internal_7a8d8be47408011af25f292126110a4a79ace94e4d9f23cf8c29d0b13ccca9a7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f3c987dbd270fddacdb674921663f1b7d7e740fd3efc1750ccc8c859391cdb06 = $this->env->getExtension("native_profiler");
        $__internal_f3c987dbd270fddacdb674921663f1b7d7e740fd3efc1750ccc8c859391cdb06->enter($__internal_f3c987dbd270fddacdb674921663f1b7d7e740fd3efc1750ccc8c859391cdb06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f3c987dbd270fddacdb674921663f1b7d7e740fd3efc1750ccc8c859391cdb06->leave($__internal_f3c987dbd270fddacdb674921663f1b7d7e740fd3efc1750ccc8c859391cdb06_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4084651852521d22ec59eba895ac98a35c1b2ddd294984994d26b57832a24440 = $this->env->getExtension("native_profiler");
        $__internal_4084651852521d22ec59eba895ac98a35c1b2ddd294984994d26b57832a24440->enter($__internal_4084651852521d22ec59eba895ac98a35c1b2ddd294984994d26b57832a24440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4084651852521d22ec59eba895ac98a35c1b2ddd294984994d26b57832a24440->leave($__internal_4084651852521d22ec59eba895ac98a35c1b2ddd294984994d26b57832a24440_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0833ec837273fb27c37498e1f425d28cda6b889ca989de28d15500927c9ec15e = $this->env->getExtension("native_profiler");
        $__internal_0833ec837273fb27c37498e1f425d28cda6b889ca989de28d15500927c9ec15e->enter($__internal_0833ec837273fb27c37498e1f425d28cda6b889ca989de28d15500927c9ec15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0833ec837273fb27c37498e1f425d28cda6b889ca989de28d15500927c9ec15e->leave($__internal_0833ec837273fb27c37498e1f425d28cda6b889ca989de28d15500927c9ec15e_prof);

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
