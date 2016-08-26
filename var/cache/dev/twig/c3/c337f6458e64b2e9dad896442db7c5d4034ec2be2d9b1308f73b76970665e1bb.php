<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_3d2574fcb41d093ffb89a54df4fe379566191610c21ee683b823d8d3c8f96f9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_391d53dc90a6b2b271a4f94989bc36982e0ec13975af0ce4814b50b0f872c317 = $this->env->getExtension("native_profiler");
        $__internal_391d53dc90a6b2b271a4f94989bc36982e0ec13975af0ce4814b50b0f872c317->enter($__internal_391d53dc90a6b2b271a4f94989bc36982e0ec13975af0ce4814b50b0f872c317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_391d53dc90a6b2b271a4f94989bc36982e0ec13975af0ce4814b50b0f872c317->leave($__internal_391d53dc90a6b2b271a4f94989bc36982e0ec13975af0ce4814b50b0f872c317_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1838a2d36591188dc2016a3ca00ceaa871a2f7632fd03f6308066742559d602e = $this->env->getExtension("native_profiler");
        $__internal_1838a2d36591188dc2016a3ca00ceaa871a2f7632fd03f6308066742559d602e->enter($__internal_1838a2d36591188dc2016a3ca00ceaa871a2f7632fd03f6308066742559d602e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_1838a2d36591188dc2016a3ca00ceaa871a2f7632fd03f6308066742559d602e->leave($__internal_1838a2d36591188dc2016a3ca00ceaa871a2f7632fd03f6308066742559d602e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
