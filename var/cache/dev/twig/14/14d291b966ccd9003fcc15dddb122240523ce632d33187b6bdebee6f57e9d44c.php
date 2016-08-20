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
        $__internal_4b67476ff5076c07b3ed4713bb476f9382d86ee1d9cca6c22d1433cad6b10ea4 = $this->env->getExtension("native_profiler");
        $__internal_4b67476ff5076c07b3ed4713bb476f9382d86ee1d9cca6c22d1433cad6b10ea4->enter($__internal_4b67476ff5076c07b3ed4713bb476f9382d86ee1d9cca6c22d1433cad6b10ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b67476ff5076c07b3ed4713bb476f9382d86ee1d9cca6c22d1433cad6b10ea4->leave($__internal_4b67476ff5076c07b3ed4713bb476f9382d86ee1d9cca6c22d1433cad6b10ea4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7122ce8b8c7a50e9e00f20408fc3512aafb21c48d08015e83c1b6376a385b644 = $this->env->getExtension("native_profiler");
        $__internal_7122ce8b8c7a50e9e00f20408fc3512aafb21c48d08015e83c1b6376a385b644->enter($__internal_7122ce8b8c7a50e9e00f20408fc3512aafb21c48d08015e83c1b6376a385b644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_7122ce8b8c7a50e9e00f20408fc3512aafb21c48d08015e83c1b6376a385b644->leave($__internal_7122ce8b8c7a50e9e00f20408fc3512aafb21c48d08015e83c1b6376a385b644_prof);

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
