<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_a9726e6d020e42e487c531aea7c293bf9878ac3d55d1fba467f08e4b556d14a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_36e248ed43475473fb27e8c21dc55f6ee0bcc35fd61118103458ba1d2602d778 = $this->env->getExtension("native_profiler");
        $__internal_36e248ed43475473fb27e8c21dc55f6ee0bcc35fd61118103458ba1d2602d778->enter($__internal_36e248ed43475473fb27e8c21dc55f6ee0bcc35fd61118103458ba1d2602d778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36e248ed43475473fb27e8c21dc55f6ee0bcc35fd61118103458ba1d2602d778->leave($__internal_36e248ed43475473fb27e8c21dc55f6ee0bcc35fd61118103458ba1d2602d778_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4fe456461333ece7246636b5577fa63f7b8d2a033cd45824bbc99c53d485d2ad = $this->env->getExtension("native_profiler");
        $__internal_4fe456461333ece7246636b5577fa63f7b8d2a033cd45824bbc99c53d485d2ad->enter($__internal_4fe456461333ece7246636b5577fa63f7b8d2a033cd45824bbc99c53d485d2ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_4fe456461333ece7246636b5577fa63f7b8d2a033cd45824bbc99c53d485d2ad->leave($__internal_4fe456461333ece7246636b5577fa63f7b8d2a033cd45824bbc99c53d485d2ad_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
