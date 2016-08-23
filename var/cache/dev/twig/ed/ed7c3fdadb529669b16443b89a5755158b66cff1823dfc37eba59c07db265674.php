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
        $__internal_6b004f6be657d9a9b922ebf921620fc588d3165ebbc2ce53a73202ba70de0242 = $this->env->getExtension("native_profiler");
        $__internal_6b004f6be657d9a9b922ebf921620fc588d3165ebbc2ce53a73202ba70de0242->enter($__internal_6b004f6be657d9a9b922ebf921620fc588d3165ebbc2ce53a73202ba70de0242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b004f6be657d9a9b922ebf921620fc588d3165ebbc2ce53a73202ba70de0242->leave($__internal_6b004f6be657d9a9b922ebf921620fc588d3165ebbc2ce53a73202ba70de0242_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9a5c2c4b66aabcc0651b298f5c7077dc3e4169686f57374cc887bba31e44fe8d = $this->env->getExtension("native_profiler");
        $__internal_9a5c2c4b66aabcc0651b298f5c7077dc3e4169686f57374cc887bba31e44fe8d->enter($__internal_9a5c2c4b66aabcc0651b298f5c7077dc3e4169686f57374cc887bba31e44fe8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_9a5c2c4b66aabcc0651b298f5c7077dc3e4169686f57374cc887bba31e44fe8d->leave($__internal_9a5c2c4b66aabcc0651b298f5c7077dc3e4169686f57374cc887bba31e44fe8d_prof);

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
