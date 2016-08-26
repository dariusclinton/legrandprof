<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_2bdbb70e2a1c877fa248404006573ab42dcbdadcf20918b56371727ae9018878 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7167b064f95cf6a8f5ac6113ee07b3d718030790442d556c4fdc2b1f4d326ab6 = $this->env->getExtension("native_profiler");
        $__internal_7167b064f95cf6a8f5ac6113ee07b3d718030790442d556c4fdc2b1f4d326ab6->enter($__internal_7167b064f95cf6a8f5ac6113ee07b3d718030790442d556c4fdc2b1f4d326ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7167b064f95cf6a8f5ac6113ee07b3d718030790442d556c4fdc2b1f4d326ab6->leave($__internal_7167b064f95cf6a8f5ac6113ee07b3d718030790442d556c4fdc2b1f4d326ab6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e851bc9207850f7bf3b2cb5cfc3d402a0ce834ee1e968bee608eed3fe7089e98 = $this->env->getExtension("native_profiler");
        $__internal_e851bc9207850f7bf3b2cb5cfc3d402a0ce834ee1e968bee608eed3fe7089e98->enter($__internal_e851bc9207850f7bf3b2cb5cfc3d402a0ce834ee1e968bee608eed3fe7089e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_e851bc9207850f7bf3b2cb5cfc3d402a0ce834ee1e968bee608eed3fe7089e98->leave($__internal_e851bc9207850f7bf3b2cb5cfc3d402a0ce834ee1e968bee608eed3fe7089e98_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
