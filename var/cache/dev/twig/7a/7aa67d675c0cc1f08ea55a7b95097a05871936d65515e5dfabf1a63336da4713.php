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
        $__internal_62b2adefbdf737103c826a9aecf08bb83304f14cdb20c25fee36b07733b5a33b = $this->env->getExtension("native_profiler");
        $__internal_62b2adefbdf737103c826a9aecf08bb83304f14cdb20c25fee36b07733b5a33b->enter($__internal_62b2adefbdf737103c826a9aecf08bb83304f14cdb20c25fee36b07733b5a33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_62b2adefbdf737103c826a9aecf08bb83304f14cdb20c25fee36b07733b5a33b->leave($__internal_62b2adefbdf737103c826a9aecf08bb83304f14cdb20c25fee36b07733b5a33b_prof);

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
