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
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_747d32330c33de6089ebe953d293bc0dba008aeb8e85de9bd96e7bd2f7a0a5fc = $this->env->getExtension("native_profiler");
        $__internal_747d32330c33de6089ebe953d293bc0dba008aeb8e85de9bd96e7bd2f7a0a5fc->enter($__internal_747d32330c33de6089ebe953d293bc0dba008aeb8e85de9bd96e7bd2f7a0a5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_747d32330c33de6089ebe953d293bc0dba008aeb8e85de9bd96e7bd2f7a0a5fc->leave($__internal_747d32330c33de6089ebe953d293bc0dba008aeb8e85de9bd96e7bd2f7a0a5fc_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_4daf08e17fb3ea5e4e3461948805cc6fd1f086aa531262c55055fcc99ccd25fe = $this->env->getExtension("native_profiler");
        $__internal_4daf08e17fb3ea5e4e3461948805cc6fd1f086aa531262c55055fcc99ccd25fe->enter($__internal_4daf08e17fb3ea5e4e3461948805cc6fd1f086aa531262c55055fcc99ccd25fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4daf08e17fb3ea5e4e3461948805cc6fd1f086aa531262c55055fcc99ccd25fe->leave($__internal_4daf08e17fb3ea5e4e3461948805cc6fd1f086aa531262c55055fcc99ccd25fe_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_437e43a191923a952c563d60ee053ed0e2bc17b4409d6df1a5b75cfa527cdbfa = $this->env->getExtension("native_profiler");
        $__internal_437e43a191923a952c563d60ee053ed0e2bc17b4409d6df1a5b75cfa527cdbfa->enter($__internal_437e43a191923a952c563d60ee053ed0e2bc17b4409d6df1a5b75cfa527cdbfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    
    
 
";
        
        $__internal_437e43a191923a952c563d60ee053ed0e2bc17b4409d6df1a5b75cfa527cdbfa->leave($__internal_437e43a191923a952c563d60ee053ed0e2bc17b4409d6df1a5b75cfa527cdbfa_prof);

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
        return array (  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     */
/*     */
/*  */
/* {% endblock %}*/
