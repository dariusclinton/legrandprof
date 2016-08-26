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
        $__internal_27a2bb4492e69f8b42ddcf1e40195dced233fc7c14c2ec29712ff6aa8b92e69d = $this->env->getExtension("native_profiler");
        $__internal_27a2bb4492e69f8b42ddcf1e40195dced233fc7c14c2ec29712ff6aa8b92e69d->enter($__internal_27a2bb4492e69f8b42ddcf1e40195dced233fc7c14c2ec29712ff6aa8b92e69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27a2bb4492e69f8b42ddcf1e40195dced233fc7c14c2ec29712ff6aa8b92e69d->leave($__internal_27a2bb4492e69f8b42ddcf1e40195dced233fc7c14c2ec29712ff6aa8b92e69d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c13a4c701d2c294a420d23650f8bf5e4957adcc0569559e9cd19a61967ca2a2 = $this->env->getExtension("native_profiler");
        $__internal_9c13a4c701d2c294a420d23650f8bf5e4957adcc0569559e9cd19a61967ca2a2->enter($__internal_9c13a4c701d2c294a420d23650f8bf5e4957adcc0569559e9cd19a61967ca2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_9c13a4c701d2c294a420d23650f8bf5e4957adcc0569559e9cd19a61967ca2a2->leave($__internal_9c13a4c701d2c294a420d23650f8bf5e4957adcc0569559e9cd19a61967ca2a2_prof);

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
