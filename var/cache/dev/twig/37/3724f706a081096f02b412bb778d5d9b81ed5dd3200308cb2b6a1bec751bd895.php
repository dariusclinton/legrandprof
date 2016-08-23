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
        $__internal_987271ff3d2005328ae5ccf4bc33bb1a18839e0606ea9a31db15d4ea4218173c = $this->env->getExtension("native_profiler");
        $__internal_987271ff3d2005328ae5ccf4bc33bb1a18839e0606ea9a31db15d4ea4218173c->enter($__internal_987271ff3d2005328ae5ccf4bc33bb1a18839e0606ea9a31db15d4ea4218173c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_987271ff3d2005328ae5ccf4bc33bb1a18839e0606ea9a31db15d4ea4218173c->leave($__internal_987271ff3d2005328ae5ccf4bc33bb1a18839e0606ea9a31db15d4ea4218173c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1b4b988f54338b99bf5a7e53f63fb7accf1e3020e367fc8af4edba1c24d99644 = $this->env->getExtension("native_profiler");
        $__internal_1b4b988f54338b99bf5a7e53f63fb7accf1e3020e367fc8af4edba1c24d99644->enter($__internal_1b4b988f54338b99bf5a7e53f63fb7accf1e3020e367fc8af4edba1c24d99644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_1b4b988f54338b99bf5a7e53f63fb7accf1e3020e367fc8af4edba1c24d99644->leave($__internal_1b4b988f54338b99bf5a7e53f63fb7accf1e3020e367fc8af4edba1c24d99644_prof);

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
