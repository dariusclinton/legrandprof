<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_f3446a0d7a9ba67f2180fcfc606e57efd00b990511ba88de04fee30b939eb745 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_9d6b39cc8cfcdce5bc7271219b543e04e299295af18d406ee761233a226b86b6 = $this->env->getExtension("native_profiler");
        $__internal_9d6b39cc8cfcdce5bc7271219b543e04e299295af18d406ee761233a226b86b6->enter($__internal_9d6b39cc8cfcdce5bc7271219b543e04e299295af18d406ee761233a226b86b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d6b39cc8cfcdce5bc7271219b543e04e299295af18d406ee761233a226b86b6->leave($__internal_9d6b39cc8cfcdce5bc7271219b543e04e299295af18d406ee761233a226b86b6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b15c883e90538c663b8c3917ad7b066312376f5ccdab3f2ebd91f0c66e292591 = $this->env->getExtension("native_profiler");
        $__internal_b15c883e90538c663b8c3917ad7b066312376f5ccdab3f2ebd91f0c66e292591->enter($__internal_b15c883e90538c663b8c3917ad7b066312376f5ccdab3f2ebd91f0c66e292591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b15c883e90538c663b8c3917ad7b066312376f5ccdab3f2ebd91f0c66e292591->leave($__internal_b15c883e90538c663b8c3917ad7b066312376f5ccdab3f2ebd91f0c66e292591_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_07aa76d56c0489bf3bbf09c547385783dc00387dca4727f2598aef56988177da = $this->env->getExtension("native_profiler");
        $__internal_07aa76d56c0489bf3bbf09c547385783dc00387dca4727f2598aef56988177da->enter($__internal_07aa76d56c0489bf3bbf09c547385783dc00387dca4727f2598aef56988177da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_07aa76d56c0489bf3bbf09c547385783dc00387dca4727f2598aef56988177da->leave($__internal_07aa76d56c0489bf3bbf09c547385783dc00387dca4727f2598aef56988177da_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3af1c38bf3e69babc689612e972e397f0d5630cd06d61856047ad8e9b0727156 = $this->env->getExtension("native_profiler");
        $__internal_3af1c38bf3e69babc689612e972e397f0d5630cd06d61856047ad8e9b0727156->enter($__internal_3af1c38bf3e69babc689612e972e397f0d5630cd06d61856047ad8e9b0727156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3af1c38bf3e69babc689612e972e397f0d5630cd06d61856047ad8e9b0727156->leave($__internal_3af1c38bf3e69babc689612e972e397f0d5630cd06d61856047ad8e9b0727156_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
