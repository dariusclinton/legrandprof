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
        $__internal_e26fce120985d2b455f406d4e2c3d1be056765444a98d10109d7523c4d588d5f = $this->env->getExtension("native_profiler");
        $__internal_e26fce120985d2b455f406d4e2c3d1be056765444a98d10109d7523c4d588d5f->enter($__internal_e26fce120985d2b455f406d4e2c3d1be056765444a98d10109d7523c4d588d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e26fce120985d2b455f406d4e2c3d1be056765444a98d10109d7523c4d588d5f->leave($__internal_e26fce120985d2b455f406d4e2c3d1be056765444a98d10109d7523c4d588d5f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a7570cfec10e251c5c33a98d0321a700f6ba9d5d63a14f83dfefdc809a7e7b37 = $this->env->getExtension("native_profiler");
        $__internal_a7570cfec10e251c5c33a98d0321a700f6ba9d5d63a14f83dfefdc809a7e7b37->enter($__internal_a7570cfec10e251c5c33a98d0321a700f6ba9d5d63a14f83dfefdc809a7e7b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a7570cfec10e251c5c33a98d0321a700f6ba9d5d63a14f83dfefdc809a7e7b37->leave($__internal_a7570cfec10e251c5c33a98d0321a700f6ba9d5d63a14f83dfefdc809a7e7b37_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f47802fd4af51324bc1931edaca93ad64ffa1d613267eebf91bc93d139f2fa3b = $this->env->getExtension("native_profiler");
        $__internal_f47802fd4af51324bc1931edaca93ad64ffa1d613267eebf91bc93d139f2fa3b->enter($__internal_f47802fd4af51324bc1931edaca93ad64ffa1d613267eebf91bc93d139f2fa3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f47802fd4af51324bc1931edaca93ad64ffa1d613267eebf91bc93d139f2fa3b->leave($__internal_f47802fd4af51324bc1931edaca93ad64ffa1d613267eebf91bc93d139f2fa3b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_830ddeb64b8203d43dc29a1310f745be223f9c624559b38fd345736c3ea93e4d = $this->env->getExtension("native_profiler");
        $__internal_830ddeb64b8203d43dc29a1310f745be223f9c624559b38fd345736c3ea93e4d->enter($__internal_830ddeb64b8203d43dc29a1310f745be223f9c624559b38fd345736c3ea93e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_830ddeb64b8203d43dc29a1310f745be223f9c624559b38fd345736c3ea93e4d->leave($__internal_830ddeb64b8203d43dc29a1310f745be223f9c624559b38fd345736c3ea93e4d_prof);

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
