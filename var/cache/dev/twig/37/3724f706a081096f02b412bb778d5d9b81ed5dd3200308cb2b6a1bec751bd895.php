<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_addc6a791de2974e7aa145d72799d3422f9b4b4248c4631977d654914e2cae32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_322d43c19d57a2af7e341757e851944f9c24fa4eca7fcaf0b9d8a8f4eba1f21c = $this->env->getExtension("native_profiler");
        $__internal_322d43c19d57a2af7e341757e851944f9c24fa4eca7fcaf0b9d8a8f4eba1f21c->enter($__internal_322d43c19d57a2af7e341757e851944f9c24fa4eca7fcaf0b9d8a8f4eba1f21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_322d43c19d57a2af7e341757e851944f9c24fa4eca7fcaf0b9d8a8f4eba1f21c->leave($__internal_322d43c19d57a2af7e341757e851944f9c24fa4eca7fcaf0b9d8a8f4eba1f21c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_22cc7e713849a5704d4324c21d1e62a247b38ff132e4552c57259ec8b5fa3659 = $this->env->getExtension("native_profiler");
        $__internal_22cc7e713849a5704d4324c21d1e62a247b38ff132e4552c57259ec8b5fa3659->enter($__internal_22cc7e713849a5704d4324c21d1e62a247b38ff132e4552c57259ec8b5fa3659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_22cc7e713849a5704d4324c21d1e62a247b38ff132e4552c57259ec8b5fa3659->leave($__internal_22cc7e713849a5704d4324c21d1e62a247b38ff132e4552c57259ec8b5fa3659_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
