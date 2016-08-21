<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_1e52ecc2a8127123c78e451b7fb1b180a3af9cc46cf24825db29676e42433568 extends Twig_Template
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
        $__internal_1f9b143c5d74771caef3fe7c820d63a0718b28358c6b3bb924d1507392db2056 = $this->env->getExtension("native_profiler");
        $__internal_1f9b143c5d74771caef3fe7c820d63a0718b28358c6b3bb924d1507392db2056->enter($__internal_1f9b143c5d74771caef3fe7c820d63a0718b28358c6b3bb924d1507392db2056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f9b143c5d74771caef3fe7c820d63a0718b28358c6b3bb924d1507392db2056->leave($__internal_1f9b143c5d74771caef3fe7c820d63a0718b28358c6b3bb924d1507392db2056_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d31eebda28177c01b8df59475d73aabb3bbc81f3970b510b6e648628f4afe011 = $this->env->getExtension("native_profiler");
        $__internal_d31eebda28177c01b8df59475d73aabb3bbc81f3970b510b6e648628f4afe011->enter($__internal_d31eebda28177c01b8df59475d73aabb3bbc81f3970b510b6e648628f4afe011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_d31eebda28177c01b8df59475d73aabb3bbc81f3970b510b6e648628f4afe011->leave($__internal_d31eebda28177c01b8df59475d73aabb3bbc81f3970b510b6e648628f4afe011_prof);

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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
