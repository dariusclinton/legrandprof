<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c540542da6661f22dd959f9bc2b595fd4127ea0ddbcbb9066e46ee2b63dc1e75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_74cbee5e43bac82d90abceaed3a9f9035cbc5d621a3864c50dbbdecfe21f83e9 = $this->env->getExtension("native_profiler");
        $__internal_74cbee5e43bac82d90abceaed3a9f9035cbc5d621a3864c50dbbdecfe21f83e9->enter($__internal_74cbee5e43bac82d90abceaed3a9f9035cbc5d621a3864c50dbbdecfe21f83e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74cbee5e43bac82d90abceaed3a9f9035cbc5d621a3864c50dbbdecfe21f83e9->leave($__internal_74cbee5e43bac82d90abceaed3a9f9035cbc5d621a3864c50dbbdecfe21f83e9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_54a7ea0680efab27105c5aeb8b35cab7bc99a0be452eaf52cd283b7f559053fd = $this->env->getExtension("native_profiler");
        $__internal_54a7ea0680efab27105c5aeb8b35cab7bc99a0be452eaf52cd283b7f559053fd->enter($__internal_54a7ea0680efab27105c5aeb8b35cab7bc99a0be452eaf52cd283b7f559053fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_54a7ea0680efab27105c5aeb8b35cab7bc99a0be452eaf52cd283b7f559053fd->leave($__internal_54a7ea0680efab27105c5aeb8b35cab7bc99a0be452eaf52cd283b7f559053fd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0097b49fbc2bec1304d96c4da57d45713685ada5eed438d135ede3e111ae219a = $this->env->getExtension("native_profiler");
        $__internal_0097b49fbc2bec1304d96c4da57d45713685ada5eed438d135ede3e111ae219a->enter($__internal_0097b49fbc2bec1304d96c4da57d45713685ada5eed438d135ede3e111ae219a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0097b49fbc2bec1304d96c4da57d45713685ada5eed438d135ede3e111ae219a->leave($__internal_0097b49fbc2bec1304d96c4da57d45713685ada5eed438d135ede3e111ae219a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ff9725865455c1fb21f6f8b5b3005a4004b831cb25c186220f21cfe1874c39dd = $this->env->getExtension("native_profiler");
        $__internal_ff9725865455c1fb21f6f8b5b3005a4004b831cb25c186220f21cfe1874c39dd->enter($__internal_ff9725865455c1fb21f6f8b5b3005a4004b831cb25c186220f21cfe1874c39dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ff9725865455c1fb21f6f8b5b3005a4004b831cb25c186220f21cfe1874c39dd->leave($__internal_ff9725865455c1fb21f6f8b5b3005a4004b831cb25c186220f21cfe1874c39dd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
