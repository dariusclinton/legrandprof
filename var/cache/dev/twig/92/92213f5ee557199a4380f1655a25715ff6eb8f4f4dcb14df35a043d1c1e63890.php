<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_a35689d040d44194acc584230406ab701564758cb38ea9b8abdfc5182b765f90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_11ae754df3c6bed9b11c073417eb9b2a7cacca97fa28e952b1cb8d9562044863 = $this->env->getExtension("native_profiler");
        $__internal_11ae754df3c6bed9b11c073417eb9b2a7cacca97fa28e952b1cb8d9562044863->enter($__internal_11ae754df3c6bed9b11c073417eb9b2a7cacca97fa28e952b1cb8d9562044863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11ae754df3c6bed9b11c073417eb9b2a7cacca97fa28e952b1cb8d9562044863->leave($__internal_11ae754df3c6bed9b11c073417eb9b2a7cacca97fa28e952b1cb8d9562044863_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cd373ec8478b297bbb9cadb3335ffd0a5d771460645f1d5960e3b1206937961b = $this->env->getExtension("native_profiler");
        $__internal_cd373ec8478b297bbb9cadb3335ffd0a5d771460645f1d5960e3b1206937961b->enter($__internal_cd373ec8478b297bbb9cadb3335ffd0a5d771460645f1d5960e3b1206937961b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_cd373ec8478b297bbb9cadb3335ffd0a5d771460645f1d5960e3b1206937961b->leave($__internal_cd373ec8478b297bbb9cadb3335ffd0a5d771460645f1d5960e3b1206937961b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_629fced8fde1d168b7efc5532d850b94b05785b33459e21b6928e24c572ed148 = $this->env->getExtension("native_profiler");
        $__internal_629fced8fde1d168b7efc5532d850b94b05785b33459e21b6928e24c572ed148->enter($__internal_629fced8fde1d168b7efc5532d850b94b05785b33459e21b6928e24c572ed148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_629fced8fde1d168b7efc5532d850b94b05785b33459e21b6928e24c572ed148->leave($__internal_629fced8fde1d168b7efc5532d850b94b05785b33459e21b6928e24c572ed148_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d2fc3e2a5baf2e83d3a277f8b16032ca9799790047432a54db0357da751b5cf8 = $this->env->getExtension("native_profiler");
        $__internal_d2fc3e2a5baf2e83d3a277f8b16032ca9799790047432a54db0357da751b5cf8->enter($__internal_d2fc3e2a5baf2e83d3a277f8b16032ca9799790047432a54db0357da751b5cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d2fc3e2a5baf2e83d3a277f8b16032ca9799790047432a54db0357da751b5cf8->leave($__internal_d2fc3e2a5baf2e83d3a277f8b16032ca9799790047432a54db0357da751b5cf8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
