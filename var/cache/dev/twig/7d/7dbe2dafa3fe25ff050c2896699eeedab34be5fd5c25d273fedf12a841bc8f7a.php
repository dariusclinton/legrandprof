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
        $__internal_14d6d58b39c0e789070132258374edfece0811342fe94cf94cb5fe2d1935add3 = $this->env->getExtension("native_profiler");
        $__internal_14d6d58b39c0e789070132258374edfece0811342fe94cf94cb5fe2d1935add3->enter($__internal_14d6d58b39c0e789070132258374edfece0811342fe94cf94cb5fe2d1935add3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14d6d58b39c0e789070132258374edfece0811342fe94cf94cb5fe2d1935add3->leave($__internal_14d6d58b39c0e789070132258374edfece0811342fe94cf94cb5fe2d1935add3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e5894b3292f821311d3cb29c4be749ede35336422a29e08c53fa112b4586e8a0 = $this->env->getExtension("native_profiler");
        $__internal_e5894b3292f821311d3cb29c4be749ede35336422a29e08c53fa112b4586e8a0->enter($__internal_e5894b3292f821311d3cb29c4be749ede35336422a29e08c53fa112b4586e8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e5894b3292f821311d3cb29c4be749ede35336422a29e08c53fa112b4586e8a0->leave($__internal_e5894b3292f821311d3cb29c4be749ede35336422a29e08c53fa112b4586e8a0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7cfbe0c3fba7456d67534a93a2fa5c8c6bfb80c490776b1938fd84377276228f = $this->env->getExtension("native_profiler");
        $__internal_7cfbe0c3fba7456d67534a93a2fa5c8c6bfb80c490776b1938fd84377276228f->enter($__internal_7cfbe0c3fba7456d67534a93a2fa5c8c6bfb80c490776b1938fd84377276228f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7cfbe0c3fba7456d67534a93a2fa5c8c6bfb80c490776b1938fd84377276228f->leave($__internal_7cfbe0c3fba7456d67534a93a2fa5c8c6bfb80c490776b1938fd84377276228f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e9e15e9c7c0850f80e908798cd5b348aad6634253c4494595aa59a21de22e85b = $this->env->getExtension("native_profiler");
        $__internal_e9e15e9c7c0850f80e908798cd5b348aad6634253c4494595aa59a21de22e85b->enter($__internal_e9e15e9c7c0850f80e908798cd5b348aad6634253c4494595aa59a21de22e85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e9e15e9c7c0850f80e908798cd5b348aad6634253c4494595aa59a21de22e85b->leave($__internal_e9e15e9c7c0850f80e908798cd5b348aad6634253c4494595aa59a21de22e85b_prof);

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
