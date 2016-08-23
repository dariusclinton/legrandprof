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
        $__internal_c21b19fa6060bfeef04aa3076cf34bdb74dd26e185161906f8aabd58147d2d43 = $this->env->getExtension("native_profiler");
        $__internal_c21b19fa6060bfeef04aa3076cf34bdb74dd26e185161906f8aabd58147d2d43->enter($__internal_c21b19fa6060bfeef04aa3076cf34bdb74dd26e185161906f8aabd58147d2d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c21b19fa6060bfeef04aa3076cf34bdb74dd26e185161906f8aabd58147d2d43->leave($__internal_c21b19fa6060bfeef04aa3076cf34bdb74dd26e185161906f8aabd58147d2d43_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_18adcb9c75c37bd30b5e5197499a1cd725472ca1a1679c90eb5de820be61efbb = $this->env->getExtension("native_profiler");
        $__internal_18adcb9c75c37bd30b5e5197499a1cd725472ca1a1679c90eb5de820be61efbb->enter($__internal_18adcb9c75c37bd30b5e5197499a1cd725472ca1a1679c90eb5de820be61efbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_18adcb9c75c37bd30b5e5197499a1cd725472ca1a1679c90eb5de820be61efbb->leave($__internal_18adcb9c75c37bd30b5e5197499a1cd725472ca1a1679c90eb5de820be61efbb_prof);

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
