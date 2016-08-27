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
        $__internal_0c1cbb7598c36e0309add613ac05f95e88c879566b47da9b2a14157ee7d1c5bc = $this->env->getExtension("native_profiler");
        $__internal_0c1cbb7598c36e0309add613ac05f95e88c879566b47da9b2a14157ee7d1c5bc->enter($__internal_0c1cbb7598c36e0309add613ac05f95e88c879566b47da9b2a14157ee7d1c5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c1cbb7598c36e0309add613ac05f95e88c879566b47da9b2a14157ee7d1c5bc->leave($__internal_0c1cbb7598c36e0309add613ac05f95e88c879566b47da9b2a14157ee7d1c5bc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b3b54da0849620d9216361ce13db921e05352221a110ffc1e5f4f9422dc28f77 = $this->env->getExtension("native_profiler");
        $__internal_b3b54da0849620d9216361ce13db921e05352221a110ffc1e5f4f9422dc28f77->enter($__internal_b3b54da0849620d9216361ce13db921e05352221a110ffc1e5f4f9422dc28f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_b3b54da0849620d9216361ce13db921e05352221a110ffc1e5f4f9422dc28f77->leave($__internal_b3b54da0849620d9216361ce13db921e05352221a110ffc1e5f4f9422dc28f77_prof);

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
