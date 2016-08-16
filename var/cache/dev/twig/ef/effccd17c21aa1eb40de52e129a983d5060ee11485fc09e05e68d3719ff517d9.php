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
        $__internal_e7d8e30654b6d0055a7a7a2c9304a1c3c5da8d505dee6e2b853a16b63f825189 = $this->env->getExtension("native_profiler");
        $__internal_e7d8e30654b6d0055a7a7a2c9304a1c3c5da8d505dee6e2b853a16b63f825189->enter($__internal_e7d8e30654b6d0055a7a7a2c9304a1c3c5da8d505dee6e2b853a16b63f825189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7d8e30654b6d0055a7a7a2c9304a1c3c5da8d505dee6e2b853a16b63f825189->leave($__internal_e7d8e30654b6d0055a7a7a2c9304a1c3c5da8d505dee6e2b853a16b63f825189_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_c378d522c4463ff2c6bb0b9aaf302eaede3271699b1166a2b1bce309d56dc307 = $this->env->getExtension("native_profiler");
        $__internal_c378d522c4463ff2c6bb0b9aaf302eaede3271699b1166a2b1bce309d56dc307->enter($__internal_c378d522c4463ff2c6bb0b9aaf302eaede3271699b1166a2b1bce309d56dc307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_c378d522c4463ff2c6bb0b9aaf302eaede3271699b1166a2b1bce309d56dc307->leave($__internal_c378d522c4463ff2c6bb0b9aaf302eaede3271699b1166a2b1bce309d56dc307_prof);

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
