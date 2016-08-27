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
        $__internal_5fcf92b32f601f21ac551e0e444aba3e43c0611b6b121e5f3d8115102de19efa = $this->env->getExtension("native_profiler");
        $__internal_5fcf92b32f601f21ac551e0e444aba3e43c0611b6b121e5f3d8115102de19efa->enter($__internal_5fcf92b32f601f21ac551e0e444aba3e43c0611b6b121e5f3d8115102de19efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fcf92b32f601f21ac551e0e444aba3e43c0611b6b121e5f3d8115102de19efa->leave($__internal_5fcf92b32f601f21ac551e0e444aba3e43c0611b6b121e5f3d8115102de19efa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_65499dc183aa3e45f1b3819a8f3c813bbec4158e4aaf7a54295bb0ffcb99dab0 = $this->env->getExtension("native_profiler");
        $__internal_65499dc183aa3e45f1b3819a8f3c813bbec4158e4aaf7a54295bb0ffcb99dab0->enter($__internal_65499dc183aa3e45f1b3819a8f3c813bbec4158e4aaf7a54295bb0ffcb99dab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_65499dc183aa3e45f1b3819a8f3c813bbec4158e4aaf7a54295bb0ffcb99dab0->leave($__internal_65499dc183aa3e45f1b3819a8f3c813bbec4158e4aaf7a54295bb0ffcb99dab0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b5e4d8dcff713c2ff68c743132b7d118211beaf4f1f21e9635116a6a04b0e679 = $this->env->getExtension("native_profiler");
        $__internal_b5e4d8dcff713c2ff68c743132b7d118211beaf4f1f21e9635116a6a04b0e679->enter($__internal_b5e4d8dcff713c2ff68c743132b7d118211beaf4f1f21e9635116a6a04b0e679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b5e4d8dcff713c2ff68c743132b7d118211beaf4f1f21e9635116a6a04b0e679->leave($__internal_b5e4d8dcff713c2ff68c743132b7d118211beaf4f1f21e9635116a6a04b0e679_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_92c1a235e9fe0e63d1b4f1ba323f309e62b49a37769e152782207bfa8cf3b868 = $this->env->getExtension("native_profiler");
        $__internal_92c1a235e9fe0e63d1b4f1ba323f309e62b49a37769e152782207bfa8cf3b868->enter($__internal_92c1a235e9fe0e63d1b4f1ba323f309e62b49a37769e152782207bfa8cf3b868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_92c1a235e9fe0e63d1b4f1ba323f309e62b49a37769e152782207bfa8cf3b868->leave($__internal_92c1a235e9fe0e63d1b4f1ba323f309e62b49a37769e152782207bfa8cf3b868_prof);

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
