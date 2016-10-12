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
        $__internal_8ac5f4047cc8bff5e25b49fa06df33a70d7d82baa8537d884363dca0cfb59d99 = $this->env->getExtension("native_profiler");
        $__internal_8ac5f4047cc8bff5e25b49fa06df33a70d7d82baa8537d884363dca0cfb59d99->enter($__internal_8ac5f4047cc8bff5e25b49fa06df33a70d7d82baa8537d884363dca0cfb59d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ac5f4047cc8bff5e25b49fa06df33a70d7d82baa8537d884363dca0cfb59d99->leave($__internal_8ac5f4047cc8bff5e25b49fa06df33a70d7d82baa8537d884363dca0cfb59d99_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_611b368908391ec0da54769ac56ad42de33916ba8f7d322a3ad02f0449b32945 = $this->env->getExtension("native_profiler");
        $__internal_611b368908391ec0da54769ac56ad42de33916ba8f7d322a3ad02f0449b32945->enter($__internal_611b368908391ec0da54769ac56ad42de33916ba8f7d322a3ad02f0449b32945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_611b368908391ec0da54769ac56ad42de33916ba8f7d322a3ad02f0449b32945->leave($__internal_611b368908391ec0da54769ac56ad42de33916ba8f7d322a3ad02f0449b32945_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_827d618fa175eba369213c291edaa7504a32e1bad45def36017af0df807ae1bb = $this->env->getExtension("native_profiler");
        $__internal_827d618fa175eba369213c291edaa7504a32e1bad45def36017af0df807ae1bb->enter($__internal_827d618fa175eba369213c291edaa7504a32e1bad45def36017af0df807ae1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_827d618fa175eba369213c291edaa7504a32e1bad45def36017af0df807ae1bb->leave($__internal_827d618fa175eba369213c291edaa7504a32e1bad45def36017af0df807ae1bb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ce1576e9faa550f347dfc5a18f7a9ddb921c07d024954ef2eb49c4a9f00b4ab5 = $this->env->getExtension("native_profiler");
        $__internal_ce1576e9faa550f347dfc5a18f7a9ddb921c07d024954ef2eb49c4a9f00b4ab5->enter($__internal_ce1576e9faa550f347dfc5a18f7a9ddb921c07d024954ef2eb49c4a9f00b4ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ce1576e9faa550f347dfc5a18f7a9ddb921c07d024954ef2eb49c4a9f00b4ab5->leave($__internal_ce1576e9faa550f347dfc5a18f7a9ddb921c07d024954ef2eb49c4a9f00b4ab5_prof);

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
