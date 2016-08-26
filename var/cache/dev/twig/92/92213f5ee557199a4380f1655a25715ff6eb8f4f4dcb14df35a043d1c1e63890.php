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
        $__internal_6869f5b6c97fb8fff8cf980e4e7bd475c96b457ab53a4880cd14171ccf41afc0 = $this->env->getExtension("native_profiler");
        $__internal_6869f5b6c97fb8fff8cf980e4e7bd475c96b457ab53a4880cd14171ccf41afc0->enter($__internal_6869f5b6c97fb8fff8cf980e4e7bd475c96b457ab53a4880cd14171ccf41afc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6869f5b6c97fb8fff8cf980e4e7bd475c96b457ab53a4880cd14171ccf41afc0->leave($__internal_6869f5b6c97fb8fff8cf980e4e7bd475c96b457ab53a4880cd14171ccf41afc0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9af5c5a498f657376af58900f732cd05da57268dd144d96021f8088b1533a582 = $this->env->getExtension("native_profiler");
        $__internal_9af5c5a498f657376af58900f732cd05da57268dd144d96021f8088b1533a582->enter($__internal_9af5c5a498f657376af58900f732cd05da57268dd144d96021f8088b1533a582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9af5c5a498f657376af58900f732cd05da57268dd144d96021f8088b1533a582->leave($__internal_9af5c5a498f657376af58900f732cd05da57268dd144d96021f8088b1533a582_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3203fef44115cbb9360600eccd21537e81c7619b1e2d01e7c6e046167fb77e2e = $this->env->getExtension("native_profiler");
        $__internal_3203fef44115cbb9360600eccd21537e81c7619b1e2d01e7c6e046167fb77e2e->enter($__internal_3203fef44115cbb9360600eccd21537e81c7619b1e2d01e7c6e046167fb77e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3203fef44115cbb9360600eccd21537e81c7619b1e2d01e7c6e046167fb77e2e->leave($__internal_3203fef44115cbb9360600eccd21537e81c7619b1e2d01e7c6e046167fb77e2e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d7ca6333a35b3817e74c6201cc63e96ae1156c2c2e07a3512dfbb2d630c874d8 = $this->env->getExtension("native_profiler");
        $__internal_d7ca6333a35b3817e74c6201cc63e96ae1156c2c2e07a3512dfbb2d630c874d8->enter($__internal_d7ca6333a35b3817e74c6201cc63e96ae1156c2c2e07a3512dfbb2d630c874d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d7ca6333a35b3817e74c6201cc63e96ae1156c2c2e07a3512dfbb2d630c874d8->leave($__internal_d7ca6333a35b3817e74c6201cc63e96ae1156c2c2e07a3512dfbb2d630c874d8_prof);

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
