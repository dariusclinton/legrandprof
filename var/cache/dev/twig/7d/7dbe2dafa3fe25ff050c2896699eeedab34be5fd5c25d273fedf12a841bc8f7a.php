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
        $__internal_95e138419afc7a630d797885155a77174a80e497923c067bd0498b852ee07ff4 = $this->env->getExtension("native_profiler");
        $__internal_95e138419afc7a630d797885155a77174a80e497923c067bd0498b852ee07ff4->enter($__internal_95e138419afc7a630d797885155a77174a80e497923c067bd0498b852ee07ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95e138419afc7a630d797885155a77174a80e497923c067bd0498b852ee07ff4->leave($__internal_95e138419afc7a630d797885155a77174a80e497923c067bd0498b852ee07ff4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_54712d88e6b2c9037d006358a60b4dfb72ee2e83916f8f0b8fa6655a1a5de0c6 = $this->env->getExtension("native_profiler");
        $__internal_54712d88e6b2c9037d006358a60b4dfb72ee2e83916f8f0b8fa6655a1a5de0c6->enter($__internal_54712d88e6b2c9037d006358a60b4dfb72ee2e83916f8f0b8fa6655a1a5de0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_54712d88e6b2c9037d006358a60b4dfb72ee2e83916f8f0b8fa6655a1a5de0c6->leave($__internal_54712d88e6b2c9037d006358a60b4dfb72ee2e83916f8f0b8fa6655a1a5de0c6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d9898db0e1b427efab6336574bd2de2d085a0aefa9dd0097771199063f83f1ef = $this->env->getExtension("native_profiler");
        $__internal_d9898db0e1b427efab6336574bd2de2d085a0aefa9dd0097771199063f83f1ef->enter($__internal_d9898db0e1b427efab6336574bd2de2d085a0aefa9dd0097771199063f83f1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d9898db0e1b427efab6336574bd2de2d085a0aefa9dd0097771199063f83f1ef->leave($__internal_d9898db0e1b427efab6336574bd2de2d085a0aefa9dd0097771199063f83f1ef_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_da578ea6afd7ff4b14292dd892ca0f47fa7dea3749b4b13ee89da3a8ff8f99ee = $this->env->getExtension("native_profiler");
        $__internal_da578ea6afd7ff4b14292dd892ca0f47fa7dea3749b4b13ee89da3a8ff8f99ee->enter($__internal_da578ea6afd7ff4b14292dd892ca0f47fa7dea3749b4b13ee89da3a8ff8f99ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_da578ea6afd7ff4b14292dd892ca0f47fa7dea3749b4b13ee89da3a8ff8f99ee->leave($__internal_da578ea6afd7ff4b14292dd892ca0f47fa7dea3749b4b13ee89da3a8ff8f99ee_prof);

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
