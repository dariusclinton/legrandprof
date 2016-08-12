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
        $__internal_0d5992b5a569445e57340bdf97e83749feecd681a887772c9eb8853e1910de3b = $this->env->getExtension("native_profiler");
        $__internal_0d5992b5a569445e57340bdf97e83749feecd681a887772c9eb8853e1910de3b->enter($__internal_0d5992b5a569445e57340bdf97e83749feecd681a887772c9eb8853e1910de3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d5992b5a569445e57340bdf97e83749feecd681a887772c9eb8853e1910de3b->leave($__internal_0d5992b5a569445e57340bdf97e83749feecd681a887772c9eb8853e1910de3b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ee7c88a74ae0428888a12af7590e42bd7a4695a370b6b724aeb41aa9bee5e168 = $this->env->getExtension("native_profiler");
        $__internal_ee7c88a74ae0428888a12af7590e42bd7a4695a370b6b724aeb41aa9bee5e168->enter($__internal_ee7c88a74ae0428888a12af7590e42bd7a4695a370b6b724aeb41aa9bee5e168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ee7c88a74ae0428888a12af7590e42bd7a4695a370b6b724aeb41aa9bee5e168->leave($__internal_ee7c88a74ae0428888a12af7590e42bd7a4695a370b6b724aeb41aa9bee5e168_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c7a8308378595e2ec30edf533748a268fe99924676b50682fa50cc0770ad2c04 = $this->env->getExtension("native_profiler");
        $__internal_c7a8308378595e2ec30edf533748a268fe99924676b50682fa50cc0770ad2c04->enter($__internal_c7a8308378595e2ec30edf533748a268fe99924676b50682fa50cc0770ad2c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c7a8308378595e2ec30edf533748a268fe99924676b50682fa50cc0770ad2c04->leave($__internal_c7a8308378595e2ec30edf533748a268fe99924676b50682fa50cc0770ad2c04_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_418f656d58f917609659549680e1f6935c23cc88faade671396d82bc7922bb53 = $this->env->getExtension("native_profiler");
        $__internal_418f656d58f917609659549680e1f6935c23cc88faade671396d82bc7922bb53->enter($__internal_418f656d58f917609659549680e1f6935c23cc88faade671396d82bc7922bb53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_418f656d58f917609659549680e1f6935c23cc88faade671396d82bc7922bb53->leave($__internal_418f656d58f917609659549680e1f6935c23cc88faade671396d82bc7922bb53_prof);

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
