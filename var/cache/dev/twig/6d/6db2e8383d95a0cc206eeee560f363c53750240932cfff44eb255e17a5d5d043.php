<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_612fe1cd77c47339cbc2a0e68fcda4ab1300b032dd7be1e2c9885af0eaca677b extends Twig_Template
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
        $__internal_4fe2f6ca390eeea70d63fce01d05102387c180cfbf56830e6feef0285ff53f2d = $this->env->getExtension("native_profiler");
        $__internal_4fe2f6ca390eeea70d63fce01d05102387c180cfbf56830e6feef0285ff53f2d->enter($__internal_4fe2f6ca390eeea70d63fce01d05102387c180cfbf56830e6feef0285ff53f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fe2f6ca390eeea70d63fce01d05102387c180cfbf56830e6feef0285ff53f2d->leave($__internal_4fe2f6ca390eeea70d63fce01d05102387c180cfbf56830e6feef0285ff53f2d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_66d2ecdd4d6426a118189f6599eef5944b936c816716701230b31c7fb05122f0 = $this->env->getExtension("native_profiler");
        $__internal_66d2ecdd4d6426a118189f6599eef5944b936c816716701230b31c7fb05122f0->enter($__internal_66d2ecdd4d6426a118189f6599eef5944b936c816716701230b31c7fb05122f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_66d2ecdd4d6426a118189f6599eef5944b936c816716701230b31c7fb05122f0->leave($__internal_66d2ecdd4d6426a118189f6599eef5944b936c816716701230b31c7fb05122f0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8165e7254bba7e6a3e9cbc493d0d915f720b7dc7e8cd07726012853ba2bf0f52 = $this->env->getExtension("native_profiler");
        $__internal_8165e7254bba7e6a3e9cbc493d0d915f720b7dc7e8cd07726012853ba2bf0f52->enter($__internal_8165e7254bba7e6a3e9cbc493d0d915f720b7dc7e8cd07726012853ba2bf0f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8165e7254bba7e6a3e9cbc493d0d915f720b7dc7e8cd07726012853ba2bf0f52->leave($__internal_8165e7254bba7e6a3e9cbc493d0d915f720b7dc7e8cd07726012853ba2bf0f52_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4483e0ad72ab3bcac460e8f2c4842310b8b9b17e4453e98f4a324db3fba0d8ab = $this->env->getExtension("native_profiler");
        $__internal_4483e0ad72ab3bcac460e8f2c4842310b8b9b17e4453e98f4a324db3fba0d8ab->enter($__internal_4483e0ad72ab3bcac460e8f2c4842310b8b9b17e4453e98f4a324db3fba0d8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4483e0ad72ab3bcac460e8f2c4842310b8b9b17e4453e98f4a324db3fba0d8ab->leave($__internal_4483e0ad72ab3bcac460e8f2c4842310b8b9b17e4453e98f4a324db3fba0d8ab_prof);

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
