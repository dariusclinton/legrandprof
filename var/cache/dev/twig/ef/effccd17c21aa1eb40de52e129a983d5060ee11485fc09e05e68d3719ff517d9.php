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
        $__internal_98e8b8e9e9d2abd769166ca85a74993e25f55888e734780f121f06ddc0b34119 = $this->env->getExtension("native_profiler");
        $__internal_98e8b8e9e9d2abd769166ca85a74993e25f55888e734780f121f06ddc0b34119->enter($__internal_98e8b8e9e9d2abd769166ca85a74993e25f55888e734780f121f06ddc0b34119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98e8b8e9e9d2abd769166ca85a74993e25f55888e734780f121f06ddc0b34119->leave($__internal_98e8b8e9e9d2abd769166ca85a74993e25f55888e734780f121f06ddc0b34119_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d01b23a1613d0e2ca5216c9c965600ca76c50dc734e6aab5bf599d609af641a7 = $this->env->getExtension("native_profiler");
        $__internal_d01b23a1613d0e2ca5216c9c965600ca76c50dc734e6aab5bf599d609af641a7->enter($__internal_d01b23a1613d0e2ca5216c9c965600ca76c50dc734e6aab5bf599d609af641a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_d01b23a1613d0e2ca5216c9c965600ca76c50dc734e6aab5bf599d609af641a7->leave($__internal_d01b23a1613d0e2ca5216c9c965600ca76c50dc734e6aab5bf599d609af641a7_prof);

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
