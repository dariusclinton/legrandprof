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
        $__internal_0bf849f02f875e34dbdf65f98afd28d2b78722ba04f7f687acd4cbfc51e12447 = $this->env->getExtension("native_profiler");
        $__internal_0bf849f02f875e34dbdf65f98afd28d2b78722ba04f7f687acd4cbfc51e12447->enter($__internal_0bf849f02f875e34dbdf65f98afd28d2b78722ba04f7f687acd4cbfc51e12447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bf849f02f875e34dbdf65f98afd28d2b78722ba04f7f687acd4cbfc51e12447->leave($__internal_0bf849f02f875e34dbdf65f98afd28d2b78722ba04f7f687acd4cbfc51e12447_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aa7c7ba2d44e5429f0fc5c2d7a93860c609c4570aa8faba277d1d1b2c6d00161 = $this->env->getExtension("native_profiler");
        $__internal_aa7c7ba2d44e5429f0fc5c2d7a93860c609c4570aa8faba277d1d1b2c6d00161->enter($__internal_aa7c7ba2d44e5429f0fc5c2d7a93860c609c4570aa8faba277d1d1b2c6d00161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_aa7c7ba2d44e5429f0fc5c2d7a93860c609c4570aa8faba277d1d1b2c6d00161->leave($__internal_aa7c7ba2d44e5429f0fc5c2d7a93860c609c4570aa8faba277d1d1b2c6d00161_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_37e9cbbd824e815de76fb14fe9f9e3659fe82fe336fb5e1b00b66b48e4c56745 = $this->env->getExtension("native_profiler");
        $__internal_37e9cbbd824e815de76fb14fe9f9e3659fe82fe336fb5e1b00b66b48e4c56745->enter($__internal_37e9cbbd824e815de76fb14fe9f9e3659fe82fe336fb5e1b00b66b48e4c56745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_37e9cbbd824e815de76fb14fe9f9e3659fe82fe336fb5e1b00b66b48e4c56745->leave($__internal_37e9cbbd824e815de76fb14fe9f9e3659fe82fe336fb5e1b00b66b48e4c56745_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_660a7744d64017b7b6b3cd6acd576985355a071295bcb8d49070594e8870cf59 = $this->env->getExtension("native_profiler");
        $__internal_660a7744d64017b7b6b3cd6acd576985355a071295bcb8d49070594e8870cf59->enter($__internal_660a7744d64017b7b6b3cd6acd576985355a071295bcb8d49070594e8870cf59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_660a7744d64017b7b6b3cd6acd576985355a071295bcb8d49070594e8870cf59->leave($__internal_660a7744d64017b7b6b3cd6acd576985355a071295bcb8d49070594e8870cf59_prof);

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
