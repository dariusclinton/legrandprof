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
        $__internal_4c911f2cbb4e3e7cd9a6b2680362993cd57009b29ef2c2a3bdec973960e0534d = $this->env->getExtension("native_profiler");
        $__internal_4c911f2cbb4e3e7cd9a6b2680362993cd57009b29ef2c2a3bdec973960e0534d->enter($__internal_4c911f2cbb4e3e7cd9a6b2680362993cd57009b29ef2c2a3bdec973960e0534d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c911f2cbb4e3e7cd9a6b2680362993cd57009b29ef2c2a3bdec973960e0534d->leave($__internal_4c911f2cbb4e3e7cd9a6b2680362993cd57009b29ef2c2a3bdec973960e0534d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6fd43ecab438ffca5a96b6bde13fc96212269dfdef83f78ea5a5bef6c2edcf22 = $this->env->getExtension("native_profiler");
        $__internal_6fd43ecab438ffca5a96b6bde13fc96212269dfdef83f78ea5a5bef6c2edcf22->enter($__internal_6fd43ecab438ffca5a96b6bde13fc96212269dfdef83f78ea5a5bef6c2edcf22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_6fd43ecab438ffca5a96b6bde13fc96212269dfdef83f78ea5a5bef6c2edcf22->leave($__internal_6fd43ecab438ffca5a96b6bde13fc96212269dfdef83f78ea5a5bef6c2edcf22_prof);

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
