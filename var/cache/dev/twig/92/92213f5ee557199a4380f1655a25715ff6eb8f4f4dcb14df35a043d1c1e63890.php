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
        $__internal_6122b0b7ed3a54839beaa92c1473fde668b49379e7ceaba5034c422c34dcd94a = $this->env->getExtension("native_profiler");
        $__internal_6122b0b7ed3a54839beaa92c1473fde668b49379e7ceaba5034c422c34dcd94a->enter($__internal_6122b0b7ed3a54839beaa92c1473fde668b49379e7ceaba5034c422c34dcd94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6122b0b7ed3a54839beaa92c1473fde668b49379e7ceaba5034c422c34dcd94a->leave($__internal_6122b0b7ed3a54839beaa92c1473fde668b49379e7ceaba5034c422c34dcd94a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0476a30d1a426d2d31560695e0f671b5f0d357711ba00e1f22cbb3d78741736a = $this->env->getExtension("native_profiler");
        $__internal_0476a30d1a426d2d31560695e0f671b5f0d357711ba00e1f22cbb3d78741736a->enter($__internal_0476a30d1a426d2d31560695e0f671b5f0d357711ba00e1f22cbb3d78741736a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0476a30d1a426d2d31560695e0f671b5f0d357711ba00e1f22cbb3d78741736a->leave($__internal_0476a30d1a426d2d31560695e0f671b5f0d357711ba00e1f22cbb3d78741736a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e5c6c6a95a9ae52db16a8f86338374f22e1181c9b660fe393b4d70a3739e169d = $this->env->getExtension("native_profiler");
        $__internal_e5c6c6a95a9ae52db16a8f86338374f22e1181c9b660fe393b4d70a3739e169d->enter($__internal_e5c6c6a95a9ae52db16a8f86338374f22e1181c9b660fe393b4d70a3739e169d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e5c6c6a95a9ae52db16a8f86338374f22e1181c9b660fe393b4d70a3739e169d->leave($__internal_e5c6c6a95a9ae52db16a8f86338374f22e1181c9b660fe393b4d70a3739e169d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6dd79d2e6f9eddae312e167215e8d1b3dc804e735160aa415dfc71228fb69d96 = $this->env->getExtension("native_profiler");
        $__internal_6dd79d2e6f9eddae312e167215e8d1b3dc804e735160aa415dfc71228fb69d96->enter($__internal_6dd79d2e6f9eddae312e167215e8d1b3dc804e735160aa415dfc71228fb69d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_6dd79d2e6f9eddae312e167215e8d1b3dc804e735160aa415dfc71228fb69d96->leave($__internal_6dd79d2e6f9eddae312e167215e8d1b3dc804e735160aa415dfc71228fb69d96_prof);

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
