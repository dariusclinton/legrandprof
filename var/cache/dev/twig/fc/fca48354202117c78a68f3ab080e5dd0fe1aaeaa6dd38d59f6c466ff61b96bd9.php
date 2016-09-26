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
        $__internal_52ffe9fd2a9adebe75de7c708d92089c7ad5671633e241a7014129973ecdc8e0 = $this->env->getExtension("native_profiler");
        $__internal_52ffe9fd2a9adebe75de7c708d92089c7ad5671633e241a7014129973ecdc8e0->enter($__internal_52ffe9fd2a9adebe75de7c708d92089c7ad5671633e241a7014129973ecdc8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52ffe9fd2a9adebe75de7c708d92089c7ad5671633e241a7014129973ecdc8e0->leave($__internal_52ffe9fd2a9adebe75de7c708d92089c7ad5671633e241a7014129973ecdc8e0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_09dbbef2d9ae827cbc63b61629f19107e42801a7348d8caab7077f52a45f58ae = $this->env->getExtension("native_profiler");
        $__internal_09dbbef2d9ae827cbc63b61629f19107e42801a7348d8caab7077f52a45f58ae->enter($__internal_09dbbef2d9ae827cbc63b61629f19107e42801a7348d8caab7077f52a45f58ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_09dbbef2d9ae827cbc63b61629f19107e42801a7348d8caab7077f52a45f58ae->leave($__internal_09dbbef2d9ae827cbc63b61629f19107e42801a7348d8caab7077f52a45f58ae_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_34ccaf35b52307f03e7c37aa2ebf2ae60439cc6e2b67a0020dba8cb88ea2a433 = $this->env->getExtension("native_profiler");
        $__internal_34ccaf35b52307f03e7c37aa2ebf2ae60439cc6e2b67a0020dba8cb88ea2a433->enter($__internal_34ccaf35b52307f03e7c37aa2ebf2ae60439cc6e2b67a0020dba8cb88ea2a433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_34ccaf35b52307f03e7c37aa2ebf2ae60439cc6e2b67a0020dba8cb88ea2a433->leave($__internal_34ccaf35b52307f03e7c37aa2ebf2ae60439cc6e2b67a0020dba8cb88ea2a433_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5531b84238c836ff8c46fb160fb0206572cbd73ae41f7e29714d301ffb58c488 = $this->env->getExtension("native_profiler");
        $__internal_5531b84238c836ff8c46fb160fb0206572cbd73ae41f7e29714d301ffb58c488->enter($__internal_5531b84238c836ff8c46fb160fb0206572cbd73ae41f7e29714d301ffb58c488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5531b84238c836ff8c46fb160fb0206572cbd73ae41f7e29714d301ffb58c488->leave($__internal_5531b84238c836ff8c46fb160fb0206572cbd73ae41f7e29714d301ffb58c488_prof);

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
