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
        $__internal_654fb08c77a01d2d6f2ca9b5a17ea5c2dd52987d5dc521aa4d6f867bf86fd388 = $this->env->getExtension("native_profiler");
        $__internal_654fb08c77a01d2d6f2ca9b5a17ea5c2dd52987d5dc521aa4d6f867bf86fd388->enter($__internal_654fb08c77a01d2d6f2ca9b5a17ea5c2dd52987d5dc521aa4d6f867bf86fd388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_654fb08c77a01d2d6f2ca9b5a17ea5c2dd52987d5dc521aa4d6f867bf86fd388->leave($__internal_654fb08c77a01d2d6f2ca9b5a17ea5c2dd52987d5dc521aa4d6f867bf86fd388_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2f601de1eb42ce6621c40e4f0126a8be8321505d7ca3cf33e03f09c8cc5b9155 = $this->env->getExtension("native_profiler");
        $__internal_2f601de1eb42ce6621c40e4f0126a8be8321505d7ca3cf33e03f09c8cc5b9155->enter($__internal_2f601de1eb42ce6621c40e4f0126a8be8321505d7ca3cf33e03f09c8cc5b9155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2f601de1eb42ce6621c40e4f0126a8be8321505d7ca3cf33e03f09c8cc5b9155->leave($__internal_2f601de1eb42ce6621c40e4f0126a8be8321505d7ca3cf33e03f09c8cc5b9155_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0a1df88e84e66d5a2e175bb1178321575beb1e4979efed79c7bcb4949c23df24 = $this->env->getExtension("native_profiler");
        $__internal_0a1df88e84e66d5a2e175bb1178321575beb1e4979efed79c7bcb4949c23df24->enter($__internal_0a1df88e84e66d5a2e175bb1178321575beb1e4979efed79c7bcb4949c23df24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0a1df88e84e66d5a2e175bb1178321575beb1e4979efed79c7bcb4949c23df24->leave($__internal_0a1df88e84e66d5a2e175bb1178321575beb1e4979efed79c7bcb4949c23df24_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8fd5a9620624b16420eb39b5a81c34d369bcf43c245193c27360d8e9b947fa06 = $this->env->getExtension("native_profiler");
        $__internal_8fd5a9620624b16420eb39b5a81c34d369bcf43c245193c27360d8e9b947fa06->enter($__internal_8fd5a9620624b16420eb39b5a81c34d369bcf43c245193c27360d8e9b947fa06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8fd5a9620624b16420eb39b5a81c34d369bcf43c245193c27360d8e9b947fa06->leave($__internal_8fd5a9620624b16420eb39b5a81c34d369bcf43c245193c27360d8e9b947fa06_prof);

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
