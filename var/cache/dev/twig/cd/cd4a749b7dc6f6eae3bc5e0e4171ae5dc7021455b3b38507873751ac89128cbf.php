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
        $__internal_4a33202355ab3647c9bebd90db4342784c134418ae480f1bd3c7ce125c121a34 = $this->env->getExtension("native_profiler");
        $__internal_4a33202355ab3647c9bebd90db4342784c134418ae480f1bd3c7ce125c121a34->enter($__internal_4a33202355ab3647c9bebd90db4342784c134418ae480f1bd3c7ce125c121a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a33202355ab3647c9bebd90db4342784c134418ae480f1bd3c7ce125c121a34->leave($__internal_4a33202355ab3647c9bebd90db4342784c134418ae480f1bd3c7ce125c121a34_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_88d03b9f1a09f44edc15921516fe3aaa6b089c0730f723e31fbdf5026e312aee = $this->env->getExtension("native_profiler");
        $__internal_88d03b9f1a09f44edc15921516fe3aaa6b089c0730f723e31fbdf5026e312aee->enter($__internal_88d03b9f1a09f44edc15921516fe3aaa6b089c0730f723e31fbdf5026e312aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_88d03b9f1a09f44edc15921516fe3aaa6b089c0730f723e31fbdf5026e312aee->leave($__internal_88d03b9f1a09f44edc15921516fe3aaa6b089c0730f723e31fbdf5026e312aee_prof);

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
