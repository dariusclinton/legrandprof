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
        $__internal_68fa54739f0d41b9894fbc7c9b987e2365a3227ffcc8affab4a701204b299bd6 = $this->env->getExtension("native_profiler");
        $__internal_68fa54739f0d41b9894fbc7c9b987e2365a3227ffcc8affab4a701204b299bd6->enter($__internal_68fa54739f0d41b9894fbc7c9b987e2365a3227ffcc8affab4a701204b299bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68fa54739f0d41b9894fbc7c9b987e2365a3227ffcc8affab4a701204b299bd6->leave($__internal_68fa54739f0d41b9894fbc7c9b987e2365a3227ffcc8affab4a701204b299bd6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_85903791ffd1d8275f1090a8bd8eb0fcb4cd2f3d9f2ebbfb250d18ef797a8c0f = $this->env->getExtension("native_profiler");
        $__internal_85903791ffd1d8275f1090a8bd8eb0fcb4cd2f3d9f2ebbfb250d18ef797a8c0f->enter($__internal_85903791ffd1d8275f1090a8bd8eb0fcb4cd2f3d9f2ebbfb250d18ef797a8c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_85903791ffd1d8275f1090a8bd8eb0fcb4cd2f3d9f2ebbfb250d18ef797a8c0f->leave($__internal_85903791ffd1d8275f1090a8bd8eb0fcb4cd2f3d9f2ebbfb250d18ef797a8c0f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_32aad1f309998ef91532e1d4cbcbb540bd8876c15533d61fad74315d3106135d = $this->env->getExtension("native_profiler");
        $__internal_32aad1f309998ef91532e1d4cbcbb540bd8876c15533d61fad74315d3106135d->enter($__internal_32aad1f309998ef91532e1d4cbcbb540bd8876c15533d61fad74315d3106135d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_32aad1f309998ef91532e1d4cbcbb540bd8876c15533d61fad74315d3106135d->leave($__internal_32aad1f309998ef91532e1d4cbcbb540bd8876c15533d61fad74315d3106135d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3f53933a6c96be22c795cc3dec894c4810b4fa0b08f91553f50e9b9f30144db6 = $this->env->getExtension("native_profiler");
        $__internal_3f53933a6c96be22c795cc3dec894c4810b4fa0b08f91553f50e9b9f30144db6->enter($__internal_3f53933a6c96be22c795cc3dec894c4810b4fa0b08f91553f50e9b9f30144db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3f53933a6c96be22c795cc3dec894c4810b4fa0b08f91553f50e9b9f30144db6->leave($__internal_3f53933a6c96be22c795cc3dec894c4810b4fa0b08f91553f50e9b9f30144db6_prof);

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
