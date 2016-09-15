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
        $__internal_d46da04298d36680bc606c5d4c935178fd4dce588715b498d02613941d7c9e68 = $this->env->getExtension("native_profiler");
        $__internal_d46da04298d36680bc606c5d4c935178fd4dce588715b498d02613941d7c9e68->enter($__internal_d46da04298d36680bc606c5d4c935178fd4dce588715b498d02613941d7c9e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d46da04298d36680bc606c5d4c935178fd4dce588715b498d02613941d7c9e68->leave($__internal_d46da04298d36680bc606c5d4c935178fd4dce588715b498d02613941d7c9e68_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0acfadd28248b80f8528a1a87a1cf666e95e4442cb56d718bfb7d4b1c0f16fb = $this->env->getExtension("native_profiler");
        $__internal_b0acfadd28248b80f8528a1a87a1cf666e95e4442cb56d718bfb7d4b1c0f16fb->enter($__internal_b0acfadd28248b80f8528a1a87a1cf666e95e4442cb56d718bfb7d4b1c0f16fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_b0acfadd28248b80f8528a1a87a1cf666e95e4442cb56d718bfb7d4b1c0f16fb->leave($__internal_b0acfadd28248b80f8528a1a87a1cf666e95e4442cb56d718bfb7d4b1c0f16fb_prof);

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
