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
        $__internal_d9de96211fe2a60911b019d36edbcd1e43de9f7d2350339534259adfa11bfdb8 = $this->env->getExtension("native_profiler");
        $__internal_d9de96211fe2a60911b019d36edbcd1e43de9f7d2350339534259adfa11bfdb8->enter($__internal_d9de96211fe2a60911b019d36edbcd1e43de9f7d2350339534259adfa11bfdb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9de96211fe2a60911b019d36edbcd1e43de9f7d2350339534259adfa11bfdb8->leave($__internal_d9de96211fe2a60911b019d36edbcd1e43de9f7d2350339534259adfa11bfdb8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_62b507f438575ccd7f2afe04cf81df28a8da34bce8e3924d87e90a6d1e2a9885 = $this->env->getExtension("native_profiler");
        $__internal_62b507f438575ccd7f2afe04cf81df28a8da34bce8e3924d87e90a6d1e2a9885->enter($__internal_62b507f438575ccd7f2afe04cf81df28a8da34bce8e3924d87e90a6d1e2a9885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_62b507f438575ccd7f2afe04cf81df28a8da34bce8e3924d87e90a6d1e2a9885->leave($__internal_62b507f438575ccd7f2afe04cf81df28a8da34bce8e3924d87e90a6d1e2a9885_prof);

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
