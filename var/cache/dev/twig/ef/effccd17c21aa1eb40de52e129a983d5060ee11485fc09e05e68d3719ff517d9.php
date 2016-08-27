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
        $__internal_c6758906bd2b5c1e120ddb36cfc225bf12a07b4afba2918b226f7d3e502bace0 = $this->env->getExtension("native_profiler");
        $__internal_c6758906bd2b5c1e120ddb36cfc225bf12a07b4afba2918b226f7d3e502bace0->enter($__internal_c6758906bd2b5c1e120ddb36cfc225bf12a07b4afba2918b226f7d3e502bace0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6758906bd2b5c1e120ddb36cfc225bf12a07b4afba2918b226f7d3e502bace0->leave($__internal_c6758906bd2b5c1e120ddb36cfc225bf12a07b4afba2918b226f7d3e502bace0_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f3356f688e768fd18eff0129aabeed100275af537344f09eb98e12c651c442c = $this->env->getExtension("native_profiler");
        $__internal_1f3356f688e768fd18eff0129aabeed100275af537344f09eb98e12c651c442c->enter($__internal_1f3356f688e768fd18eff0129aabeed100275af537344f09eb98e12c651c442c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_1f3356f688e768fd18eff0129aabeed100275af537344f09eb98e12c651c442c->leave($__internal_1f3356f688e768fd18eff0129aabeed100275af537344f09eb98e12c651c442c_prof);

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
