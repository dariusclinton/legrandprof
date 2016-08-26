<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c540542da6661f22dd959f9bc2b595fd4127ea0ddbcbb9066e46ee2b63dc1e75 extends Twig_Template
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
        $__internal_69aa92421defea036bfb9b23c9dab82c31960e55ed1760ff9fd1c86a9f1a08eb = $this->env->getExtension("native_profiler");
        $__internal_69aa92421defea036bfb9b23c9dab82c31960e55ed1760ff9fd1c86a9f1a08eb->enter($__internal_69aa92421defea036bfb9b23c9dab82c31960e55ed1760ff9fd1c86a9f1a08eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69aa92421defea036bfb9b23c9dab82c31960e55ed1760ff9fd1c86a9f1a08eb->leave($__internal_69aa92421defea036bfb9b23c9dab82c31960e55ed1760ff9fd1c86a9f1a08eb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c6a99636a9e446a68f16d35ce7653c0f25a993562122c2490fcbecba017584de = $this->env->getExtension("native_profiler");
        $__internal_c6a99636a9e446a68f16d35ce7653c0f25a993562122c2490fcbecba017584de->enter($__internal_c6a99636a9e446a68f16d35ce7653c0f25a993562122c2490fcbecba017584de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c6a99636a9e446a68f16d35ce7653c0f25a993562122c2490fcbecba017584de->leave($__internal_c6a99636a9e446a68f16d35ce7653c0f25a993562122c2490fcbecba017584de_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5235d39a8ecd6e031da70e05b4f161c535244f1f0a4e413b47558b9306c02b34 = $this->env->getExtension("native_profiler");
        $__internal_5235d39a8ecd6e031da70e05b4f161c535244f1f0a4e413b47558b9306c02b34->enter($__internal_5235d39a8ecd6e031da70e05b4f161c535244f1f0a4e413b47558b9306c02b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5235d39a8ecd6e031da70e05b4f161c535244f1f0a4e413b47558b9306c02b34->leave($__internal_5235d39a8ecd6e031da70e05b4f161c535244f1f0a4e413b47558b9306c02b34_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d7a50e529982eb9ed41a06d554794f307a8cd47f01931cb0a2cc21c133eca997 = $this->env->getExtension("native_profiler");
        $__internal_d7a50e529982eb9ed41a06d554794f307a8cd47f01931cb0a2cc21c133eca997->enter($__internal_d7a50e529982eb9ed41a06d554794f307a8cd47f01931cb0a2cc21c133eca997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d7a50e529982eb9ed41a06d554794f307a8cd47f01931cb0a2cc21c133eca997->leave($__internal_d7a50e529982eb9ed41a06d554794f307a8cd47f01931cb0a2cc21c133eca997_prof);

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
