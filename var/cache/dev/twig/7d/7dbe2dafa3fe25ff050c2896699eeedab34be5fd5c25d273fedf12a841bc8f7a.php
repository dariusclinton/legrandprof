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
        $__internal_736a62c935e56a53cf7753141bf1d21ca653c43130c686fbfc9035bf9299158f = $this->env->getExtension("native_profiler");
        $__internal_736a62c935e56a53cf7753141bf1d21ca653c43130c686fbfc9035bf9299158f->enter($__internal_736a62c935e56a53cf7753141bf1d21ca653c43130c686fbfc9035bf9299158f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_736a62c935e56a53cf7753141bf1d21ca653c43130c686fbfc9035bf9299158f->leave($__internal_736a62c935e56a53cf7753141bf1d21ca653c43130c686fbfc9035bf9299158f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_644ce78b983e8c26db309d02c507af3ceeceb82548ccaca38a2dff6860c7f85b = $this->env->getExtension("native_profiler");
        $__internal_644ce78b983e8c26db309d02c507af3ceeceb82548ccaca38a2dff6860c7f85b->enter($__internal_644ce78b983e8c26db309d02c507af3ceeceb82548ccaca38a2dff6860c7f85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_644ce78b983e8c26db309d02c507af3ceeceb82548ccaca38a2dff6860c7f85b->leave($__internal_644ce78b983e8c26db309d02c507af3ceeceb82548ccaca38a2dff6860c7f85b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8b08ef674e4357db8ccda98860f62c2d09cb284a69562a4a27ba318d5de102ed = $this->env->getExtension("native_profiler");
        $__internal_8b08ef674e4357db8ccda98860f62c2d09cb284a69562a4a27ba318d5de102ed->enter($__internal_8b08ef674e4357db8ccda98860f62c2d09cb284a69562a4a27ba318d5de102ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8b08ef674e4357db8ccda98860f62c2d09cb284a69562a4a27ba318d5de102ed->leave($__internal_8b08ef674e4357db8ccda98860f62c2d09cb284a69562a4a27ba318d5de102ed_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_38d0ca52c03fdbe8fb516c22de126c7f72ec6840d58fc573337a8fbe989f1b46 = $this->env->getExtension("native_profiler");
        $__internal_38d0ca52c03fdbe8fb516c22de126c7f72ec6840d58fc573337a8fbe989f1b46->enter($__internal_38d0ca52c03fdbe8fb516c22de126c7f72ec6840d58fc573337a8fbe989f1b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_38d0ca52c03fdbe8fb516c22de126c7f72ec6840d58fc573337a8fbe989f1b46->leave($__internal_38d0ca52c03fdbe8fb516c22de126c7f72ec6840d58fc573337a8fbe989f1b46_prof);

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
