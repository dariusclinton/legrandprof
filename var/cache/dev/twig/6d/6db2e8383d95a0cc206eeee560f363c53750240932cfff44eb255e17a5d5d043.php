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
        $__internal_f79868672569f8ae1169a81f7024406dac9c5d3f7a77d1c4274b10350393f792 = $this->env->getExtension("native_profiler");
        $__internal_f79868672569f8ae1169a81f7024406dac9c5d3f7a77d1c4274b10350393f792->enter($__internal_f79868672569f8ae1169a81f7024406dac9c5d3f7a77d1c4274b10350393f792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f79868672569f8ae1169a81f7024406dac9c5d3f7a77d1c4274b10350393f792->leave($__internal_f79868672569f8ae1169a81f7024406dac9c5d3f7a77d1c4274b10350393f792_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_22ae1d7fa0246d711dab3a6375d10e385cdb165067ad9c4ab3cff500150f0cb8 = $this->env->getExtension("native_profiler");
        $__internal_22ae1d7fa0246d711dab3a6375d10e385cdb165067ad9c4ab3cff500150f0cb8->enter($__internal_22ae1d7fa0246d711dab3a6375d10e385cdb165067ad9c4ab3cff500150f0cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_22ae1d7fa0246d711dab3a6375d10e385cdb165067ad9c4ab3cff500150f0cb8->leave($__internal_22ae1d7fa0246d711dab3a6375d10e385cdb165067ad9c4ab3cff500150f0cb8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cfc4907054f0eca9f6ae2db16ec3f2a99a22b41c894e3f6ff12c1ec3e4129aae = $this->env->getExtension("native_profiler");
        $__internal_cfc4907054f0eca9f6ae2db16ec3f2a99a22b41c894e3f6ff12c1ec3e4129aae->enter($__internal_cfc4907054f0eca9f6ae2db16ec3f2a99a22b41c894e3f6ff12c1ec3e4129aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cfc4907054f0eca9f6ae2db16ec3f2a99a22b41c894e3f6ff12c1ec3e4129aae->leave($__internal_cfc4907054f0eca9f6ae2db16ec3f2a99a22b41c894e3f6ff12c1ec3e4129aae_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3e29e294e0eb2b629a62ef5a8508f872232390d7c190a749fe906b66667a4d23 = $this->env->getExtension("native_profiler");
        $__internal_3e29e294e0eb2b629a62ef5a8508f872232390d7c190a749fe906b66667a4d23->enter($__internal_3e29e294e0eb2b629a62ef5a8508f872232390d7c190a749fe906b66667a4d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3e29e294e0eb2b629a62ef5a8508f872232390d7c190a749fe906b66667a4d23->leave($__internal_3e29e294e0eb2b629a62ef5a8508f872232390d7c190a749fe906b66667a4d23_prof);

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
