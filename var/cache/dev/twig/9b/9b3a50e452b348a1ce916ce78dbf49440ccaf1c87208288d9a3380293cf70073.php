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
        $__internal_a163ac923fc97041d7618292df927a10acae39a6dcb213a905938be1a25d0143 = $this->env->getExtension("native_profiler");
        $__internal_a163ac923fc97041d7618292df927a10acae39a6dcb213a905938be1a25d0143->enter($__internal_a163ac923fc97041d7618292df927a10acae39a6dcb213a905938be1a25d0143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a163ac923fc97041d7618292df927a10acae39a6dcb213a905938be1a25d0143->leave($__internal_a163ac923fc97041d7618292df927a10acae39a6dcb213a905938be1a25d0143_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dc7fdd33b0afc0c5732581ee6fd2b3cbabb56032e27a95082b2261ffaf8cf5fb = $this->env->getExtension("native_profiler");
        $__internal_dc7fdd33b0afc0c5732581ee6fd2b3cbabb56032e27a95082b2261ffaf8cf5fb->enter($__internal_dc7fdd33b0afc0c5732581ee6fd2b3cbabb56032e27a95082b2261ffaf8cf5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_dc7fdd33b0afc0c5732581ee6fd2b3cbabb56032e27a95082b2261ffaf8cf5fb->leave($__internal_dc7fdd33b0afc0c5732581ee6fd2b3cbabb56032e27a95082b2261ffaf8cf5fb_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e7014ecdf3e2c694ee438cea705133ae00bf8f6de72f5223d4ea5236e521b2dd = $this->env->getExtension("native_profiler");
        $__internal_e7014ecdf3e2c694ee438cea705133ae00bf8f6de72f5223d4ea5236e521b2dd->enter($__internal_e7014ecdf3e2c694ee438cea705133ae00bf8f6de72f5223d4ea5236e521b2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e7014ecdf3e2c694ee438cea705133ae00bf8f6de72f5223d4ea5236e521b2dd->leave($__internal_e7014ecdf3e2c694ee438cea705133ae00bf8f6de72f5223d4ea5236e521b2dd_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0bcf47ad7a4492d05061ff80a471b04d8638368ff5a4d4d1f265ccab9297613b = $this->env->getExtension("native_profiler");
        $__internal_0bcf47ad7a4492d05061ff80a471b04d8638368ff5a4d4d1f265ccab9297613b->enter($__internal_0bcf47ad7a4492d05061ff80a471b04d8638368ff5a4d4d1f265ccab9297613b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_0bcf47ad7a4492d05061ff80a471b04d8638368ff5a4d4d1f265ccab9297613b->leave($__internal_0bcf47ad7a4492d05061ff80a471b04d8638368ff5a4d4d1f265ccab9297613b_prof);

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
