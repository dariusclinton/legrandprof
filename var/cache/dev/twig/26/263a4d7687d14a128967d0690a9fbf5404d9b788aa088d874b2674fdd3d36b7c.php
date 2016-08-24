<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_77561ebfd065ae127418de65663460602243aa631c602c07b6aacb8bf31583d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_fe0afd29c8fb6c87a1520c6d62910e9e1099ac1aa4056ebf7f63d8d9e3cad877 = $this->env->getExtension("native_profiler");
        $__internal_fe0afd29c8fb6c87a1520c6d62910e9e1099ac1aa4056ebf7f63d8d9e3cad877->enter($__internal_fe0afd29c8fb6c87a1520c6d62910e9e1099ac1aa4056ebf7f63d8d9e3cad877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe0afd29c8fb6c87a1520c6d62910e9e1099ac1aa4056ebf7f63d8d9e3cad877->leave($__internal_fe0afd29c8fb6c87a1520c6d62910e9e1099ac1aa4056ebf7f63d8d9e3cad877_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_95eac38c55a5e0f19975b9c0e66f9b6b47a064394ffb2615975a34c0de849cda = $this->env->getExtension("native_profiler");
        $__internal_95eac38c55a5e0f19975b9c0e66f9b6b47a064394ffb2615975a34c0de849cda->enter($__internal_95eac38c55a5e0f19975b9c0e66f9b6b47a064394ffb2615975a34c0de849cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_95eac38c55a5e0f19975b9c0e66f9b6b47a064394ffb2615975a34c0de849cda->leave($__internal_95eac38c55a5e0f19975b9c0e66f9b6b47a064394ffb2615975a34c0de849cda_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
