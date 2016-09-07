<?php

/* LGPCoreBundle::layout.html.twig */
class __TwigTemplate_d8476ffaff311cac05480954028647d69a878986b7f77f43ea02fe43d90920dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "LGPCoreBundle::layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e86da419e287fa6d304223cfaaff763751a5ded4fe707738193567bcff96e08 = $this->env->getExtension("native_profiler");
        $__internal_2e86da419e287fa6d304223cfaaff763751a5ded4fe707738193567bcff96e08->enter($__internal_2e86da419e287fa6d304223cfaaff763751a5ded4fe707738193567bcff96e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e86da419e287fa6d304223cfaaff763751a5ded4fe707738193567bcff96e08->leave($__internal_2e86da419e287fa6d304223cfaaff763751a5ded4fe707738193567bcff96e08_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed0d215118ea6fdec860362cd12b056dea7b267929835978f3cc0fdd86881651 = $this->env->getExtension("native_profiler");
        $__internal_ed0d215118ea6fdec860362cd12b056dea7b267929835978f3cc0fdd86881651->enter($__internal_ed0d215118ea6fdec860362cd12b056dea7b267929835978f3cc0fdd86881651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_ed0d215118ea6fdec860362cd12b056dea7b267929835978f3cc0fdd86881651->leave($__internal_ed0d215118ea6fdec860362cd12b056dea7b267929835978f3cc0fdd86881651_prof);

    }

    public function getTemplateName()
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
