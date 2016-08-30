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
        $__internal_0a3c78113ca622deb17ccb029eb9f0de6e2cc73fbe06cb0995a88f6e55082b0b = $this->env->getExtension("native_profiler");
        $__internal_0a3c78113ca622deb17ccb029eb9f0de6e2cc73fbe06cb0995a88f6e55082b0b->enter($__internal_0a3c78113ca622deb17ccb029eb9f0de6e2cc73fbe06cb0995a88f6e55082b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a3c78113ca622deb17ccb029eb9f0de6e2cc73fbe06cb0995a88f6e55082b0b->leave($__internal_0a3c78113ca622deb17ccb029eb9f0de6e2cc73fbe06cb0995a88f6e55082b0b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e0a2794fd4368e0bb9bdadae02c40a06046b90c61ab88729648d497a9b4e41d8 = $this->env->getExtension("native_profiler");
        $__internal_e0a2794fd4368e0bb9bdadae02c40a06046b90c61ab88729648d497a9b4e41d8->enter($__internal_e0a2794fd4368e0bb9bdadae02c40a06046b90c61ab88729648d497a9b4e41d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e0a2794fd4368e0bb9bdadae02c40a06046b90c61ab88729648d497a9b4e41d8->leave($__internal_e0a2794fd4368e0bb9bdadae02c40a06046b90c61ab88729648d497a9b4e41d8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c4a96f498f8b3db324813358712c0127038a7587a3f80dcc9a9d0d9e977d1f31 = $this->env->getExtension("native_profiler");
        $__internal_c4a96f498f8b3db324813358712c0127038a7587a3f80dcc9a9d0d9e977d1f31->enter($__internal_c4a96f498f8b3db324813358712c0127038a7587a3f80dcc9a9d0d9e977d1f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c4a96f498f8b3db324813358712c0127038a7587a3f80dcc9a9d0d9e977d1f31->leave($__internal_c4a96f498f8b3db324813358712c0127038a7587a3f80dcc9a9d0d9e977d1f31_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_df24fff24d0f7da6837ae0fb953c0ae2ff1b83588677a5541085b56ab9256d62 = $this->env->getExtension("native_profiler");
        $__internal_df24fff24d0f7da6837ae0fb953c0ae2ff1b83588677a5541085b56ab9256d62->enter($__internal_df24fff24d0f7da6837ae0fb953c0ae2ff1b83588677a5541085b56ab9256d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_df24fff24d0f7da6837ae0fb953c0ae2ff1b83588677a5541085b56ab9256d62->leave($__internal_df24fff24d0f7da6837ae0fb953c0ae2ff1b83588677a5541085b56ab9256d62_prof);

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
