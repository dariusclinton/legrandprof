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
        $__internal_487a77b6c32dab72ff265ffeffc5e42565a11d68af54ec0bc6a9baecc5a464ed = $this->env->getExtension("native_profiler");
        $__internal_487a77b6c32dab72ff265ffeffc5e42565a11d68af54ec0bc6a9baecc5a464ed->enter($__internal_487a77b6c32dab72ff265ffeffc5e42565a11d68af54ec0bc6a9baecc5a464ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_487a77b6c32dab72ff265ffeffc5e42565a11d68af54ec0bc6a9baecc5a464ed->leave($__internal_487a77b6c32dab72ff265ffeffc5e42565a11d68af54ec0bc6a9baecc5a464ed_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a259fea8c9cf6be62f19e7e64ae332bf20f56172c302d88cfd62290271492f2e = $this->env->getExtension("native_profiler");
        $__internal_a259fea8c9cf6be62f19e7e64ae332bf20f56172c302d88cfd62290271492f2e->enter($__internal_a259fea8c9cf6be62f19e7e64ae332bf20f56172c302d88cfd62290271492f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a259fea8c9cf6be62f19e7e64ae332bf20f56172c302d88cfd62290271492f2e->leave($__internal_a259fea8c9cf6be62f19e7e64ae332bf20f56172c302d88cfd62290271492f2e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_88d47992df862c8cb3b354702d630ddc24ca9206225c52d843f05501a520fcd5 = $this->env->getExtension("native_profiler");
        $__internal_88d47992df862c8cb3b354702d630ddc24ca9206225c52d843f05501a520fcd5->enter($__internal_88d47992df862c8cb3b354702d630ddc24ca9206225c52d843f05501a520fcd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_88d47992df862c8cb3b354702d630ddc24ca9206225c52d843f05501a520fcd5->leave($__internal_88d47992df862c8cb3b354702d630ddc24ca9206225c52d843f05501a520fcd5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_90d0464b1629e100569285a945e7791b3371b3a50def4294df24cfe259226e0f = $this->env->getExtension("native_profiler");
        $__internal_90d0464b1629e100569285a945e7791b3371b3a50def4294df24cfe259226e0f->enter($__internal_90d0464b1629e100569285a945e7791b3371b3a50def4294df24cfe259226e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_90d0464b1629e100569285a945e7791b3371b3a50def4294df24cfe259226e0f->leave($__internal_90d0464b1629e100569285a945e7791b3371b3a50def4294df24cfe259226e0f_prof);

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
