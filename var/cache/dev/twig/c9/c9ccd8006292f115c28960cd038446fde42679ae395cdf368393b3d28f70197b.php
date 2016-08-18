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
        $__internal_2e8d2ad554f387cf0a7f891bd00e742b072e795ad115dbc6a3bfd10b0f23adf5 = $this->env->getExtension("native_profiler");
        $__internal_2e8d2ad554f387cf0a7f891bd00e742b072e795ad115dbc6a3bfd10b0f23adf5->enter($__internal_2e8d2ad554f387cf0a7f891bd00e742b072e795ad115dbc6a3bfd10b0f23adf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e8d2ad554f387cf0a7f891bd00e742b072e795ad115dbc6a3bfd10b0f23adf5->leave($__internal_2e8d2ad554f387cf0a7f891bd00e742b072e795ad115dbc6a3bfd10b0f23adf5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_06f0ad09bbea6db1baca0bea6442e2ff9626d29c01a195c69ae0f35eceddcc6e = $this->env->getExtension("native_profiler");
        $__internal_06f0ad09bbea6db1baca0bea6442e2ff9626d29c01a195c69ae0f35eceddcc6e->enter($__internal_06f0ad09bbea6db1baca0bea6442e2ff9626d29c01a195c69ae0f35eceddcc6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_06f0ad09bbea6db1baca0bea6442e2ff9626d29c01a195c69ae0f35eceddcc6e->leave($__internal_06f0ad09bbea6db1baca0bea6442e2ff9626d29c01a195c69ae0f35eceddcc6e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3323c2c05d99c74e3997e083240ae575d3dd2ad1107a3d98d8212a511d423c4c = $this->env->getExtension("native_profiler");
        $__internal_3323c2c05d99c74e3997e083240ae575d3dd2ad1107a3d98d8212a511d423c4c->enter($__internal_3323c2c05d99c74e3997e083240ae575d3dd2ad1107a3d98d8212a511d423c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3323c2c05d99c74e3997e083240ae575d3dd2ad1107a3d98d8212a511d423c4c->leave($__internal_3323c2c05d99c74e3997e083240ae575d3dd2ad1107a3d98d8212a511d423c4c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cd2a267ad35aa860bb5d3ae7d651aecb53fa287005d72adaffdaab873b3a40d5 = $this->env->getExtension("native_profiler");
        $__internal_cd2a267ad35aa860bb5d3ae7d651aecb53fa287005d72adaffdaab873b3a40d5->enter($__internal_cd2a267ad35aa860bb5d3ae7d651aecb53fa287005d72adaffdaab873b3a40d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cd2a267ad35aa860bb5d3ae7d651aecb53fa287005d72adaffdaab873b3a40d5->leave($__internal_cd2a267ad35aa860bb5d3ae7d651aecb53fa287005d72adaffdaab873b3a40d5_prof);

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
