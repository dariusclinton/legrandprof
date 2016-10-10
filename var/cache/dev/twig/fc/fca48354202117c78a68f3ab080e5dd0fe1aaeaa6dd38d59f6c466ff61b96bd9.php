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
        $__internal_e7608ac95d8c4367781192e1f91dedd46daded5872d5f86d4d2470b0b5118495 = $this->env->getExtension("native_profiler");
        $__internal_e7608ac95d8c4367781192e1f91dedd46daded5872d5f86d4d2470b0b5118495->enter($__internal_e7608ac95d8c4367781192e1f91dedd46daded5872d5f86d4d2470b0b5118495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7608ac95d8c4367781192e1f91dedd46daded5872d5f86d4d2470b0b5118495->leave($__internal_e7608ac95d8c4367781192e1f91dedd46daded5872d5f86d4d2470b0b5118495_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b4af09b6c0522c9239d2d6de46554fb596fc7a46dca8b703a5b6e7c6fc2756b9 = $this->env->getExtension("native_profiler");
        $__internal_b4af09b6c0522c9239d2d6de46554fb596fc7a46dca8b703a5b6e7c6fc2756b9->enter($__internal_b4af09b6c0522c9239d2d6de46554fb596fc7a46dca8b703a5b6e7c6fc2756b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b4af09b6c0522c9239d2d6de46554fb596fc7a46dca8b703a5b6e7c6fc2756b9->leave($__internal_b4af09b6c0522c9239d2d6de46554fb596fc7a46dca8b703a5b6e7c6fc2756b9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f4486cb347175b7ab7f6866fe2e44fe73d023749be92040af1c6bf6c7762b620 = $this->env->getExtension("native_profiler");
        $__internal_f4486cb347175b7ab7f6866fe2e44fe73d023749be92040af1c6bf6c7762b620->enter($__internal_f4486cb347175b7ab7f6866fe2e44fe73d023749be92040af1c6bf6c7762b620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f4486cb347175b7ab7f6866fe2e44fe73d023749be92040af1c6bf6c7762b620->leave($__internal_f4486cb347175b7ab7f6866fe2e44fe73d023749be92040af1c6bf6c7762b620_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_85b98f4f44a6c3522b51d3a9f1ad766ec6845174fc309663e8455c05ac4ae392 = $this->env->getExtension("native_profiler");
        $__internal_85b98f4f44a6c3522b51d3a9f1ad766ec6845174fc309663e8455c05ac4ae392->enter($__internal_85b98f4f44a6c3522b51d3a9f1ad766ec6845174fc309663e8455c05ac4ae392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_85b98f4f44a6c3522b51d3a9f1ad766ec6845174fc309663e8455c05ac4ae392->leave($__internal_85b98f4f44a6c3522b51d3a9f1ad766ec6845174fc309663e8455c05ac4ae392_prof);

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
