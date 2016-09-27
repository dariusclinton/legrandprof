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
        $__internal_4c6d50aa4bef4aae81e639da710859c2bb07040b92a49e0ab1e669a27d6ec255 = $this->env->getExtension("native_profiler");
        $__internal_4c6d50aa4bef4aae81e639da710859c2bb07040b92a49e0ab1e669a27d6ec255->enter($__internal_4c6d50aa4bef4aae81e639da710859c2bb07040b92a49e0ab1e669a27d6ec255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c6d50aa4bef4aae81e639da710859c2bb07040b92a49e0ab1e669a27d6ec255->leave($__internal_4c6d50aa4bef4aae81e639da710859c2bb07040b92a49e0ab1e669a27d6ec255_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_72207510410dfd522e684577c0f53e5796232b068bf7baf49c01942811f4f4f7 = $this->env->getExtension("native_profiler");
        $__internal_72207510410dfd522e684577c0f53e5796232b068bf7baf49c01942811f4f4f7->enter($__internal_72207510410dfd522e684577c0f53e5796232b068bf7baf49c01942811f4f4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_72207510410dfd522e684577c0f53e5796232b068bf7baf49c01942811f4f4f7->leave($__internal_72207510410dfd522e684577c0f53e5796232b068bf7baf49c01942811f4f4f7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_77356fb23afa50fa146a2e232fec7d2d0c3b91057b79c1ad0f23627d009b74ec = $this->env->getExtension("native_profiler");
        $__internal_77356fb23afa50fa146a2e232fec7d2d0c3b91057b79c1ad0f23627d009b74ec->enter($__internal_77356fb23afa50fa146a2e232fec7d2d0c3b91057b79c1ad0f23627d009b74ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_77356fb23afa50fa146a2e232fec7d2d0c3b91057b79c1ad0f23627d009b74ec->leave($__internal_77356fb23afa50fa146a2e232fec7d2d0c3b91057b79c1ad0f23627d009b74ec_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fdc258a46182349f6e43568e55df27c1e2056796d48c5fdc071a4f248ed88288 = $this->env->getExtension("native_profiler");
        $__internal_fdc258a46182349f6e43568e55df27c1e2056796d48c5fdc071a4f248ed88288->enter($__internal_fdc258a46182349f6e43568e55df27c1e2056796d48c5fdc071a4f248ed88288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fdc258a46182349f6e43568e55df27c1e2056796d48c5fdc071a4f248ed88288->leave($__internal_fdc258a46182349f6e43568e55df27c1e2056796d48c5fdc071a4f248ed88288_prof);

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
