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
        $__internal_2ea72cc3f9482f4da1bf1633f7fe944cd1337d126bf49de45b809bbc26bca97d = $this->env->getExtension("native_profiler");
        $__internal_2ea72cc3f9482f4da1bf1633f7fe944cd1337d126bf49de45b809bbc26bca97d->enter($__internal_2ea72cc3f9482f4da1bf1633f7fe944cd1337d126bf49de45b809bbc26bca97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ea72cc3f9482f4da1bf1633f7fe944cd1337d126bf49de45b809bbc26bca97d->leave($__internal_2ea72cc3f9482f4da1bf1633f7fe944cd1337d126bf49de45b809bbc26bca97d_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbb3accc18815015240880a473bcb757e8cc53e25be1f7b081bd7d8277cfd248 = $this->env->getExtension("native_profiler");
        $__internal_dbb3accc18815015240880a473bcb757e8cc53e25be1f7b081bd7d8277cfd248->enter($__internal_dbb3accc18815015240880a473bcb757e8cc53e25be1f7b081bd7d8277cfd248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_dbb3accc18815015240880a473bcb757e8cc53e25be1f7b081bd7d8277cfd248->leave($__internal_dbb3accc18815015240880a473bcb757e8cc53e25be1f7b081bd7d8277cfd248_prof);

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
