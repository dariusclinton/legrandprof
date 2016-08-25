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
        $__internal_c066439d72c406a5a1595cad78e9d744a0285766d37d7f3baa6991378d591875 = $this->env->getExtension("native_profiler");
        $__internal_c066439d72c406a5a1595cad78e9d744a0285766d37d7f3baa6991378d591875->enter($__internal_c066439d72c406a5a1595cad78e9d744a0285766d37d7f3baa6991378d591875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c066439d72c406a5a1595cad78e9d744a0285766d37d7f3baa6991378d591875->leave($__internal_c066439d72c406a5a1595cad78e9d744a0285766d37d7f3baa6991378d591875_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bad7958b1668e857cc62fa6c8325d738567e2c31d57845458cbb0ebe186cb6c = $this->env->getExtension("native_profiler");
        $__internal_1bad7958b1668e857cc62fa6c8325d738567e2c31d57845458cbb0ebe186cb6c->enter($__internal_1bad7958b1668e857cc62fa6c8325d738567e2c31d57845458cbb0ebe186cb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_1bad7958b1668e857cc62fa6c8325d738567e2c31d57845458cbb0ebe186cb6c->leave($__internal_1bad7958b1668e857cc62fa6c8325d738567e2c31d57845458cbb0ebe186cb6c_prof);

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
