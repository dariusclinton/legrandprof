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
        $__internal_3924563593292c46320e5c08df018cd47bf1a4c71d4849b1ae30ba33e5d48c4e = $this->env->getExtension("native_profiler");
        $__internal_3924563593292c46320e5c08df018cd47bf1a4c71d4849b1ae30ba33e5d48c4e->enter($__internal_3924563593292c46320e5c08df018cd47bf1a4c71d4849b1ae30ba33e5d48c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3924563593292c46320e5c08df018cd47bf1a4c71d4849b1ae30ba33e5d48c4e->leave($__internal_3924563593292c46320e5c08df018cd47bf1a4c71d4849b1ae30ba33e5d48c4e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5517f8b06936e14ab96ea7cc2ce3caf8a40336791144d032b710c59dd8b3b85c = $this->env->getExtension("native_profiler");
        $__internal_5517f8b06936e14ab96ea7cc2ce3caf8a40336791144d032b710c59dd8b3b85c->enter($__internal_5517f8b06936e14ab96ea7cc2ce3caf8a40336791144d032b710c59dd8b3b85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_5517f8b06936e14ab96ea7cc2ce3caf8a40336791144d032b710c59dd8b3b85c->leave($__internal_5517f8b06936e14ab96ea7cc2ce3caf8a40336791144d032b710c59dd8b3b85c_prof);

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
