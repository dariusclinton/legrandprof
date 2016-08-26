<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_06ed8d929f845649ec2178506a3a6cd4c577f708cdb01fa159aa5436c2e4afe6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f57bfaf444eeb67b1ff2a9c329936c2ef35ab74edb98fc0871de1b247609c12 = $this->env->getExtension("native_profiler");
        $__internal_9f57bfaf444eeb67b1ff2a9c329936c2ef35ab74edb98fc0871de1b247609c12->enter($__internal_9f57bfaf444eeb67b1ff2a9c329936c2ef35ab74edb98fc0871de1b247609c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_9f57bfaf444eeb67b1ff2a9c329936c2ef35ab74edb98fc0871de1b247609c12->leave($__internal_9f57bfaf444eeb67b1ff2a9c329936c2ef35ab74edb98fc0871de1b247609c12_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
