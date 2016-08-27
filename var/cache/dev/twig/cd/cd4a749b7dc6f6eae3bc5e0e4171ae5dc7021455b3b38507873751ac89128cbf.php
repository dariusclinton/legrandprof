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
        $__internal_0f2e60bdbad7f122e07043b49b123266d8788e5ea00e42062e70116154cdb34c = $this->env->getExtension("native_profiler");
        $__internal_0f2e60bdbad7f122e07043b49b123266d8788e5ea00e42062e70116154cdb34c->enter($__internal_0f2e60bdbad7f122e07043b49b123266d8788e5ea00e42062e70116154cdb34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f2e60bdbad7f122e07043b49b123266d8788e5ea00e42062e70116154cdb34c->leave($__internal_0f2e60bdbad7f122e07043b49b123266d8788e5ea00e42062e70116154cdb34c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab05c4149e5e854f8368939c4b0fb7b4ff158d6dffd3816aea677eaa5531372b = $this->env->getExtension("native_profiler");
        $__internal_ab05c4149e5e854f8368939c4b0fb7b4ff158d6dffd3816aea677eaa5531372b->enter($__internal_ab05c4149e5e854f8368939c4b0fb7b4ff158d6dffd3816aea677eaa5531372b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_ab05c4149e5e854f8368939c4b0fb7b4ff158d6dffd3816aea677eaa5531372b->leave($__internal_ab05c4149e5e854f8368939c4b0fb7b4ff158d6dffd3816aea677eaa5531372b_prof);

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
