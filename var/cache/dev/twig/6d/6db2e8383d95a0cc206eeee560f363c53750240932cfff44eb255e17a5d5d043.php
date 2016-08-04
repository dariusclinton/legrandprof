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
        $__internal_1a80eadad45e6785c4b771608810bf260eed61d9e0d13c61ca2d4fafa7145d40 = $this->env->getExtension("native_profiler");
        $__internal_1a80eadad45e6785c4b771608810bf260eed61d9e0d13c61ca2d4fafa7145d40->enter($__internal_1a80eadad45e6785c4b771608810bf260eed61d9e0d13c61ca2d4fafa7145d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a80eadad45e6785c4b771608810bf260eed61d9e0d13c61ca2d4fafa7145d40->leave($__internal_1a80eadad45e6785c4b771608810bf260eed61d9e0d13c61ca2d4fafa7145d40_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6424780aa68dd230504f8a12a112f6fefab28a6e702ec578b960eb09ef52012e = $this->env->getExtension("native_profiler");
        $__internal_6424780aa68dd230504f8a12a112f6fefab28a6e702ec578b960eb09ef52012e->enter($__internal_6424780aa68dd230504f8a12a112f6fefab28a6e702ec578b960eb09ef52012e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6424780aa68dd230504f8a12a112f6fefab28a6e702ec578b960eb09ef52012e->leave($__internal_6424780aa68dd230504f8a12a112f6fefab28a6e702ec578b960eb09ef52012e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_461e73dcac8c5d0d4c3b640cc794b84dad927a6247fffa022d651911d569f5f6 = $this->env->getExtension("native_profiler");
        $__internal_461e73dcac8c5d0d4c3b640cc794b84dad927a6247fffa022d651911d569f5f6->enter($__internal_461e73dcac8c5d0d4c3b640cc794b84dad927a6247fffa022d651911d569f5f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_461e73dcac8c5d0d4c3b640cc794b84dad927a6247fffa022d651911d569f5f6->leave($__internal_461e73dcac8c5d0d4c3b640cc794b84dad927a6247fffa022d651911d569f5f6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4c1eeee0a8998527b9e56b10543bf4fb2fa34769aa7bf226c7916976d3c18c77 = $this->env->getExtension("native_profiler");
        $__internal_4c1eeee0a8998527b9e56b10543bf4fb2fa34769aa7bf226c7916976d3c18c77->enter($__internal_4c1eeee0a8998527b9e56b10543bf4fb2fa34769aa7bf226c7916976d3c18c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4c1eeee0a8998527b9e56b10543bf4fb2fa34769aa7bf226c7916976d3c18c77->leave($__internal_4c1eeee0a8998527b9e56b10543bf4fb2fa34769aa7bf226c7916976d3c18c77_prof);

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
