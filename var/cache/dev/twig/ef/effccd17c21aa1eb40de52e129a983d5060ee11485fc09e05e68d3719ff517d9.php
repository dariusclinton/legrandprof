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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0287d101813854543e2bd17e2a58db4d28b5c936801861e795fe05768d3ffcf2 = $this->env->getExtension("native_profiler");
        $__internal_0287d101813854543e2bd17e2a58db4d28b5c936801861e795fe05768d3ffcf2->enter($__internal_0287d101813854543e2bd17e2a58db4d28b5c936801861e795fe05768d3ffcf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0287d101813854543e2bd17e2a58db4d28b5c936801861e795fe05768d3ffcf2->leave($__internal_0287d101813854543e2bd17e2a58db4d28b5c936801861e795fe05768d3ffcf2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3b85ab406cebdfc78e466f9a059336b1c67a46e7dc21088681fc62e26c77a3b = $this->env->getExtension("native_profiler");
        $__internal_a3b85ab406cebdfc78e466f9a059336b1c67a46e7dc21088681fc62e26c77a3b->enter($__internal_a3b85ab406cebdfc78e466f9a059336b1c67a46e7dc21088681fc62e26c77a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_a3b85ab406cebdfc78e466f9a059336b1c67a46e7dc21088681fc62e26c77a3b->leave($__internal_a3b85ab406cebdfc78e466f9a059336b1c67a46e7dc21088681fc62e26c77a3b_prof);

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
