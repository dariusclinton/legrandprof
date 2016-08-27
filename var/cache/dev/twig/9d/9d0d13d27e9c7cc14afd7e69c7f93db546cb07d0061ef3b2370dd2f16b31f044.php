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
        $__internal_c049b21d495cfc88d32118ec7b3e72c9d77a3c5ad8c70c1bfae5a3dca5a65c2d = $this->env->getExtension("native_profiler");
        $__internal_c049b21d495cfc88d32118ec7b3e72c9d77a3c5ad8c70c1bfae5a3dca5a65c2d->enter($__internal_c049b21d495cfc88d32118ec7b3e72c9d77a3c5ad8c70c1bfae5a3dca5a65c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c049b21d495cfc88d32118ec7b3e72c9d77a3c5ad8c70c1bfae5a3dca5a65c2d->leave($__internal_c049b21d495cfc88d32118ec7b3e72c9d77a3c5ad8c70c1bfae5a3dca5a65c2d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_de589c4b192f279136549c78f16bf1652650179f1864c55e99109bfc5a3b1038 = $this->env->getExtension("native_profiler");
        $__internal_de589c4b192f279136549c78f16bf1652650179f1864c55e99109bfc5a3b1038->enter($__internal_de589c4b192f279136549c78f16bf1652650179f1864c55e99109bfc5a3b1038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_de589c4b192f279136549c78f16bf1652650179f1864c55e99109bfc5a3b1038->leave($__internal_de589c4b192f279136549c78f16bf1652650179f1864c55e99109bfc5a3b1038_prof);

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
