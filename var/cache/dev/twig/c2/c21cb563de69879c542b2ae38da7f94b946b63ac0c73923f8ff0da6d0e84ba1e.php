<?php

/* @LGPUser/Avis/update.html.twig */
class __TwigTemplate_955b54a18d8a4ef0ae1b19e13e7af0dde5d84259786d02f20247146380ab4be3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPUser/Avis/update.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c55f1f435758fe1a150b15d6ca5d6f286c7f809a9c247984c2f6f8a9cb6284d4 = $this->env->getExtension("native_profiler");
        $__internal_c55f1f435758fe1a150b15d6ca5d6f286c7f809a9c247984c2f6f8a9cb6284d4->enter($__internal_c55f1f435758fe1a150b15d6ca5d6f286c7f809a9c247984c2f6f8a9cb6284d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Avis/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c55f1f435758fe1a150b15d6ca5d6f286c7f809a9c247984c2f6f8a9cb6284d4->leave($__internal_c55f1f435758fe1a150b15d6ca5d6f286c7f809a9c247984c2f6f8a9cb6284d4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a670c2cff67c4a3bf85c1bfb3882890f252b216ce61e805367a33402113bc327 = $this->env->getExtension("native_profiler");
        $__internal_a670c2cff67c4a3bf85c1bfb3882890f252b216ce61e805367a33402113bc327->enter($__internal_a670c2cff67c4a3bf85c1bfb3882890f252b216ce61e805367a33402113bc327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a670c2cff67c4a3bf85c1bfb3882890f252b216ce61e805367a33402113bc327->leave($__internal_a670c2cff67c4a3bf85c1bfb3882890f252b216ce61e805367a33402113bc327_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8cc7643eb1d5ccd54e8a4a1779446a0208fd12af64296b7469d55f6ab83c8f09 = $this->env->getExtension("native_profiler");
        $__internal_8cc7643eb1d5ccd54e8a4a1779446a0208fd12af64296b7469d55f6ab83c8f09->enter($__internal_8cc7643eb1d5ccd54e8a4a1779446a0208fd12af64296b7469d55f6ab83c8f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "@LGPUser/Avis/update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_8cc7643eb1d5ccd54e8a4a1779446a0208fd12af64296b7469d55f6ab83c8f09->leave($__internal_8cc7643eb1d5ccd54e8a4a1779446a0208fd12af64296b7469d55f6ab83c8f09_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Avis/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  61 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LGPCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modification d'un avis - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <h1>Modification d'un avis</h1>*/
/* */
/*   {% include 'LGPUserBundle:Avis:formulaire.html.twig'%}*/
/*   */
/* {% endblock %}*/
