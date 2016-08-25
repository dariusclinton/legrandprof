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
        $__internal_e6475e7b06ee56d3aa4f4641762b4fd9e218f5d498af7c2d8af4d707a97cc62d = $this->env->getExtension("native_profiler");
        $__internal_e6475e7b06ee56d3aa4f4641762b4fd9e218f5d498af7c2d8af4d707a97cc62d->enter($__internal_e6475e7b06ee56d3aa4f4641762b4fd9e218f5d498af7c2d8af4d707a97cc62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6475e7b06ee56d3aa4f4641762b4fd9e218f5d498af7c2d8af4d707a97cc62d->leave($__internal_e6475e7b06ee56d3aa4f4641762b4fd9e218f5d498af7c2d8af4d707a97cc62d_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_90e96410af100efe6760dacbb0903f05ed24017d83b44d0403adcd04a51a8736 = $this->env->getExtension("native_profiler");
        $__internal_90e96410af100efe6760dacbb0903f05ed24017d83b44d0403adcd04a51a8736->enter($__internal_90e96410af100efe6760dacbb0903f05ed24017d83b44d0403adcd04a51a8736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_90e96410af100efe6760dacbb0903f05ed24017d83b44d0403adcd04a51a8736->leave($__internal_90e96410af100efe6760dacbb0903f05ed24017d83b44d0403adcd04a51a8736_prof);

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
