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
        $__internal_6c47d2bd568e3a5b33bf2a803460254a0e0c4afc006b0d7d361dac0fcfec0b44 = $this->env->getExtension("native_profiler");
        $__internal_6c47d2bd568e3a5b33bf2a803460254a0e0c4afc006b0d7d361dac0fcfec0b44->enter($__internal_6c47d2bd568e3a5b33bf2a803460254a0e0c4afc006b0d7d361dac0fcfec0b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c47d2bd568e3a5b33bf2a803460254a0e0c4afc006b0d7d361dac0fcfec0b44->leave($__internal_6c47d2bd568e3a5b33bf2a803460254a0e0c4afc006b0d7d361dac0fcfec0b44_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7ad8325cca6d37fc7bfb98b074a5a3a0478f2860e851a348844f597b60861b0 = $this->env->getExtension("native_profiler");
        $__internal_a7ad8325cca6d37fc7bfb98b074a5a3a0478f2860e851a348844f597b60861b0->enter($__internal_a7ad8325cca6d37fc7bfb98b074a5a3a0478f2860e851a348844f597b60861b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a7ad8325cca6d37fc7bfb98b074a5a3a0478f2860e851a348844f597b60861b0->leave($__internal_a7ad8325cca6d37fc7bfb98b074a5a3a0478f2860e851a348844f597b60861b0_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_959110a0e83c3f2a9dea9950370b5d72244324827d16983340f0bde84ad6f2ad = $this->env->getExtension("native_profiler");
        $__internal_959110a0e83c3f2a9dea9950370b5d72244324827d16983340f0bde84ad6f2ad->enter($__internal_959110a0e83c3f2a9dea9950370b5d72244324827d16983340f0bde84ad6f2ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    
    
 
";
        
        $__internal_959110a0e83c3f2a9dea9950370b5d72244324827d16983340f0bde84ad6f2ad->leave($__internal_959110a0e83c3f2a9dea9950370b5d72244324827d16983340f0bde84ad6f2ad_prof);

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
