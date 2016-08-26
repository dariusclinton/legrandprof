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
        $__internal_b9629e6b35d603d6346fa07b5668638d67ea1165739a1a0eb2d5e28d6a3e96c3 = $this->env->getExtension("native_profiler");
        $__internal_b9629e6b35d603d6346fa07b5668638d67ea1165739a1a0eb2d5e28d6a3e96c3->enter($__internal_b9629e6b35d603d6346fa07b5668638d67ea1165739a1a0eb2d5e28d6a3e96c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9629e6b35d603d6346fa07b5668638d67ea1165739a1a0eb2d5e28d6a3e96c3->leave($__internal_b9629e6b35d603d6346fa07b5668638d67ea1165739a1a0eb2d5e28d6a3e96c3_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2dcfa61c5fa9aecea8192fd4180994464a8c642b86429427bbf4354c4feb2e5 = $this->env->getExtension("native_profiler");
        $__internal_b2dcfa61c5fa9aecea8192fd4180994464a8c642b86429427bbf4354c4feb2e5->enter($__internal_b2dcfa61c5fa9aecea8192fd4180994464a8c642b86429427bbf4354c4feb2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_b2dcfa61c5fa9aecea8192fd4180994464a8c642b86429427bbf4354c4feb2e5->leave($__internal_b2dcfa61c5fa9aecea8192fd4180994464a8c642b86429427bbf4354c4feb2e5_prof);

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
