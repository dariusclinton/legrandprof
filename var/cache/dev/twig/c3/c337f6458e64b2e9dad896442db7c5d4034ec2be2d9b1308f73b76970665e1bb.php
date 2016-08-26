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
        $__internal_c16c57b6d208d4c20eff53ee7b881518785bb6df3101779982b3fea349a225fa = $this->env->getExtension("native_profiler");
        $__internal_c16c57b6d208d4c20eff53ee7b881518785bb6df3101779982b3fea349a225fa->enter($__internal_c16c57b6d208d4c20eff53ee7b881518785bb6df3101779982b3fea349a225fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c16c57b6d208d4c20eff53ee7b881518785bb6df3101779982b3fea349a225fa->leave($__internal_c16c57b6d208d4c20eff53ee7b881518785bb6df3101779982b3fea349a225fa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7003f7672e0a4b1c24e4e017c9752bcaccf1036e006ec9405d3be03903ad0a98 = $this->env->getExtension("native_profiler");
        $__internal_7003f7672e0a4b1c24e4e017c9752bcaccf1036e006ec9405d3be03903ad0a98->enter($__internal_7003f7672e0a4b1c24e4e017c9752bcaccf1036e006ec9405d3be03903ad0a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_7003f7672e0a4b1c24e4e017c9752bcaccf1036e006ec9405d3be03903ad0a98->leave($__internal_7003f7672e0a4b1c24e4e017c9752bcaccf1036e006ec9405d3be03903ad0a98_prof);

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
