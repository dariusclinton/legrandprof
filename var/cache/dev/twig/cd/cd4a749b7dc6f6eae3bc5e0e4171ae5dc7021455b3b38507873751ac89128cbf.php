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
        $__internal_a6dccfa138b50b622c0c6accbdf47b5c8850ad5b9b1e532fafc05a006a992f95 = $this->env->getExtension("native_profiler");
        $__internal_a6dccfa138b50b622c0c6accbdf47b5c8850ad5b9b1e532fafc05a006a992f95->enter($__internal_a6dccfa138b50b622c0c6accbdf47b5c8850ad5b9b1e532fafc05a006a992f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6dccfa138b50b622c0c6accbdf47b5c8850ad5b9b1e532fafc05a006a992f95->leave($__internal_a6dccfa138b50b622c0c6accbdf47b5c8850ad5b9b1e532fafc05a006a992f95_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_0153524383fddd7972f6f2722fa2f84529868d7969cb76e557cb7dfb40b8f8de = $this->env->getExtension("native_profiler");
        $__internal_0153524383fddd7972f6f2722fa2f84529868d7969cb76e557cb7dfb40b8f8de->enter($__internal_0153524383fddd7972f6f2722fa2f84529868d7969cb76e557cb7dfb40b8f8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_0153524383fddd7972f6f2722fa2f84529868d7969cb76e557cb7dfb40b8f8de->leave($__internal_0153524383fddd7972f6f2722fa2f84529868d7969cb76e557cb7dfb40b8f8de_prof);

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
