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
        $__internal_bb4923ce25d86d2e972768ca9d8623e9de5b9db56b8aaf810e32c5d564cd8783 = $this->env->getExtension("native_profiler");
        $__internal_bb4923ce25d86d2e972768ca9d8623e9de5b9db56b8aaf810e32c5d564cd8783->enter($__internal_bb4923ce25d86d2e972768ca9d8623e9de5b9db56b8aaf810e32c5d564cd8783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb4923ce25d86d2e972768ca9d8623e9de5b9db56b8aaf810e32c5d564cd8783->leave($__internal_bb4923ce25d86d2e972768ca9d8623e9de5b9db56b8aaf810e32c5d564cd8783_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_02a1aff3303081a3be74928bed4761889915fefef98f134b1dde015fc12af9ff = $this->env->getExtension("native_profiler");
        $__internal_02a1aff3303081a3be74928bed4761889915fefef98f134b1dde015fc12af9ff->enter($__internal_02a1aff3303081a3be74928bed4761889915fefef98f134b1dde015fc12af9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_02a1aff3303081a3be74928bed4761889915fefef98f134b1dde015fc12af9ff->leave($__internal_02a1aff3303081a3be74928bed4761889915fefef98f134b1dde015fc12af9ff_prof);

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
