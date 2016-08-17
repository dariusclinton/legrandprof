<?php

/* @LGPCore/layout.html.twig */
class __TwigTemplate_129db1a7c18cdf2c8efd1b285948969fd5157eb8c89b733fd29a1b46cfa64f4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "@LGPCore/layout.html.twig", 2);
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
        $__internal_bfb5de8aa8b47e1028f06c5fedd692b05329f1be6428de996b8bc069166ccec8 = $this->env->getExtension("native_profiler");
        $__internal_bfb5de8aa8b47e1028f06c5fedd692b05329f1be6428de996b8bc069166ccec8->enter($__internal_bfb5de8aa8b47e1028f06c5fedd692b05329f1be6428de996b8bc069166ccec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfb5de8aa8b47e1028f06c5fedd692b05329f1be6428de996b8bc069166ccec8->leave($__internal_bfb5de8aa8b47e1028f06c5fedd692b05329f1be6428de996b8bc069166ccec8_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_a23208ae3a306de30580602ef736838aedfe68e0fd3b28c917f27420e176a3e7 = $this->env->getExtension("native_profiler");
        $__internal_a23208ae3a306de30580602ef736838aedfe68e0fd3b28c917f27420e176a3e7->enter($__internal_a23208ae3a306de30580602ef736838aedfe68e0fd3b28c917f27420e176a3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_a23208ae3a306de30580602ef736838aedfe68e0fd3b28c917f27420e176a3e7->leave($__internal_a23208ae3a306de30580602ef736838aedfe68e0fd3b28c917f27420e176a3e7_prof);

    }

    public function getTemplateName()
    {
        return "@LGPCore/layout.html.twig";
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
