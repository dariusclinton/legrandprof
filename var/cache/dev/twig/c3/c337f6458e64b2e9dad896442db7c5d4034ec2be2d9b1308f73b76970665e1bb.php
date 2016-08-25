<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_3d2574fcb41d093ffb89a54df4fe379566191610c21ee683b823d8d3c8f96f9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_9fbb6a1cf9c3121d0884f28d9cdac7b7942c3c0c96a4f85b47ddfcdaef60d37f = $this->env->getExtension("native_profiler");
        $__internal_9fbb6a1cf9c3121d0884f28d9cdac7b7942c3c0c96a4f85b47ddfcdaef60d37f->enter($__internal_9fbb6a1cf9c3121d0884f28d9cdac7b7942c3c0c96a4f85b47ddfcdaef60d37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fbb6a1cf9c3121d0884f28d9cdac7b7942c3c0c96a4f85b47ddfcdaef60d37f->leave($__internal_9fbb6a1cf9c3121d0884f28d9cdac7b7942c3c0c96a4f85b47ddfcdaef60d37f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b9b213a6cfd21d9d9d30e869176a84fe9b29e10fdd21783a907d6d526de3241d = $this->env->getExtension("native_profiler");
        $__internal_b9b213a6cfd21d9d9d30e869176a84fe9b29e10fdd21783a907d6d526de3241d->enter($__internal_b9b213a6cfd21d9d9d30e869176a84fe9b29e10fdd21783a907d6d526de3241d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_b9b213a6cfd21d9d9d30e869176a84fe9b29e10fdd21783a907d6d526de3241d->leave($__internal_b9b213a6cfd21d9d9d30e869176a84fe9b29e10fdd21783a907d6d526de3241d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
