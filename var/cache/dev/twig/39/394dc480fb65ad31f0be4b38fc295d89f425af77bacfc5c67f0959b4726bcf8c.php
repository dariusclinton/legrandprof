<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_84957ae8797dbf77aa738cba4b3f18e933a73d06286b9d08422dcea4a7a8cea2 extends Twig_Template
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
        $__internal_f8d4906c883fab307238e65efc7a19d0a47f703a4955f90dfb8d54f6742c5c12 = $this->env->getExtension("native_profiler");
        $__internal_f8d4906c883fab307238e65efc7a19d0a47f703a4955f90dfb8d54f6742c5c12->enter($__internal_f8d4906c883fab307238e65efc7a19d0a47f703a4955f90dfb8d54f6742c5c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8d4906c883fab307238e65efc7a19d0a47f703a4955f90dfb8d54f6742c5c12->leave($__internal_f8d4906c883fab307238e65efc7a19d0a47f703a4955f90dfb8d54f6742c5c12_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1f7c08e289e9299d22d91b26148c41b251a6fc0a70c76bfe72abcf33d8a90bc1 = $this->env->getExtension("native_profiler");
        $__internal_1f7c08e289e9299d22d91b26148c41b251a6fc0a70c76bfe72abcf33d8a90bc1->enter($__internal_1f7c08e289e9299d22d91b26148c41b251a6fc0a70c76bfe72abcf33d8a90bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "  ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_1f7c08e289e9299d22d91b26148c41b251a6fc0a70c76bfe72abcf33d8a90bc1->leave($__internal_1f7c08e289e9299d22d91b26148c41b251a6fc0a70c76bfe72abcf33d8a90bc1_prof);

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
