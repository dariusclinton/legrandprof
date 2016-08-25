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
        $__internal_615846feaecc2983d88abca1e72be5698c43f1e8967abcbf730e6db94d349a89 = $this->env->getExtension("native_profiler");
        $__internal_615846feaecc2983d88abca1e72be5698c43f1e8967abcbf730e6db94d349a89->enter($__internal_615846feaecc2983d88abca1e72be5698c43f1e8967abcbf730e6db94d349a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_615846feaecc2983d88abca1e72be5698c43f1e8967abcbf730e6db94d349a89->leave($__internal_615846feaecc2983d88abca1e72be5698c43f1e8967abcbf730e6db94d349a89_prof);

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
