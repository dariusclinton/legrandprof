<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_38887153551eb9daa8b9f1a4e0515b3c4ae05262e8bafb81244d7d6130bc2292 extends Twig_Template
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
        $__internal_ea16b60d73a0f284e454c63346d87d2ac55a2177e898c0927a08da7538c5e8b3 = $this->env->getExtension("native_profiler");
        $__internal_ea16b60d73a0f284e454c63346d87d2ac55a2177e898c0927a08da7538c5e8b3->enter($__internal_ea16b60d73a0f284e454c63346d87d2ac55a2177e898c0927a08da7538c5e8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea16b60d73a0f284e454c63346d87d2ac55a2177e898c0927a08da7538c5e8b3->leave($__internal_ea16b60d73a0f284e454c63346d87d2ac55a2177e898c0927a08da7538c5e8b3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_69f98587abbb6be08a9105f8123bd37a6fc626c51a0dd8c0e66c5e09bc434ac4 = $this->env->getExtension("native_profiler");
        $__internal_69f98587abbb6be08a9105f8123bd37a6fc626c51a0dd8c0e66c5e09bc434ac4->enter($__internal_69f98587abbb6be08a9105f8123bd37a6fc626c51a0dd8c0e66c5e09bc434ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_69f98587abbb6be08a9105f8123bd37a6fc626c51a0dd8c0e66c5e09bc434ac4->leave($__internal_69f98587abbb6be08a9105f8123bd37a6fc626c51a0dd8c0e66c5e09bc434ac4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d10cf791041c223e11d2916039b455dd0d50a72c1b453de085a5f8b640cbd6e7 = $this->env->getExtension("native_profiler");
        $__internal_d10cf791041c223e11d2916039b455dd0d50a72c1b453de085a5f8b640cbd6e7->enter($__internal_d10cf791041c223e11d2916039b455dd0d50a72c1b453de085a5f8b640cbd6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d10cf791041c223e11d2916039b455dd0d50a72c1b453de085a5f8b640cbd6e7->leave($__internal_d10cf791041c223e11d2916039b455dd0d50a72c1b453de085a5f8b640cbd6e7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_03c2d4e28cb61d681c950538161238268d3fbe973652937657d66fa2e1fd146f = $this->env->getExtension("native_profiler");
        $__internal_03c2d4e28cb61d681c950538161238268d3fbe973652937657d66fa2e1fd146f->enter($__internal_03c2d4e28cb61d681c950538161238268d3fbe973652937657d66fa2e1fd146f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_03c2d4e28cb61d681c950538161238268d3fbe973652937657d66fa2e1fd146f->leave($__internal_03c2d4e28cb61d681c950538161238268d3fbe973652937657d66fa2e1fd146f_prof);

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
