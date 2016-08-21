<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cb60c6cc590b1ea0e5d422b08fb7817a4ab783866cc732629d059d2eba6e5507 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_cea7d15128f61e0b190ad4c4567cee3ac6539f73ffd1f3db86f0ab5b982868e4 = $this->env->getExtension("native_profiler");
        $__internal_cea7d15128f61e0b190ad4c4567cee3ac6539f73ffd1f3db86f0ab5b982868e4->enter($__internal_cea7d15128f61e0b190ad4c4567cee3ac6539f73ffd1f3db86f0ab5b982868e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cea7d15128f61e0b190ad4c4567cee3ac6539f73ffd1f3db86f0ab5b982868e4->leave($__internal_cea7d15128f61e0b190ad4c4567cee3ac6539f73ffd1f3db86f0ab5b982868e4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_10f9f4e9f4a6bdddb9bfb22c3802614d37a21e2d56173e3c0522d89de10fe5a9 = $this->env->getExtension("native_profiler");
        $__internal_10f9f4e9f4a6bdddb9bfb22c3802614d37a21e2d56173e3c0522d89de10fe5a9->enter($__internal_10f9f4e9f4a6bdddb9bfb22c3802614d37a21e2d56173e3c0522d89de10fe5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_10f9f4e9f4a6bdddb9bfb22c3802614d37a21e2d56173e3c0522d89de10fe5a9->leave($__internal_10f9f4e9f4a6bdddb9bfb22c3802614d37a21e2d56173e3c0522d89de10fe5a9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ba44f69ec96da635e0b2d3d591d430e8e74cf8c5ca867580f779a84856ea2570 = $this->env->getExtension("native_profiler");
        $__internal_ba44f69ec96da635e0b2d3d591d430e8e74cf8c5ca867580f779a84856ea2570->enter($__internal_ba44f69ec96da635e0b2d3d591d430e8e74cf8c5ca867580f779a84856ea2570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ba44f69ec96da635e0b2d3d591d430e8e74cf8c5ca867580f779a84856ea2570->leave($__internal_ba44f69ec96da635e0b2d3d591d430e8e74cf8c5ca867580f779a84856ea2570_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fd1873946d1283c13514223e06755cf81146065262ff9dcdceccf0b18b76f128 = $this->env->getExtension("native_profiler");
        $__internal_fd1873946d1283c13514223e06755cf81146065262ff9dcdceccf0b18b76f128->enter($__internal_fd1873946d1283c13514223e06755cf81146065262ff9dcdceccf0b18b76f128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_fd1873946d1283c13514223e06755cf81146065262ff9dcdceccf0b18b76f128->leave($__internal_fd1873946d1283c13514223e06755cf81146065262ff9dcdceccf0b18b76f128_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
