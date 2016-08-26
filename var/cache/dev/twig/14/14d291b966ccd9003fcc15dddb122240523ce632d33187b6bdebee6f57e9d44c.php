<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_2bdbb70e2a1c877fa248404006573ab42dcbdadcf20918b56371727ae9018878 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_e0b32cecbdfd596e579fde5494ec81fd0775112762d2e18baf1ee26bbfe7609d = $this->env->getExtension("native_profiler");
        $__internal_e0b32cecbdfd596e579fde5494ec81fd0775112762d2e18baf1ee26bbfe7609d->enter($__internal_e0b32cecbdfd596e579fde5494ec81fd0775112762d2e18baf1ee26bbfe7609d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0b32cecbdfd596e579fde5494ec81fd0775112762d2e18baf1ee26bbfe7609d->leave($__internal_e0b32cecbdfd596e579fde5494ec81fd0775112762d2e18baf1ee26bbfe7609d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f8d77ff4da92ef36ad51f24d270f946bec407451decc9e81f0e4d028ea5ef530 = $this->env->getExtension("native_profiler");
        $__internal_f8d77ff4da92ef36ad51f24d270f946bec407451decc9e81f0e4d028ea5ef530->enter($__internal_f8d77ff4da92ef36ad51f24d270f946bec407451decc9e81f0e4d028ea5ef530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_f8d77ff4da92ef36ad51f24d270f946bec407451decc9e81f0e4d028ea5ef530->leave($__internal_f8d77ff4da92ef36ad51f24d270f946bec407451decc9e81f0e4d028ea5ef530_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
