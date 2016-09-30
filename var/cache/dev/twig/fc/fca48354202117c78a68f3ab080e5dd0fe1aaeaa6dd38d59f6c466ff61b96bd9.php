<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f3446a0d7a9ba67f2180fcfc606e57efd00b990511ba88de04fee30b939eb745 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_c84ae999e414aadedde1cf155c0c6187db0158bb30e03f08339cbdb8f0f68fbf = $this->env->getExtension("native_profiler");
        $__internal_c84ae999e414aadedde1cf155c0c6187db0158bb30e03f08339cbdb8f0f68fbf->enter($__internal_c84ae999e414aadedde1cf155c0c6187db0158bb30e03f08339cbdb8f0f68fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c84ae999e414aadedde1cf155c0c6187db0158bb30e03f08339cbdb8f0f68fbf->leave($__internal_c84ae999e414aadedde1cf155c0c6187db0158bb30e03f08339cbdb8f0f68fbf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_21358f19b863b7c46935e439d6e33ac29bad6fb60e58f3b6e107b7740740ba6a = $this->env->getExtension("native_profiler");
        $__internal_21358f19b863b7c46935e439d6e33ac29bad6fb60e58f3b6e107b7740740ba6a->enter($__internal_21358f19b863b7c46935e439d6e33ac29bad6fb60e58f3b6e107b7740740ba6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_21358f19b863b7c46935e439d6e33ac29bad6fb60e58f3b6e107b7740740ba6a->leave($__internal_21358f19b863b7c46935e439d6e33ac29bad6fb60e58f3b6e107b7740740ba6a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6405640929b3f5ddaaa22502ff67452ea20b121ccf59c659b72eb828e1dece08 = $this->env->getExtension("native_profiler");
        $__internal_6405640929b3f5ddaaa22502ff67452ea20b121ccf59c659b72eb828e1dece08->enter($__internal_6405640929b3f5ddaaa22502ff67452ea20b121ccf59c659b72eb828e1dece08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6405640929b3f5ddaaa22502ff67452ea20b121ccf59c659b72eb828e1dece08->leave($__internal_6405640929b3f5ddaaa22502ff67452ea20b121ccf59c659b72eb828e1dece08_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fd9a78fc6397c6f99197b662a9ec5ee03f51a2cce2f8e3920c9e6acc6524268e = $this->env->getExtension("native_profiler");
        $__internal_fd9a78fc6397c6f99197b662a9ec5ee03f51a2cce2f8e3920c9e6acc6524268e->enter($__internal_fd9a78fc6397c6f99197b662a9ec5ee03f51a2cce2f8e3920c9e6acc6524268e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fd9a78fc6397c6f99197b662a9ec5ee03f51a2cce2f8e3920c9e6acc6524268e->leave($__internal_fd9a78fc6397c6f99197b662a9ec5ee03f51a2cce2f8e3920c9e6acc6524268e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
