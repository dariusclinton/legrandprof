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
        $__internal_ed74a08dab88a2caf8db473841420daadb271079fcab8210f1c4ac6b4e549a82 = $this->env->getExtension("native_profiler");
        $__internal_ed74a08dab88a2caf8db473841420daadb271079fcab8210f1c4ac6b4e549a82->enter($__internal_ed74a08dab88a2caf8db473841420daadb271079fcab8210f1c4ac6b4e549a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed74a08dab88a2caf8db473841420daadb271079fcab8210f1c4ac6b4e549a82->leave($__internal_ed74a08dab88a2caf8db473841420daadb271079fcab8210f1c4ac6b4e549a82_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_660f834d72e516708e76c9231f65a7493cb847d968090c0541c1198987026ccf = $this->env->getExtension("native_profiler");
        $__internal_660f834d72e516708e76c9231f65a7493cb847d968090c0541c1198987026ccf->enter($__internal_660f834d72e516708e76c9231f65a7493cb847d968090c0541c1198987026ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_660f834d72e516708e76c9231f65a7493cb847d968090c0541c1198987026ccf->leave($__internal_660f834d72e516708e76c9231f65a7493cb847d968090c0541c1198987026ccf_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0323ef789924d56da00c5e33be7e9b4b1fba11aaabb03bb941b7a00d137eed64 = $this->env->getExtension("native_profiler");
        $__internal_0323ef789924d56da00c5e33be7e9b4b1fba11aaabb03bb941b7a00d137eed64->enter($__internal_0323ef789924d56da00c5e33be7e9b4b1fba11aaabb03bb941b7a00d137eed64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_0323ef789924d56da00c5e33be7e9b4b1fba11aaabb03bb941b7a00d137eed64->leave($__internal_0323ef789924d56da00c5e33be7e9b4b1fba11aaabb03bb941b7a00d137eed64_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_36b0f8273bff2db02f09937f3d45a1ae4d5e0aff47f4e2047cde82e830a1ccd7 = $this->env->getExtension("native_profiler");
        $__internal_36b0f8273bff2db02f09937f3d45a1ae4d5e0aff47f4e2047cde82e830a1ccd7->enter($__internal_36b0f8273bff2db02f09937f3d45a1ae4d5e0aff47f4e2047cde82e830a1ccd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_36b0f8273bff2db02f09937f3d45a1ae4d5e0aff47f4e2047cde82e830a1ccd7->leave($__internal_36b0f8273bff2db02f09937f3d45a1ae4d5e0aff47f4e2047cde82e830a1ccd7_prof);

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
