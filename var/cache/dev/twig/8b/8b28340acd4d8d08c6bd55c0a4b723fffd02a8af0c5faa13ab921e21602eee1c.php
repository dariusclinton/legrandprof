<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_2a00b1dac2c61a734ba3034bd7813c4ce86417a5f2788a98b4230a1dff6fda7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_509a74648aacc4bec28a5bee0539a252d836959cdc71708f868a22e63748657d = $this->env->getExtension("native_profiler");
        $__internal_509a74648aacc4bec28a5bee0539a252d836959cdc71708f868a22e63748657d->enter($__internal_509a74648aacc4bec28a5bee0539a252d836959cdc71708f868a22e63748657d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_509a74648aacc4bec28a5bee0539a252d836959cdc71708f868a22e63748657d->leave($__internal_509a74648aacc4bec28a5bee0539a252d836959cdc71708f868a22e63748657d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_afae6d43713d769b70b97228a54785fae11e3e2c721b316e9c809aaad77cddca = $this->env->getExtension("native_profiler");
        $__internal_afae6d43713d769b70b97228a54785fae11e3e2c721b316e9c809aaad77cddca->enter($__internal_afae6d43713d769b70b97228a54785fae11e3e2c721b316e9c809aaad77cddca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_afae6d43713d769b70b97228a54785fae11e3e2c721b316e9c809aaad77cddca->leave($__internal_afae6d43713d769b70b97228a54785fae11e3e2c721b316e9c809aaad77cddca_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
