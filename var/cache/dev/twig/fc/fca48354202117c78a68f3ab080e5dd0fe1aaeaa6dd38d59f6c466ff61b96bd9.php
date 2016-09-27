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
        $__internal_cd5cf4a3efb97d2be9662490426f56893b191abdad811174153dad0181670d83 = $this->env->getExtension("native_profiler");
        $__internal_cd5cf4a3efb97d2be9662490426f56893b191abdad811174153dad0181670d83->enter($__internal_cd5cf4a3efb97d2be9662490426f56893b191abdad811174153dad0181670d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd5cf4a3efb97d2be9662490426f56893b191abdad811174153dad0181670d83->leave($__internal_cd5cf4a3efb97d2be9662490426f56893b191abdad811174153dad0181670d83_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_32a0f2ef044e63767a0de047405012a4540215a437581567fe48ad1877c54753 = $this->env->getExtension("native_profiler");
        $__internal_32a0f2ef044e63767a0de047405012a4540215a437581567fe48ad1877c54753->enter($__internal_32a0f2ef044e63767a0de047405012a4540215a437581567fe48ad1877c54753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_32a0f2ef044e63767a0de047405012a4540215a437581567fe48ad1877c54753->leave($__internal_32a0f2ef044e63767a0de047405012a4540215a437581567fe48ad1877c54753_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b54680fdc6b06be5a7e1e18e337ac3537ef7d087e7bd7306068de2d3678dfe12 = $this->env->getExtension("native_profiler");
        $__internal_b54680fdc6b06be5a7e1e18e337ac3537ef7d087e7bd7306068de2d3678dfe12->enter($__internal_b54680fdc6b06be5a7e1e18e337ac3537ef7d087e7bd7306068de2d3678dfe12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b54680fdc6b06be5a7e1e18e337ac3537ef7d087e7bd7306068de2d3678dfe12->leave($__internal_b54680fdc6b06be5a7e1e18e337ac3537ef7d087e7bd7306068de2d3678dfe12_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_017d71d4b7a6d7b26547a582a9d29c03da0b4981fd261a3ae37ea83094b79f43 = $this->env->getExtension("native_profiler");
        $__internal_017d71d4b7a6d7b26547a582a9d29c03da0b4981fd261a3ae37ea83094b79f43->enter($__internal_017d71d4b7a6d7b26547a582a9d29c03da0b4981fd261a3ae37ea83094b79f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_017d71d4b7a6d7b26547a582a9d29c03da0b4981fd261a3ae37ea83094b79f43->leave($__internal_017d71d4b7a6d7b26547a582a9d29c03da0b4981fd261a3ae37ea83094b79f43_prof);

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
