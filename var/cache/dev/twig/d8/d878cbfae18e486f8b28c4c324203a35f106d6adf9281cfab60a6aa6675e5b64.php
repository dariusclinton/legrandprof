<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_f9aef295c967d1ddf5e2df7b04c8b8833814a8e3b8c395bf8630cc6369c32ffe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_15f811693c6a674f2d71fd7907dc79977845d3c0f56bbd5ed6d97b5546259256 = $this->env->getExtension("native_profiler");
        $__internal_15f811693c6a674f2d71fd7907dc79977845d3c0f56bbd5ed6d97b5546259256->enter($__internal_15f811693c6a674f2d71fd7907dc79977845d3c0f56bbd5ed6d97b5546259256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15f811693c6a674f2d71fd7907dc79977845d3c0f56bbd5ed6d97b5546259256->leave($__internal_15f811693c6a674f2d71fd7907dc79977845d3c0f56bbd5ed6d97b5546259256_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d463b35b21003b34dd63f4c364615fbac17da6833d49ad409568ece6b6202409 = $this->env->getExtension("native_profiler");
        $__internal_d463b35b21003b34dd63f4c364615fbac17da6833d49ad409568ece6b6202409->enter($__internal_d463b35b21003b34dd63f4c364615fbac17da6833d49ad409568ece6b6202409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "  ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_d463b35b21003b34dd63f4c364615fbac17da6833d49ad409568ece6b6202409->leave($__internal_d463b35b21003b34dd63f4c364615fbac17da6833d49ad409568ece6b6202409_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/*   {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
