<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_dbd5d53f0cc3680a412195cd06fb3539dffb4db7a587f89e1e87b780209aa671 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_e7450bdceb143ba9586c98669ac2bf3d68b0111c6f6b50e220ad3b32afb36467 = $this->env->getExtension("native_profiler");
        $__internal_e7450bdceb143ba9586c98669ac2bf3d68b0111c6f6b50e220ad3b32afb36467->enter($__internal_e7450bdceb143ba9586c98669ac2bf3d68b0111c6f6b50e220ad3b32afb36467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7450bdceb143ba9586c98669ac2bf3d68b0111c6f6b50e220ad3b32afb36467->leave($__internal_e7450bdceb143ba9586c98669ac2bf3d68b0111c6f6b50e220ad3b32afb36467_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_356056f9e267128a61f59a0f21d151cf3147a4e1cad46dd06ded67a3a665ce9c = $this->env->getExtension("native_profiler");
        $__internal_356056f9e267128a61f59a0f21d151cf3147a4e1cad46dd06ded67a3a665ce9c->enter($__internal_356056f9e267128a61f59a0f21d151cf3147a4e1cad46dd06ded67a3a665ce9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_356056f9e267128a61f59a0f21d151cf3147a4e1cad46dd06ded67a3a665ce9c->leave($__internal_356056f9e267128a61f59a0f21d151cf3147a4e1cad46dd06ded67a3a665ce9c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
