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
        $__internal_c60a799dd05c33fef2cccab5d5f505db9e21875cdd2b880055859a1ef93dde91 = $this->env->getExtension("native_profiler");
        $__internal_c60a799dd05c33fef2cccab5d5f505db9e21875cdd2b880055859a1ef93dde91->enter($__internal_c60a799dd05c33fef2cccab5d5f505db9e21875cdd2b880055859a1ef93dde91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c60a799dd05c33fef2cccab5d5f505db9e21875cdd2b880055859a1ef93dde91->leave($__internal_c60a799dd05c33fef2cccab5d5f505db9e21875cdd2b880055859a1ef93dde91_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0d4071f4217f6c1681a727d8eddd65be52c5898fd7799038839d6a69335d671 = $this->env->getExtension("native_profiler");
        $__internal_a0d4071f4217f6c1681a727d8eddd65be52c5898fd7799038839d6a69335d671->enter($__internal_a0d4071f4217f6c1681a727d8eddd65be52c5898fd7799038839d6a69335d671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_a0d4071f4217f6c1681a727d8eddd65be52c5898fd7799038839d6a69335d671->leave($__internal_a0d4071f4217f6c1681a727d8eddd65be52c5898fd7799038839d6a69335d671_prof);

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
