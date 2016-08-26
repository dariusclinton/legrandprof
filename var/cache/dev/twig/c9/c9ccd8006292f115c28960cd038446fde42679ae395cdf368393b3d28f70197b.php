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
        $__internal_e854e2141ed808018b99d0719c515e9dd3e522238acd901dd01defe8cafbe8ae = $this->env->getExtension("native_profiler");
        $__internal_e854e2141ed808018b99d0719c515e9dd3e522238acd901dd01defe8cafbe8ae->enter($__internal_e854e2141ed808018b99d0719c515e9dd3e522238acd901dd01defe8cafbe8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e854e2141ed808018b99d0719c515e9dd3e522238acd901dd01defe8cafbe8ae->leave($__internal_e854e2141ed808018b99d0719c515e9dd3e522238acd901dd01defe8cafbe8ae_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_12b3ec0f3b3ad0063759314df13042099ee02fdd55e6942c1d8cc6d8ad61bd8f = $this->env->getExtension("native_profiler");
        $__internal_12b3ec0f3b3ad0063759314df13042099ee02fdd55e6942c1d8cc6d8ad61bd8f->enter($__internal_12b3ec0f3b3ad0063759314df13042099ee02fdd55e6942c1d8cc6d8ad61bd8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_12b3ec0f3b3ad0063759314df13042099ee02fdd55e6942c1d8cc6d8ad61bd8f->leave($__internal_12b3ec0f3b3ad0063759314df13042099ee02fdd55e6942c1d8cc6d8ad61bd8f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d4c99abbe2ee7632d66810ba15525bcaf74b7e9835214882f5093506091195fd = $this->env->getExtension("native_profiler");
        $__internal_d4c99abbe2ee7632d66810ba15525bcaf74b7e9835214882f5093506091195fd->enter($__internal_d4c99abbe2ee7632d66810ba15525bcaf74b7e9835214882f5093506091195fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d4c99abbe2ee7632d66810ba15525bcaf74b7e9835214882f5093506091195fd->leave($__internal_d4c99abbe2ee7632d66810ba15525bcaf74b7e9835214882f5093506091195fd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_48e6ab8ca184fdc61fc2609cd3074173e6ead0affacf5cecbe9d13e710f4e1ea = $this->env->getExtension("native_profiler");
        $__internal_48e6ab8ca184fdc61fc2609cd3074173e6ead0affacf5cecbe9d13e710f4e1ea->enter($__internal_48e6ab8ca184fdc61fc2609cd3074173e6ead0affacf5cecbe9d13e710f4e1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_48e6ab8ca184fdc61fc2609cd3074173e6ead0affacf5cecbe9d13e710f4e1ea->leave($__internal_48e6ab8ca184fdc61fc2609cd3074173e6ead0affacf5cecbe9d13e710f4e1ea_prof);

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
