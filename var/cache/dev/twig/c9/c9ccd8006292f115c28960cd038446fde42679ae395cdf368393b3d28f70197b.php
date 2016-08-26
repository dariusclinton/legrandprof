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
        $__internal_25443b782071684f26d1383a49f7f08348677546eec890c037e3deedabece1ed = $this->env->getExtension("native_profiler");
        $__internal_25443b782071684f26d1383a49f7f08348677546eec890c037e3deedabece1ed->enter($__internal_25443b782071684f26d1383a49f7f08348677546eec890c037e3deedabece1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25443b782071684f26d1383a49f7f08348677546eec890c037e3deedabece1ed->leave($__internal_25443b782071684f26d1383a49f7f08348677546eec890c037e3deedabece1ed_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e7317f6a27e3496ed89c631385c8de4978a6bf66f7d78838710a536af4125c16 = $this->env->getExtension("native_profiler");
        $__internal_e7317f6a27e3496ed89c631385c8de4978a6bf66f7d78838710a536af4125c16->enter($__internal_e7317f6a27e3496ed89c631385c8de4978a6bf66f7d78838710a536af4125c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e7317f6a27e3496ed89c631385c8de4978a6bf66f7d78838710a536af4125c16->leave($__internal_e7317f6a27e3496ed89c631385c8de4978a6bf66f7d78838710a536af4125c16_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b7063a89b4a9a83d7d3e0f9c6a995b7fa50aa12ad62b8901ac339a1b33c50303 = $this->env->getExtension("native_profiler");
        $__internal_b7063a89b4a9a83d7d3e0f9c6a995b7fa50aa12ad62b8901ac339a1b33c50303->enter($__internal_b7063a89b4a9a83d7d3e0f9c6a995b7fa50aa12ad62b8901ac339a1b33c50303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b7063a89b4a9a83d7d3e0f9c6a995b7fa50aa12ad62b8901ac339a1b33c50303->leave($__internal_b7063a89b4a9a83d7d3e0f9c6a995b7fa50aa12ad62b8901ac339a1b33c50303_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0ce00dc6d6261843eea6e70ed444ed46a2feeabccc3d0bb11c8bf12c40427a08 = $this->env->getExtension("native_profiler");
        $__internal_0ce00dc6d6261843eea6e70ed444ed46a2feeabccc3d0bb11c8bf12c40427a08->enter($__internal_0ce00dc6d6261843eea6e70ed444ed46a2feeabccc3d0bb11c8bf12c40427a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0ce00dc6d6261843eea6e70ed444ed46a2feeabccc3d0bb11c8bf12c40427a08->leave($__internal_0ce00dc6d6261843eea6e70ed444ed46a2feeabccc3d0bb11c8bf12c40427a08_prof);

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
