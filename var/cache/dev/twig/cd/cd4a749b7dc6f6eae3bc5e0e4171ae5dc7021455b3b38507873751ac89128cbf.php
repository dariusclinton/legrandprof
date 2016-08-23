<?php

/* @LGPCore/layout.html.twig */
class __TwigTemplate_129db1a7c18cdf2c8efd1b285948969fd5157eb8c89b733fd29a1b46cfa64f4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "@LGPCore/layout.html.twig", 2);
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
        $__internal_501dbaba55345be624b088d42ef5ca375de3652ad1238c8a63e8dd1a38b123f2 = $this->env->getExtension("native_profiler");
        $__internal_501dbaba55345be624b088d42ef5ca375de3652ad1238c8a63e8dd1a38b123f2->enter($__internal_501dbaba55345be624b088d42ef5ca375de3652ad1238c8a63e8dd1a38b123f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_501dbaba55345be624b088d42ef5ca375de3652ad1238c8a63e8dd1a38b123f2->leave($__internal_501dbaba55345be624b088d42ef5ca375de3652ad1238c8a63e8dd1a38b123f2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_5fd0ecb314d5ee3724ed0676ac0e8fd1c09da44853d074506f62d85895921018 = $this->env->getExtension("native_profiler");
        $__internal_5fd0ecb314d5ee3724ed0676ac0e8fd1c09da44853d074506f62d85895921018->enter($__internal_5fd0ecb314d5ee3724ed0676ac0e8fd1c09da44853d074506f62d85895921018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_5fd0ecb314d5ee3724ed0676ac0e8fd1c09da44853d074506f62d85895921018->leave($__internal_5fd0ecb314d5ee3724ed0676ac0e8fd1c09da44853d074506f62d85895921018_prof);

    }

    public function getTemplateName()
    {
        return "@LGPCore/layout.html.twig";
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
