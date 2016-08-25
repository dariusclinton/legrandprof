<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_be1e132bae8340ed2a0182bfd29fdc26ce89f6f4aa09f54257e84ea80981a725 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_1963989f3ce04f5f1a01b8ae5f19ef5e747af2fa28be6fcb8074cb7e07a5988a = $this->env->getExtension("native_profiler");
        $__internal_1963989f3ce04f5f1a01b8ae5f19ef5e747af2fa28be6fcb8074cb7e07a5988a->enter($__internal_1963989f3ce04f5f1a01b8ae5f19ef5e747af2fa28be6fcb8074cb7e07a5988a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1963989f3ce04f5f1a01b8ae5f19ef5e747af2fa28be6fcb8074cb7e07a5988a->leave($__internal_1963989f3ce04f5f1a01b8ae5f19ef5e747af2fa28be6fcb8074cb7e07a5988a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9621916c784ff1e98ab860559648310931b02b6a802fc591adeee963b1f61bcc = $this->env->getExtension("native_profiler");
        $__internal_9621916c784ff1e98ab860559648310931b02b6a802fc591adeee963b1f61bcc->enter($__internal_9621916c784ff1e98ab860559648310931b02b6a802fc591adeee963b1f61bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_9621916c784ff1e98ab860559648310931b02b6a802fc591adeee963b1f61bcc->leave($__internal_9621916c784ff1e98ab860559648310931b02b6a802fc591adeee963b1f61bcc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
