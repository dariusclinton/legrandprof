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
        $__internal_6938ee942bf906da679a8e6720a44f16bf2983cf7fb65d6decd918320e4baac0 = $this->env->getExtension("native_profiler");
        $__internal_6938ee942bf906da679a8e6720a44f16bf2983cf7fb65d6decd918320e4baac0->enter($__internal_6938ee942bf906da679a8e6720a44f16bf2983cf7fb65d6decd918320e4baac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6938ee942bf906da679a8e6720a44f16bf2983cf7fb65d6decd918320e4baac0->leave($__internal_6938ee942bf906da679a8e6720a44f16bf2983cf7fb65d6decd918320e4baac0_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_276f0387db14146f9629c14a36fd020613bcc716b226df07695a4d34afba8531 = $this->env->getExtension("native_profiler");
        $__internal_276f0387db14146f9629c14a36fd020613bcc716b226df07695a4d34afba8531->enter($__internal_276f0387db14146f9629c14a36fd020613bcc716b226df07695a4d34afba8531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_276f0387db14146f9629c14a36fd020613bcc716b226df07695a4d34afba8531->leave($__internal_276f0387db14146f9629c14a36fd020613bcc716b226df07695a4d34afba8531_prof);

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
