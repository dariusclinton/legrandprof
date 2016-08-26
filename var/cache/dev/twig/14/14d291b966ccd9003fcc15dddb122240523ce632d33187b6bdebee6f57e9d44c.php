<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_2bdbb70e2a1c877fa248404006573ab42dcbdadcf20918b56371727ae9018878 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_51cc4ffa9870d79e70a5f7c785bc91d23866c3be43f59945bbea9d9208e84be8 = $this->env->getExtension("native_profiler");
        $__internal_51cc4ffa9870d79e70a5f7c785bc91d23866c3be43f59945bbea9d9208e84be8->enter($__internal_51cc4ffa9870d79e70a5f7c785bc91d23866c3be43f59945bbea9d9208e84be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51cc4ffa9870d79e70a5f7c785bc91d23866c3be43f59945bbea9d9208e84be8->leave($__internal_51cc4ffa9870d79e70a5f7c785bc91d23866c3be43f59945bbea9d9208e84be8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_23688d07c8643eb513ac0e27cfedea2cc44615a95c91ce72d8e839692d622a6a = $this->env->getExtension("native_profiler");
        $__internal_23688d07c8643eb513ac0e27cfedea2cc44615a95c91ce72d8e839692d622a6a->enter($__internal_23688d07c8643eb513ac0e27cfedea2cc44615a95c91ce72d8e839692d622a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_23688d07c8643eb513ac0e27cfedea2cc44615a95c91ce72d8e839692d622a6a->leave($__internal_23688d07c8643eb513ac0e27cfedea2cc44615a95c91ce72d8e839692d622a6a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
