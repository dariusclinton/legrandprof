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
        $__internal_bbea2c12eec764b9dccaa4f924eb6891d47f5f2a10056f1e5873679fe9d4bbdd = $this->env->getExtension("native_profiler");
        $__internal_bbea2c12eec764b9dccaa4f924eb6891d47f5f2a10056f1e5873679fe9d4bbdd->enter($__internal_bbea2c12eec764b9dccaa4f924eb6891d47f5f2a10056f1e5873679fe9d4bbdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbea2c12eec764b9dccaa4f924eb6891d47f5f2a10056f1e5873679fe9d4bbdd->leave($__internal_bbea2c12eec764b9dccaa4f924eb6891d47f5f2a10056f1e5873679fe9d4bbdd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_757788851a348df1634b28fe5f5195f7469a54c72724327f9013681f726f2c84 = $this->env->getExtension("native_profiler");
        $__internal_757788851a348df1634b28fe5f5195f7469a54c72724327f9013681f726f2c84->enter($__internal_757788851a348df1634b28fe5f5195f7469a54c72724327f9013681f726f2c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_757788851a348df1634b28fe5f5195f7469a54c72724327f9013681f726f2c84->leave($__internal_757788851a348df1634b28fe5f5195f7469a54c72724327f9013681f726f2c84_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7f515d700f142ca2377c35b3139cfcbdf793d641784728e85f4b46e10e426cbc = $this->env->getExtension("native_profiler");
        $__internal_7f515d700f142ca2377c35b3139cfcbdf793d641784728e85f4b46e10e426cbc->enter($__internal_7f515d700f142ca2377c35b3139cfcbdf793d641784728e85f4b46e10e426cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7f515d700f142ca2377c35b3139cfcbdf793d641784728e85f4b46e10e426cbc->leave($__internal_7f515d700f142ca2377c35b3139cfcbdf793d641784728e85f4b46e10e426cbc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8093476177b59c38fe0c19ca73f3e572a8e29063a02c5769d98525d770b54955 = $this->env->getExtension("native_profiler");
        $__internal_8093476177b59c38fe0c19ca73f3e572a8e29063a02c5769d98525d770b54955->enter($__internal_8093476177b59c38fe0c19ca73f3e572a8e29063a02c5769d98525d770b54955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8093476177b59c38fe0c19ca73f3e572a8e29063a02c5769d98525d770b54955->leave($__internal_8093476177b59c38fe0c19ca73f3e572a8e29063a02c5769d98525d770b54955_prof);

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
