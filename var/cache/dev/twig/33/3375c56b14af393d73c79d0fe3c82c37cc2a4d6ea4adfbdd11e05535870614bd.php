<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_57a580726f6f38382b614b6cee9b7d20d12470429cc0ae9d2ecf1aac06549105 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_bd5099d8072db1c9e8b830c1270409614de9c9e4a79b2fbec1cfa394c691eb1f = $this->env->getExtension("native_profiler");
        $__internal_bd5099d8072db1c9e8b830c1270409614de9c9e4a79b2fbec1cfa394c691eb1f->enter($__internal_bd5099d8072db1c9e8b830c1270409614de9c9e4a79b2fbec1cfa394c691eb1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd5099d8072db1c9e8b830c1270409614de9c9e4a79b2fbec1cfa394c691eb1f->leave($__internal_bd5099d8072db1c9e8b830c1270409614de9c9e4a79b2fbec1cfa394c691eb1f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f605a172ac906f17f8ef3f6fad043ef16e6c6636332bef83183e935e0d06caa0 = $this->env->getExtension("native_profiler");
        $__internal_f605a172ac906f17f8ef3f6fad043ef16e6c6636332bef83183e935e0d06caa0->enter($__internal_f605a172ac906f17f8ef3f6fad043ef16e6c6636332bef83183e935e0d06caa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_f605a172ac906f17f8ef3f6fad043ef16e6c6636332bef83183e935e0d06caa0->leave($__internal_f605a172ac906f17f8ef3f6fad043ef16e6c6636332bef83183e935e0d06caa0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
