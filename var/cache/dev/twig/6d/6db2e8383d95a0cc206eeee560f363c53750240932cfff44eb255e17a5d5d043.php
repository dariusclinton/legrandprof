<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_612fe1cd77c47339cbc2a0e68fcda4ab1300b032dd7be1e2c9885af0eaca677b extends Twig_Template
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
        $__internal_fb6c9cb371fea0d3ed20cb68fec16102e5f8ff646810b7257bf2afdc5775858a = $this->env->getExtension("native_profiler");
        $__internal_fb6c9cb371fea0d3ed20cb68fec16102e5f8ff646810b7257bf2afdc5775858a->enter($__internal_fb6c9cb371fea0d3ed20cb68fec16102e5f8ff646810b7257bf2afdc5775858a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb6c9cb371fea0d3ed20cb68fec16102e5f8ff646810b7257bf2afdc5775858a->leave($__internal_fb6c9cb371fea0d3ed20cb68fec16102e5f8ff646810b7257bf2afdc5775858a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5ce2cb9cdde21b1cac726c1686f7c440ad575c3259d4dcc5aaaf73c2f4ca0e0f = $this->env->getExtension("native_profiler");
        $__internal_5ce2cb9cdde21b1cac726c1686f7c440ad575c3259d4dcc5aaaf73c2f4ca0e0f->enter($__internal_5ce2cb9cdde21b1cac726c1686f7c440ad575c3259d4dcc5aaaf73c2f4ca0e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5ce2cb9cdde21b1cac726c1686f7c440ad575c3259d4dcc5aaaf73c2f4ca0e0f->leave($__internal_5ce2cb9cdde21b1cac726c1686f7c440ad575c3259d4dcc5aaaf73c2f4ca0e0f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0099bf9dae34881853e98b796ce9726bd2ea552cc55c25c48158812d848034b1 = $this->env->getExtension("native_profiler");
        $__internal_0099bf9dae34881853e98b796ce9726bd2ea552cc55c25c48158812d848034b1->enter($__internal_0099bf9dae34881853e98b796ce9726bd2ea552cc55c25c48158812d848034b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0099bf9dae34881853e98b796ce9726bd2ea552cc55c25c48158812d848034b1->leave($__internal_0099bf9dae34881853e98b796ce9726bd2ea552cc55c25c48158812d848034b1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1f45047957405cdbe53d4ea60dd857cbb19a1996c5fba425b2b84c34606d2264 = $this->env->getExtension("native_profiler");
        $__internal_1f45047957405cdbe53d4ea60dd857cbb19a1996c5fba425b2b84c34606d2264->enter($__internal_1f45047957405cdbe53d4ea60dd857cbb19a1996c5fba425b2b84c34606d2264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1f45047957405cdbe53d4ea60dd857cbb19a1996c5fba425b2b84c34606d2264->leave($__internal_1f45047957405cdbe53d4ea60dd857cbb19a1996c5fba425b2b84c34606d2264_prof);

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
