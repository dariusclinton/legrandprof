<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_dafc26c5342b879f08b03c1a2b61d5789976de4b27dcbd5a24b235428589c573 extends Twig_Template
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
        $__internal_19ab79c0bf0f40b8569a116bb7a1299d0e7796aadcd8d13bd56aa408cee70d20 = $this->env->getExtension("native_profiler");
        $__internal_19ab79c0bf0f40b8569a116bb7a1299d0e7796aadcd8d13bd56aa408cee70d20->enter($__internal_19ab79c0bf0f40b8569a116bb7a1299d0e7796aadcd8d13bd56aa408cee70d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19ab79c0bf0f40b8569a116bb7a1299d0e7796aadcd8d13bd56aa408cee70d20->leave($__internal_19ab79c0bf0f40b8569a116bb7a1299d0e7796aadcd8d13bd56aa408cee70d20_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7e9914848839b807ccfc99ccce6b55faca9dfe158d4b354cdf66ce21fae41868 = $this->env->getExtension("native_profiler");
        $__internal_7e9914848839b807ccfc99ccce6b55faca9dfe158d4b354cdf66ce21fae41868->enter($__internal_7e9914848839b807ccfc99ccce6b55faca9dfe158d4b354cdf66ce21fae41868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7e9914848839b807ccfc99ccce6b55faca9dfe158d4b354cdf66ce21fae41868->leave($__internal_7e9914848839b807ccfc99ccce6b55faca9dfe158d4b354cdf66ce21fae41868_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5810063dc75f9d9145449cc19e87c15e1cf3ba6153d56face89359b71623d1ae = $this->env->getExtension("native_profiler");
        $__internal_5810063dc75f9d9145449cc19e87c15e1cf3ba6153d56face89359b71623d1ae->enter($__internal_5810063dc75f9d9145449cc19e87c15e1cf3ba6153d56face89359b71623d1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5810063dc75f9d9145449cc19e87c15e1cf3ba6153d56face89359b71623d1ae->leave($__internal_5810063dc75f9d9145449cc19e87c15e1cf3ba6153d56face89359b71623d1ae_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_88428f2e7c484707f518d245826bc39dd5da070f423d5403a7f080ad66b87204 = $this->env->getExtension("native_profiler");
        $__internal_88428f2e7c484707f518d245826bc39dd5da070f423d5403a7f080ad66b87204->enter($__internal_88428f2e7c484707f518d245826bc39dd5da070f423d5403a7f080ad66b87204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_88428f2e7c484707f518d245826bc39dd5da070f423d5403a7f080ad66b87204->leave($__internal_88428f2e7c484707f518d245826bc39dd5da070f423d5403a7f080ad66b87204_prof);

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
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
