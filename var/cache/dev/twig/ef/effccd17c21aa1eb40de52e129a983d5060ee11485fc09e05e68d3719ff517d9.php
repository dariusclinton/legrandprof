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
        $__internal_e30281ee65ad34afeb0adbdf525961ad708eb1cd93e711ba87feb2c1fb9af6b8 = $this->env->getExtension("native_profiler");
        $__internal_e30281ee65ad34afeb0adbdf525961ad708eb1cd93e711ba87feb2c1fb9af6b8->enter($__internal_e30281ee65ad34afeb0adbdf525961ad708eb1cd93e711ba87feb2c1fb9af6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e30281ee65ad34afeb0adbdf525961ad708eb1cd93e711ba87feb2c1fb9af6b8->leave($__internal_e30281ee65ad34afeb0adbdf525961ad708eb1cd93e711ba87feb2c1fb9af6b8_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e63aaaa4a7f5d95ebd54859abb5f1afb42cee65f875f2ec558b451c0fba08fde = $this->env->getExtension("native_profiler");
        $__internal_e63aaaa4a7f5d95ebd54859abb5f1afb42cee65f875f2ec558b451c0fba08fde->enter($__internal_e63aaaa4a7f5d95ebd54859abb5f1afb42cee65f875f2ec558b451c0fba08fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_e63aaaa4a7f5d95ebd54859abb5f1afb42cee65f875f2ec558b451c0fba08fde->leave($__internal_e63aaaa4a7f5d95ebd54859abb5f1afb42cee65f875f2ec558b451c0fba08fde_prof);

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
