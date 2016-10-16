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
        $__internal_659e6f7405bce14b103fbc372a89201aaae0138e7744ce1cbcff597729b827fd = $this->env->getExtension("native_profiler");
        $__internal_659e6f7405bce14b103fbc372a89201aaae0138e7744ce1cbcff597729b827fd->enter($__internal_659e6f7405bce14b103fbc372a89201aaae0138e7744ce1cbcff597729b827fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_659e6f7405bce14b103fbc372a89201aaae0138e7744ce1cbcff597729b827fd->leave($__internal_659e6f7405bce14b103fbc372a89201aaae0138e7744ce1cbcff597729b827fd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1108e3075de4b4902e7a1935510c9ba1f53dccbeff559c0a3d5c4a7779899a4a = $this->env->getExtension("native_profiler");
        $__internal_1108e3075de4b4902e7a1935510c9ba1f53dccbeff559c0a3d5c4a7779899a4a->enter($__internal_1108e3075de4b4902e7a1935510c9ba1f53dccbeff559c0a3d5c4a7779899a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1108e3075de4b4902e7a1935510c9ba1f53dccbeff559c0a3d5c4a7779899a4a->leave($__internal_1108e3075de4b4902e7a1935510c9ba1f53dccbeff559c0a3d5c4a7779899a4a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c9c3e0bc37ecec304db39fa95cd1b6d216fba164d9e80610b8049ebe82b25aa7 = $this->env->getExtension("native_profiler");
        $__internal_c9c3e0bc37ecec304db39fa95cd1b6d216fba164d9e80610b8049ebe82b25aa7->enter($__internal_c9c3e0bc37ecec304db39fa95cd1b6d216fba164d9e80610b8049ebe82b25aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c9c3e0bc37ecec304db39fa95cd1b6d216fba164d9e80610b8049ebe82b25aa7->leave($__internal_c9c3e0bc37ecec304db39fa95cd1b6d216fba164d9e80610b8049ebe82b25aa7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e0b7df8c040e22708de915fed22e07f5891faad43b21eab2c45b7a61205c4b02 = $this->env->getExtension("native_profiler");
        $__internal_e0b7df8c040e22708de915fed22e07f5891faad43b21eab2c45b7a61205c4b02->enter($__internal_e0b7df8c040e22708de915fed22e07f5891faad43b21eab2c45b7a61205c4b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e0b7df8c040e22708de915fed22e07f5891faad43b21eab2c45b7a61205c4b02->leave($__internal_e0b7df8c040e22708de915fed22e07f5891faad43b21eab2c45b7a61205c4b02_prof);

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
