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
        $__internal_029c5d3629846fab7f1a57c2ec6e7c5019f6b668402b4e2eeca74936428ce34b = $this->env->getExtension("native_profiler");
        $__internal_029c5d3629846fab7f1a57c2ec6e7c5019f6b668402b4e2eeca74936428ce34b->enter($__internal_029c5d3629846fab7f1a57c2ec6e7c5019f6b668402b4e2eeca74936428ce34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_029c5d3629846fab7f1a57c2ec6e7c5019f6b668402b4e2eeca74936428ce34b->leave($__internal_029c5d3629846fab7f1a57c2ec6e7c5019f6b668402b4e2eeca74936428ce34b_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5410871fabff4d9df88df8879a8ab4e16ceb4b651b2a8cff35851cb90db820a = $this->env->getExtension("native_profiler");
        $__internal_c5410871fabff4d9df88df8879a8ab4e16ceb4b651b2a8cff35851cb90db820a->enter($__internal_c5410871fabff4d9df88df8879a8ab4e16ceb4b651b2a8cff35851cb90db820a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_c5410871fabff4d9df88df8879a8ab4e16ceb4b651b2a8cff35851cb90db820a->leave($__internal_c5410871fabff4d9df88df8879a8ab4e16ceb4b651b2a8cff35851cb90db820a_prof);

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
