<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_80464fbf5868c0c8865ff25d806c3d60bd8e2ff3da8e6d052d8dd565e21d7503 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_88a459348f1dfe4b192c4417fa2a09bf330671b4da342342cd2d8cf9ef479078 = $this->env->getExtension("native_profiler");
        $__internal_88a459348f1dfe4b192c4417fa2a09bf330671b4da342342cd2d8cf9ef479078->enter($__internal_88a459348f1dfe4b192c4417fa2a09bf330671b4da342342cd2d8cf9ef479078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88a459348f1dfe4b192c4417fa2a09bf330671b4da342342cd2d8cf9ef479078->leave($__internal_88a459348f1dfe4b192c4417fa2a09bf330671b4da342342cd2d8cf9ef479078_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_965254dff1300542f16917f65636a47578f9a5975b59304779f16828d9b40e61 = $this->env->getExtension("native_profiler");
        $__internal_965254dff1300542f16917f65636a47578f9a5975b59304779f16828d9b40e61->enter($__internal_965254dff1300542f16917f65636a47578f9a5975b59304779f16828d9b40e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_965254dff1300542f16917f65636a47578f9a5975b59304779f16828d9b40e61->leave($__internal_965254dff1300542f16917f65636a47578f9a5975b59304779f16828d9b40e61_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
