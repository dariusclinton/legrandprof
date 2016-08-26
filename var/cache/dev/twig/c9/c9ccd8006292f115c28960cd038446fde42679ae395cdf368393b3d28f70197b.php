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
        $__internal_d64d9fe392b64c206f3a18f92d1deaf9495c11f610f1260faaab58bb546b73d9 = $this->env->getExtension("native_profiler");
        $__internal_d64d9fe392b64c206f3a18f92d1deaf9495c11f610f1260faaab58bb546b73d9->enter($__internal_d64d9fe392b64c206f3a18f92d1deaf9495c11f610f1260faaab58bb546b73d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d64d9fe392b64c206f3a18f92d1deaf9495c11f610f1260faaab58bb546b73d9->leave($__internal_d64d9fe392b64c206f3a18f92d1deaf9495c11f610f1260faaab58bb546b73d9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f9df7f364004f81f07d9883edc4af0e2a79168c78ec14ea4ca7ffac2c49a2710 = $this->env->getExtension("native_profiler");
        $__internal_f9df7f364004f81f07d9883edc4af0e2a79168c78ec14ea4ca7ffac2c49a2710->enter($__internal_f9df7f364004f81f07d9883edc4af0e2a79168c78ec14ea4ca7ffac2c49a2710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f9df7f364004f81f07d9883edc4af0e2a79168c78ec14ea4ca7ffac2c49a2710->leave($__internal_f9df7f364004f81f07d9883edc4af0e2a79168c78ec14ea4ca7ffac2c49a2710_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0ec634648dc1cccb9c9f439fda0f0a0e710b30cab818f2c4ec2ab1629fff83cb = $this->env->getExtension("native_profiler");
        $__internal_0ec634648dc1cccb9c9f439fda0f0a0e710b30cab818f2c4ec2ab1629fff83cb->enter($__internal_0ec634648dc1cccb9c9f439fda0f0a0e710b30cab818f2c4ec2ab1629fff83cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0ec634648dc1cccb9c9f439fda0f0a0e710b30cab818f2c4ec2ab1629fff83cb->leave($__internal_0ec634648dc1cccb9c9f439fda0f0a0e710b30cab818f2c4ec2ab1629fff83cb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d9acc46177496a432636e03aaadd491d8dfc1f9dc6ae09d7654f898afd6790e = $this->env->getExtension("native_profiler");
        $__internal_8d9acc46177496a432636e03aaadd491d8dfc1f9dc6ae09d7654f898afd6790e->enter($__internal_8d9acc46177496a432636e03aaadd491d8dfc1f9dc6ae09d7654f898afd6790e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8d9acc46177496a432636e03aaadd491d8dfc1f9dc6ae09d7654f898afd6790e->leave($__internal_8d9acc46177496a432636e03aaadd491d8dfc1f9dc6ae09d7654f898afd6790e_prof);

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
