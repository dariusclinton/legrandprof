<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_e3b6f24e444bf886ec53293b4a63b53f11bd74ebb2cd59edae68a3b385d93fd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_5545aaf9e1720092c0f875e8fbb05d4a31a78065d966066d40e7e39422a377dd = $this->env->getExtension("native_profiler");
        $__internal_5545aaf9e1720092c0f875e8fbb05d4a31a78065d966066d40e7e39422a377dd->enter($__internal_5545aaf9e1720092c0f875e8fbb05d4a31a78065d966066d40e7e39422a377dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5545aaf9e1720092c0f875e8fbb05d4a31a78065d966066d40e7e39422a377dd->leave($__internal_5545aaf9e1720092c0f875e8fbb05d4a31a78065d966066d40e7e39422a377dd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_646a771f2e37b4290007d1dc0cd735772e8bba0409c195b356372445bf52d069 = $this->env->getExtension("native_profiler");
        $__internal_646a771f2e37b4290007d1dc0cd735772e8bba0409c195b356372445bf52d069->enter($__internal_646a771f2e37b4290007d1dc0cd735772e8bba0409c195b356372445bf52d069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_646a771f2e37b4290007d1dc0cd735772e8bba0409c195b356372445bf52d069->leave($__internal_646a771f2e37b4290007d1dc0cd735772e8bba0409c195b356372445bf52d069_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
