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
        $__internal_c6c7b017883e11cb455321b992217f522655f34fc892074846439a5049ae609f = $this->env->getExtension("native_profiler");
        $__internal_c6c7b017883e11cb455321b992217f522655f34fc892074846439a5049ae609f->enter($__internal_c6c7b017883e11cb455321b992217f522655f34fc892074846439a5049ae609f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6c7b017883e11cb455321b992217f522655f34fc892074846439a5049ae609f->leave($__internal_c6c7b017883e11cb455321b992217f522655f34fc892074846439a5049ae609f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e39661c39f3fbf522f9f2a29bc0d8227f9ccb1a56a6e99b7547de3356201bc78 = $this->env->getExtension("native_profiler");
        $__internal_e39661c39f3fbf522f9f2a29bc0d8227f9ccb1a56a6e99b7547de3356201bc78->enter($__internal_e39661c39f3fbf522f9f2a29bc0d8227f9ccb1a56a6e99b7547de3356201bc78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_e39661c39f3fbf522f9f2a29bc0d8227f9ccb1a56a6e99b7547de3356201bc78->leave($__internal_e39661c39f3fbf522f9f2a29bc0d8227f9ccb1a56a6e99b7547de3356201bc78_prof);

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
