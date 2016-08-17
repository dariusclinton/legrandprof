<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_57a580726f6f38382b614b6cee9b7d20d12470429cc0ae9d2ecf1aac06549105 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_4dd4a660c35f0b9e233839e26a09cdec5f6a9f8c9adc7c0a4026f256a067ec2f = $this->env->getExtension("native_profiler");
        $__internal_4dd4a660c35f0b9e233839e26a09cdec5f6a9f8c9adc7c0a4026f256a067ec2f->enter($__internal_4dd4a660c35f0b9e233839e26a09cdec5f6a9f8c9adc7c0a4026f256a067ec2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dd4a660c35f0b9e233839e26a09cdec5f6a9f8c9adc7c0a4026f256a067ec2f->leave($__internal_4dd4a660c35f0b9e233839e26a09cdec5f6a9f8c9adc7c0a4026f256a067ec2f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7dca6b6d2fca337bd4f097d0f970c39673a24f518c5c50380d1d5556b9214ba8 = $this->env->getExtension("native_profiler");
        $__internal_7dca6b6d2fca337bd4f097d0f970c39673a24f518c5c50380d1d5556b9214ba8->enter($__internal_7dca6b6d2fca337bd4f097d0f970c39673a24f518c5c50380d1d5556b9214ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_7dca6b6d2fca337bd4f097d0f970c39673a24f518c5c50380d1d5556b9214ba8->leave($__internal_7dca6b6d2fca337bd4f097d0f970c39673a24f518c5c50380d1d5556b9214ba8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
