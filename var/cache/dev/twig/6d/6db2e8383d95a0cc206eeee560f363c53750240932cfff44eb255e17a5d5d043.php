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
        $__internal_f871afccdde64f9d3cd7d6f967225a6b6c2fd39f24044b3dce4352d8b3b8ef99 = $this->env->getExtension("native_profiler");
        $__internal_f871afccdde64f9d3cd7d6f967225a6b6c2fd39f24044b3dce4352d8b3b8ef99->enter($__internal_f871afccdde64f9d3cd7d6f967225a6b6c2fd39f24044b3dce4352d8b3b8ef99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f871afccdde64f9d3cd7d6f967225a6b6c2fd39f24044b3dce4352d8b3b8ef99->leave($__internal_f871afccdde64f9d3cd7d6f967225a6b6c2fd39f24044b3dce4352d8b3b8ef99_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_26d57c7ca3d67194e9f6a455f00046219243253a2870a8fb2553f1d4055bef6c = $this->env->getExtension("native_profiler");
        $__internal_26d57c7ca3d67194e9f6a455f00046219243253a2870a8fb2553f1d4055bef6c->enter($__internal_26d57c7ca3d67194e9f6a455f00046219243253a2870a8fb2553f1d4055bef6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_26d57c7ca3d67194e9f6a455f00046219243253a2870a8fb2553f1d4055bef6c->leave($__internal_26d57c7ca3d67194e9f6a455f00046219243253a2870a8fb2553f1d4055bef6c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_869addefa69b5d17376355092736573afc41a4851812d123204b30025fdb27c1 = $this->env->getExtension("native_profiler");
        $__internal_869addefa69b5d17376355092736573afc41a4851812d123204b30025fdb27c1->enter($__internal_869addefa69b5d17376355092736573afc41a4851812d123204b30025fdb27c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_869addefa69b5d17376355092736573afc41a4851812d123204b30025fdb27c1->leave($__internal_869addefa69b5d17376355092736573afc41a4851812d123204b30025fdb27c1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4c84666d37383ec0772a28dfc5b1d3df23987833687eacbb9b6238d70ee21ff5 = $this->env->getExtension("native_profiler");
        $__internal_4c84666d37383ec0772a28dfc5b1d3df23987833687eacbb9b6238d70ee21ff5->enter($__internal_4c84666d37383ec0772a28dfc5b1d3df23987833687eacbb9b6238d70ee21ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4c84666d37383ec0772a28dfc5b1d3df23987833687eacbb9b6238d70ee21ff5->leave($__internal_4c84666d37383ec0772a28dfc5b1d3df23987833687eacbb9b6238d70ee21ff5_prof);

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
