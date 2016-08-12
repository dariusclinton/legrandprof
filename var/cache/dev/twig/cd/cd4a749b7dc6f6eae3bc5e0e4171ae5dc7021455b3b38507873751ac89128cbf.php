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
        $__internal_f6b742c11cce16100fb4ca98880e4dfb1c77e33bfae270bc4e007c97feb71e42 = $this->env->getExtension("native_profiler");
        $__internal_f6b742c11cce16100fb4ca98880e4dfb1c77e33bfae270bc4e007c97feb71e42->enter($__internal_f6b742c11cce16100fb4ca98880e4dfb1c77e33bfae270bc4e007c97feb71e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6b742c11cce16100fb4ca98880e4dfb1c77e33bfae270bc4e007c97feb71e42->leave($__internal_f6b742c11cce16100fb4ca98880e4dfb1c77e33bfae270bc4e007c97feb71e42_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_be051651b9ff07d7f26c33f6ab5037e8b172d1607884ef124342022edad28187 = $this->env->getExtension("native_profiler");
        $__internal_be051651b9ff07d7f26c33f6ab5037e8b172d1607884ef124342022edad28187->enter($__internal_be051651b9ff07d7f26c33f6ab5037e8b172d1607884ef124342022edad28187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_be051651b9ff07d7f26c33f6ab5037e8b172d1607884ef124342022edad28187->leave($__internal_be051651b9ff07d7f26c33f6ab5037e8b172d1607884ef124342022edad28187_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_df01901b8415cc173a7f391ea79810579d5e130c0d22a2d683c62b45eb7dc5c8 = $this->env->getExtension("native_profiler");
        $__internal_df01901b8415cc173a7f391ea79810579d5e130c0d22a2d683c62b45eb7dc5c8->enter($__internal_df01901b8415cc173a7f391ea79810579d5e130c0d22a2d683c62b45eb7dc5c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    
    
 
";
        
        $__internal_df01901b8415cc173a7f391ea79810579d5e130c0d22a2d683c62b45eb7dc5c8->leave($__internal_df01901b8415cc173a7f391ea79810579d5e130c0d22a2d683c62b45eb7dc5c8_prof);

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
