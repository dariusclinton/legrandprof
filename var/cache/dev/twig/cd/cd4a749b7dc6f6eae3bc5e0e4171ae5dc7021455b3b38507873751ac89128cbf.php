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
        $__internal_76a3aa0ab9061c7e71b3cae0ff3067eb2cacf20f25bd8cbcba688af41493527a = $this->env->getExtension("native_profiler");
        $__internal_76a3aa0ab9061c7e71b3cae0ff3067eb2cacf20f25bd8cbcba688af41493527a->enter($__internal_76a3aa0ab9061c7e71b3cae0ff3067eb2cacf20f25bd8cbcba688af41493527a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76a3aa0ab9061c7e71b3cae0ff3067eb2cacf20f25bd8cbcba688af41493527a->leave($__internal_76a3aa0ab9061c7e71b3cae0ff3067eb2cacf20f25bd8cbcba688af41493527a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_21cb6384e8bd5aee13a116ae5de35b2c082d09e1574c948c2a7914844ff06862 = $this->env->getExtension("native_profiler");
        $__internal_21cb6384e8bd5aee13a116ae5de35b2c082d09e1574c948c2a7914844ff06862->enter($__internal_21cb6384e8bd5aee13a116ae5de35b2c082d09e1574c948c2a7914844ff06862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_21cb6384e8bd5aee13a116ae5de35b2c082d09e1574c948c2a7914844ff06862->leave($__internal_21cb6384e8bd5aee13a116ae5de35b2c082d09e1574c948c2a7914844ff06862_prof);

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
