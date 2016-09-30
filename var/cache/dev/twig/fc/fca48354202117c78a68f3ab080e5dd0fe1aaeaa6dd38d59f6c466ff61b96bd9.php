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
        $__internal_aacb71b668ff7e3a1c042cbaf65f0b58739b276aff6e6eddcbce340dce2510b1 = $this->env->getExtension("native_profiler");
        $__internal_aacb71b668ff7e3a1c042cbaf65f0b58739b276aff6e6eddcbce340dce2510b1->enter($__internal_aacb71b668ff7e3a1c042cbaf65f0b58739b276aff6e6eddcbce340dce2510b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aacb71b668ff7e3a1c042cbaf65f0b58739b276aff6e6eddcbce340dce2510b1->leave($__internal_aacb71b668ff7e3a1c042cbaf65f0b58739b276aff6e6eddcbce340dce2510b1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_894bbb11ae8362480d74fb5ec72dbeca14d692e391eb59d10bf9f4939ba73381 = $this->env->getExtension("native_profiler");
        $__internal_894bbb11ae8362480d74fb5ec72dbeca14d692e391eb59d10bf9f4939ba73381->enter($__internal_894bbb11ae8362480d74fb5ec72dbeca14d692e391eb59d10bf9f4939ba73381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_894bbb11ae8362480d74fb5ec72dbeca14d692e391eb59d10bf9f4939ba73381->leave($__internal_894bbb11ae8362480d74fb5ec72dbeca14d692e391eb59d10bf9f4939ba73381_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_520423366853d8430226b8e0b3684e1c4828684f5621d8cbbc5afa26298421d4 = $this->env->getExtension("native_profiler");
        $__internal_520423366853d8430226b8e0b3684e1c4828684f5621d8cbbc5afa26298421d4->enter($__internal_520423366853d8430226b8e0b3684e1c4828684f5621d8cbbc5afa26298421d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_520423366853d8430226b8e0b3684e1c4828684f5621d8cbbc5afa26298421d4->leave($__internal_520423366853d8430226b8e0b3684e1c4828684f5621d8cbbc5afa26298421d4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5d0c276c84c8a5bda73da9969a8617599e46e287013978f24bdea25ea6b12165 = $this->env->getExtension("native_profiler");
        $__internal_5d0c276c84c8a5bda73da9969a8617599e46e287013978f24bdea25ea6b12165->enter($__internal_5d0c276c84c8a5bda73da9969a8617599e46e287013978f24bdea25ea6b12165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5d0c276c84c8a5bda73da9969a8617599e46e287013978f24bdea25ea6b12165->leave($__internal_5d0c276c84c8a5bda73da9969a8617599e46e287013978f24bdea25ea6b12165_prof);

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
