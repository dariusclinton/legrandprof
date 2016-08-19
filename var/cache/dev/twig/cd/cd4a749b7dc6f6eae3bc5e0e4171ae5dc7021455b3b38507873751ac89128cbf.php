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
        $__internal_24198a3d7037b6b9d39de6647b9c23b71740d3f9f1ccbf30018d8faa779316e3 = $this->env->getExtension("native_profiler");
        $__internal_24198a3d7037b6b9d39de6647b9c23b71740d3f9f1ccbf30018d8faa779316e3->enter($__internal_24198a3d7037b6b9d39de6647b9c23b71740d3f9f1ccbf30018d8faa779316e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24198a3d7037b6b9d39de6647b9c23b71740d3f9f1ccbf30018d8faa779316e3->leave($__internal_24198a3d7037b6b9d39de6647b9c23b71740d3f9f1ccbf30018d8faa779316e3_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b777dd76d0254a81aaee08480dde1dce49304d258ce5f009c214607586296fb = $this->env->getExtension("native_profiler");
        $__internal_2b777dd76d0254a81aaee08480dde1dce49304d258ce5f009c214607586296fb->enter($__internal_2b777dd76d0254a81aaee08480dde1dce49304d258ce5f009c214607586296fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_2b777dd76d0254a81aaee08480dde1dce49304d258ce5f009c214607586296fb->leave($__internal_2b777dd76d0254a81aaee08480dde1dce49304d258ce5f009c214607586296fb_prof);

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
