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
        $__internal_fa150356fe76e38137cae119ac9c648bcc6b50b2f8a9de54a4ec9844cbb821e2 = $this->env->getExtension("native_profiler");
        $__internal_fa150356fe76e38137cae119ac9c648bcc6b50b2f8a9de54a4ec9844cbb821e2->enter($__internal_fa150356fe76e38137cae119ac9c648bcc6b50b2f8a9de54a4ec9844cbb821e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa150356fe76e38137cae119ac9c648bcc6b50b2f8a9de54a4ec9844cbb821e2->leave($__internal_fa150356fe76e38137cae119ac9c648bcc6b50b2f8a9de54a4ec9844cbb821e2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_b32d77bd3b4822595ca7545f5ee0ee34fed8a9746e52bb3df01aec52c08145eb = $this->env->getExtension("native_profiler");
        $__internal_b32d77bd3b4822595ca7545f5ee0ee34fed8a9746e52bb3df01aec52c08145eb->enter($__internal_b32d77bd3b4822595ca7545f5ee0ee34fed8a9746e52bb3df01aec52c08145eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_b32d77bd3b4822595ca7545f5ee0ee34fed8a9746e52bb3df01aec52c08145eb->leave($__internal_b32d77bd3b4822595ca7545f5ee0ee34fed8a9746e52bb3df01aec52c08145eb_prof);

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
