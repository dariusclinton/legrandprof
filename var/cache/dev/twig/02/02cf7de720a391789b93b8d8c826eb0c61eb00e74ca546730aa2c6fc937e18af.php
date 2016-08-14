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
        $__internal_ee6a0349efcb111b28f71b088e768573d5e895cbd48ff6f383f98f84d687098b = $this->env->getExtension("native_profiler");
        $__internal_ee6a0349efcb111b28f71b088e768573d5e895cbd48ff6f383f98f84d687098b->enter($__internal_ee6a0349efcb111b28f71b088e768573d5e895cbd48ff6f383f98f84d687098b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee6a0349efcb111b28f71b088e768573d5e895cbd48ff6f383f98f84d687098b->leave($__internal_ee6a0349efcb111b28f71b088e768573d5e895cbd48ff6f383f98f84d687098b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_44856435be3c2ed838886c7be91de39359243d84513de77f5c1a360624ca5590 = $this->env->getExtension("native_profiler");
        $__internal_44856435be3c2ed838886c7be91de39359243d84513de77f5c1a360624ca5590->enter($__internal_44856435be3c2ed838886c7be91de39359243d84513de77f5c1a360624ca5590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_44856435be3c2ed838886c7be91de39359243d84513de77f5c1a360624ca5590->leave($__internal_44856435be3c2ed838886c7be91de39359243d84513de77f5c1a360624ca5590_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_235c80d776695d1a985468d173c2665a517e3a1be42f3e6f74f3e53c4f082a20 = $this->env->getExtension("native_profiler");
        $__internal_235c80d776695d1a985468d173c2665a517e3a1be42f3e6f74f3e53c4f082a20->enter($__internal_235c80d776695d1a985468d173c2665a517e3a1be42f3e6f74f3e53c4f082a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_235c80d776695d1a985468d173c2665a517e3a1be42f3e6f74f3e53c4f082a20->leave($__internal_235c80d776695d1a985468d173c2665a517e3a1be42f3e6f74f3e53c4f082a20_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bdad0046f9ff021eee71c066141c6a3309f0b42f3013187fa130b5ae541f66b1 = $this->env->getExtension("native_profiler");
        $__internal_bdad0046f9ff021eee71c066141c6a3309f0b42f3013187fa130b5ae541f66b1->enter($__internal_bdad0046f9ff021eee71c066141c6a3309f0b42f3013187fa130b5ae541f66b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_bdad0046f9ff021eee71c066141c6a3309f0b42f3013187fa130b5ae541f66b1->leave($__internal_bdad0046f9ff021eee71c066141c6a3309f0b42f3013187fa130b5ae541f66b1_prof);

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
