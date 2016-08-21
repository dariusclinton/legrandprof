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
        $__internal_435f33a66026ce4357990525b5f26d6fcb5f5d9e2ac19bb53d3a57d349b360c8 = $this->env->getExtension("native_profiler");
        $__internal_435f33a66026ce4357990525b5f26d6fcb5f5d9e2ac19bb53d3a57d349b360c8->enter($__internal_435f33a66026ce4357990525b5f26d6fcb5f5d9e2ac19bb53d3a57d349b360c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_435f33a66026ce4357990525b5f26d6fcb5f5d9e2ac19bb53d3a57d349b360c8->leave($__internal_435f33a66026ce4357990525b5f26d6fcb5f5d9e2ac19bb53d3a57d349b360c8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_715a6b94d71b5861bf3b65cabf1913da194eb2f5e52bef64f9a7947270159b98 = $this->env->getExtension("native_profiler");
        $__internal_715a6b94d71b5861bf3b65cabf1913da194eb2f5e52bef64f9a7947270159b98->enter($__internal_715a6b94d71b5861bf3b65cabf1913da194eb2f5e52bef64f9a7947270159b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_715a6b94d71b5861bf3b65cabf1913da194eb2f5e52bef64f9a7947270159b98->leave($__internal_715a6b94d71b5861bf3b65cabf1913da194eb2f5e52bef64f9a7947270159b98_prof);

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
