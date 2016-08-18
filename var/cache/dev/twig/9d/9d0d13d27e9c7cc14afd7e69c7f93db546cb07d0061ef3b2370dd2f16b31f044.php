<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_6e65b62ede2bb5764409f4dbbc5c6c5845b409605ca8acd8cbefe76fa64afda8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_919152f1a18a87dd31714ae347bf143d3741e44571182f5509381015b27305a4 = $this->env->getExtension("native_profiler");
        $__internal_919152f1a18a87dd31714ae347bf143d3741e44571182f5509381015b27305a4->enter($__internal_919152f1a18a87dd31714ae347bf143d3741e44571182f5509381015b27305a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_919152f1a18a87dd31714ae347bf143d3741e44571182f5509381015b27305a4->leave($__internal_919152f1a18a87dd31714ae347bf143d3741e44571182f5509381015b27305a4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0ca57f0b3d047fc605fdbbbbc2f0227cead5c534a02b4361554fa429a90fc138 = $this->env->getExtension("native_profiler");
        $__internal_0ca57f0b3d047fc605fdbbbbc2f0227cead5c534a02b4361554fa429a90fc138->enter($__internal_0ca57f0b3d047fc605fdbbbbc2f0227cead5c534a02b4361554fa429a90fc138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_0ca57f0b3d047fc605fdbbbbc2f0227cead5c534a02b4361554fa429a90fc138->leave($__internal_0ca57f0b3d047fc605fdbbbbc2f0227cead5c534a02b4361554fa429a90fc138_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
