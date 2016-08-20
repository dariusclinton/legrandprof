<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_addc6a791de2974e7aa145d72799d3422f9b4b4248c4631977d654914e2cae32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_dd7e2d94c9a13bb2e67eb74f877fa01cb3996dd7b68cef92c5d2740ed5c2b8d7 = $this->env->getExtension("native_profiler");
        $__internal_dd7e2d94c9a13bb2e67eb74f877fa01cb3996dd7b68cef92c5d2740ed5c2b8d7->enter($__internal_dd7e2d94c9a13bb2e67eb74f877fa01cb3996dd7b68cef92c5d2740ed5c2b8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd7e2d94c9a13bb2e67eb74f877fa01cb3996dd7b68cef92c5d2740ed5c2b8d7->leave($__internal_dd7e2d94c9a13bb2e67eb74f877fa01cb3996dd7b68cef92c5d2740ed5c2b8d7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_81f93f72fa7cf3a651490b63c1d2d4d6a02e2bf269723c024e4da424b1c0b13a = $this->env->getExtension("native_profiler");
        $__internal_81f93f72fa7cf3a651490b63c1d2d4d6a02e2bf269723c024e4da424b1c0b13a->enter($__internal_81f93f72fa7cf3a651490b63c1d2d4d6a02e2bf269723c024e4da424b1c0b13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_81f93f72fa7cf3a651490b63c1d2d4d6a02e2bf269723c024e4da424b1c0b13a->leave($__internal_81f93f72fa7cf3a651490b63c1d2d4d6a02e2bf269723c024e4da424b1c0b13a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
