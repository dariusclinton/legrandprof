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
        $__internal_de96dcbe98b3bea63dd02cdd8aa6d15e6a9d37e406a7e12a5aea31b15ec5f753 = $this->env->getExtension("native_profiler");
        $__internal_de96dcbe98b3bea63dd02cdd8aa6d15e6a9d37e406a7e12a5aea31b15ec5f753->enter($__internal_de96dcbe98b3bea63dd02cdd8aa6d15e6a9d37e406a7e12a5aea31b15ec5f753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de96dcbe98b3bea63dd02cdd8aa6d15e6a9d37e406a7e12a5aea31b15ec5f753->leave($__internal_de96dcbe98b3bea63dd02cdd8aa6d15e6a9d37e406a7e12a5aea31b15ec5f753_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0abd22db59032b935e49da4695967593412a73b9dfd3ddc3db75463b166546ad = $this->env->getExtension("native_profiler");
        $__internal_0abd22db59032b935e49da4695967593412a73b9dfd3ddc3db75463b166546ad->enter($__internal_0abd22db59032b935e49da4695967593412a73b9dfd3ddc3db75463b166546ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_0abd22db59032b935e49da4695967593412a73b9dfd3ddc3db75463b166546ad->leave($__internal_0abd22db59032b935e49da4695967593412a73b9dfd3ddc3db75463b166546ad_prof);

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
