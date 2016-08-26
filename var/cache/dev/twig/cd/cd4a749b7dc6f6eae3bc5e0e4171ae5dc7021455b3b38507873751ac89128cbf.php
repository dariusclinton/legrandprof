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
        $__internal_d6edc670040f1c880a6f6687435d970297093b5f62f7c828ba8a051a8ae2faac = $this->env->getExtension("native_profiler");
        $__internal_d6edc670040f1c880a6f6687435d970297093b5f62f7c828ba8a051a8ae2faac->enter($__internal_d6edc670040f1c880a6f6687435d970297093b5f62f7c828ba8a051a8ae2faac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6edc670040f1c880a6f6687435d970297093b5f62f7c828ba8a051a8ae2faac->leave($__internal_d6edc670040f1c880a6f6687435d970297093b5f62f7c828ba8a051a8ae2faac_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f145d0eac1abcf21ba8c36392c7bdc78fd55e4a2bac12b0450643c743d0a6791 = $this->env->getExtension("native_profiler");
        $__internal_f145d0eac1abcf21ba8c36392c7bdc78fd55e4a2bac12b0450643c743d0a6791->enter($__internal_f145d0eac1abcf21ba8c36392c7bdc78fd55e4a2bac12b0450643c743d0a6791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_f145d0eac1abcf21ba8c36392c7bdc78fd55e4a2bac12b0450643c743d0a6791->leave($__internal_f145d0eac1abcf21ba8c36392c7bdc78fd55e4a2bac12b0450643c743d0a6791_prof);

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
