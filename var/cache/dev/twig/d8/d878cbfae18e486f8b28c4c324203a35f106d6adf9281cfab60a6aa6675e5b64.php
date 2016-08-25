<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_f9aef295c967d1ddf5e2df7b04c8b8833814a8e3b8c395bf8630cc6369c32ffe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_3f7cede3f43695b43d2bd991e78618e73aa7e375673cf4befb9148d50a08b547 = $this->env->getExtension("native_profiler");
        $__internal_3f7cede3f43695b43d2bd991e78618e73aa7e375673cf4befb9148d50a08b547->enter($__internal_3f7cede3f43695b43d2bd991e78618e73aa7e375673cf4befb9148d50a08b547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f7cede3f43695b43d2bd991e78618e73aa7e375673cf4befb9148d50a08b547->leave($__internal_3f7cede3f43695b43d2bd991e78618e73aa7e375673cf4befb9148d50a08b547_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_49700695c508be966513fc191020a3636f67a7c5128c1d21379a94f9d6bbfdcd = $this->env->getExtension("native_profiler");
        $__internal_49700695c508be966513fc191020a3636f67a7c5128c1d21379a94f9d6bbfdcd->enter($__internal_49700695c508be966513fc191020a3636f67a7c5128c1d21379a94f9d6bbfdcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "  ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_49700695c508be966513fc191020a3636f67a7c5128c1d21379a94f9d6bbfdcd->leave($__internal_49700695c508be966513fc191020a3636f67a7c5128c1d21379a94f9d6bbfdcd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/*   {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
