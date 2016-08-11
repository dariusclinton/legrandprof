<?php

/* LGPCoreBundle::layout.html.twig */
class __TwigTemplate_d8476ffaff311cac05480954028647d69a878986b7f77f43ea02fe43d90920dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "LGPCoreBundle::layout.html.twig", 2);
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
        $__internal_40b71dd88d83f832353d4703817af2fae1b91bdbbf73b9054d520a65119b32eb = $this->env->getExtension("native_profiler");
        $__internal_40b71dd88d83f832353d4703817af2fae1b91bdbbf73b9054d520a65119b32eb->enter($__internal_40b71dd88d83f832353d4703817af2fae1b91bdbbf73b9054d520a65119b32eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40b71dd88d83f832353d4703817af2fae1b91bdbbf73b9054d520a65119b32eb->leave($__internal_40b71dd88d83f832353d4703817af2fae1b91bdbbf73b9054d520a65119b32eb_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_17b140093d0ac69190f569f31ae9cff7683f62f87c32f05732cc19b68be10225 = $this->env->getExtension("native_profiler");
        $__internal_17b140093d0ac69190f569f31ae9cff7683f62f87c32f05732cc19b68be10225->enter($__internal_17b140093d0ac69190f569f31ae9cff7683f62f87c32f05732cc19b68be10225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_17b140093d0ac69190f569f31ae9cff7683f62f87c32f05732cc19b68be10225->leave($__internal_17b140093d0ac69190f569f31ae9cff7683f62f87c32f05732cc19b68be10225_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a7c914df90c0c97be3ebac1900c33cf3c88fcd8863da4cb31a55e662c722a24 = $this->env->getExtension("native_profiler");
        $__internal_1a7c914df90c0c97be3ebac1900c33cf3c88fcd8863da4cb31a55e662c722a24->enter($__internal_1a7c914df90c0c97be3ebac1900c33cf3c88fcd8863da4cb31a55e662c722a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    
    
 
";
        
        $__internal_1a7c914df90c0c97be3ebac1900c33cf3c88fcd8863da4cb31a55e662c722a24->leave($__internal_1a7c914df90c0c97be3ebac1900c33cf3c88fcd8863da4cb31a55e662c722a24_prof);

    }

    public function getTemplateName()
    {
        return "LGPCoreBundle::layout.html.twig";
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
