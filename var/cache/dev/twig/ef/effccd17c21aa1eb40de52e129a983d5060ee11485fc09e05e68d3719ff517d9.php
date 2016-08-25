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
        $__internal_f12570c232350c9cd6c2fefc2dc7ab6e663cd67ab5bee1d1b8932b6c916a1d1c = $this->env->getExtension("native_profiler");
        $__internal_f12570c232350c9cd6c2fefc2dc7ab6e663cd67ab5bee1d1b8932b6c916a1d1c->enter($__internal_f12570c232350c9cd6c2fefc2dc7ab6e663cd67ab5bee1d1b8932b6c916a1d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f12570c232350c9cd6c2fefc2dc7ab6e663cd67ab5bee1d1b8932b6c916a1d1c->leave($__internal_f12570c232350c9cd6c2fefc2dc7ab6e663cd67ab5bee1d1b8932b6c916a1d1c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_55df2d517a17806cbf8f48b93d616239f46d91400e17cfb5c49aef5ae6c623c2 = $this->env->getExtension("native_profiler");
        $__internal_55df2d517a17806cbf8f48b93d616239f46d91400e17cfb5c49aef5ae6c623c2->enter($__internal_55df2d517a17806cbf8f48b93d616239f46d91400e17cfb5c49aef5ae6c623c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_55df2d517a17806cbf8f48b93d616239f46d91400e17cfb5c49aef5ae6c623c2->leave($__internal_55df2d517a17806cbf8f48b93d616239f46d91400e17cfb5c49aef5ae6c623c2_prof);

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
