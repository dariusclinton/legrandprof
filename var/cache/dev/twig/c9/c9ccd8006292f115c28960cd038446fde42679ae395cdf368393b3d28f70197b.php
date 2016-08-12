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
        $__internal_e3ae523bcef14455ce3d00661d4bfcb1a29b6704aeea85e571563c44fe211289 = $this->env->getExtension("native_profiler");
        $__internal_e3ae523bcef14455ce3d00661d4bfcb1a29b6704aeea85e571563c44fe211289->enter($__internal_e3ae523bcef14455ce3d00661d4bfcb1a29b6704aeea85e571563c44fe211289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3ae523bcef14455ce3d00661d4bfcb1a29b6704aeea85e571563c44fe211289->leave($__internal_e3ae523bcef14455ce3d00661d4bfcb1a29b6704aeea85e571563c44fe211289_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b5adab634c074316f8055579363efc0e786f4159817399d17cae8c4912acbc21 = $this->env->getExtension("native_profiler");
        $__internal_b5adab634c074316f8055579363efc0e786f4159817399d17cae8c4912acbc21->enter($__internal_b5adab634c074316f8055579363efc0e786f4159817399d17cae8c4912acbc21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b5adab634c074316f8055579363efc0e786f4159817399d17cae8c4912acbc21->leave($__internal_b5adab634c074316f8055579363efc0e786f4159817399d17cae8c4912acbc21_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3e488a849110a298ce2ad0167b992f0b556884eef09b4a1ee83b10f52bf4e1bb = $this->env->getExtension("native_profiler");
        $__internal_3e488a849110a298ce2ad0167b992f0b556884eef09b4a1ee83b10f52bf4e1bb->enter($__internal_3e488a849110a298ce2ad0167b992f0b556884eef09b4a1ee83b10f52bf4e1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3e488a849110a298ce2ad0167b992f0b556884eef09b4a1ee83b10f52bf4e1bb->leave($__internal_3e488a849110a298ce2ad0167b992f0b556884eef09b4a1ee83b10f52bf4e1bb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8afdb63265618d7d9d7302bb2f6baa2ac2e7cdd827ddbffe6bc2b671d120ca04 = $this->env->getExtension("native_profiler");
        $__internal_8afdb63265618d7d9d7302bb2f6baa2ac2e7cdd827ddbffe6bc2b671d120ca04->enter($__internal_8afdb63265618d7d9d7302bb2f6baa2ac2e7cdd827ddbffe6bc2b671d120ca04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8afdb63265618d7d9d7302bb2f6baa2ac2e7cdd827ddbffe6bc2b671d120ca04->leave($__internal_8afdb63265618d7d9d7302bb2f6baa2ac2e7cdd827ddbffe6bc2b671d120ca04_prof);

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
