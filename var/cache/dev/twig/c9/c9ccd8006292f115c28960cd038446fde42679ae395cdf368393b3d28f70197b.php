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
        $__internal_f3c6381231bc455eb57c33ecea882ce93fb486978fcf6e5c167c820df6e486a6 = $this->env->getExtension("native_profiler");
        $__internal_f3c6381231bc455eb57c33ecea882ce93fb486978fcf6e5c167c820df6e486a6->enter($__internal_f3c6381231bc455eb57c33ecea882ce93fb486978fcf6e5c167c820df6e486a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3c6381231bc455eb57c33ecea882ce93fb486978fcf6e5c167c820df6e486a6->leave($__internal_f3c6381231bc455eb57c33ecea882ce93fb486978fcf6e5c167c820df6e486a6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b1626a6d9fcc85301346418a5c7b7b9125ba2b87abad84dfe47e57b2482214b5 = $this->env->getExtension("native_profiler");
        $__internal_b1626a6d9fcc85301346418a5c7b7b9125ba2b87abad84dfe47e57b2482214b5->enter($__internal_b1626a6d9fcc85301346418a5c7b7b9125ba2b87abad84dfe47e57b2482214b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b1626a6d9fcc85301346418a5c7b7b9125ba2b87abad84dfe47e57b2482214b5->leave($__internal_b1626a6d9fcc85301346418a5c7b7b9125ba2b87abad84dfe47e57b2482214b5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bd94708aa6e33a27feb3ae7e525d4928fb0c4562391ec23297d555dcf2277817 = $this->env->getExtension("native_profiler");
        $__internal_bd94708aa6e33a27feb3ae7e525d4928fb0c4562391ec23297d555dcf2277817->enter($__internal_bd94708aa6e33a27feb3ae7e525d4928fb0c4562391ec23297d555dcf2277817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bd94708aa6e33a27feb3ae7e525d4928fb0c4562391ec23297d555dcf2277817->leave($__internal_bd94708aa6e33a27feb3ae7e525d4928fb0c4562391ec23297d555dcf2277817_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_db709fd62e07da4692a9545e9d262ea099a0f6872b9df44f6b3c5d584ee5959b = $this->env->getExtension("native_profiler");
        $__internal_db709fd62e07da4692a9545e9d262ea099a0f6872b9df44f6b3c5d584ee5959b->enter($__internal_db709fd62e07da4692a9545e9d262ea099a0f6872b9df44f6b3c5d584ee5959b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_db709fd62e07da4692a9545e9d262ea099a0f6872b9df44f6b3c5d584ee5959b->leave($__internal_db709fd62e07da4692a9545e9d262ea099a0f6872b9df44f6b3c5d584ee5959b_prof);

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
