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
        $__internal_9bd7d17fd32ecc68f7488ab77f55f08a5efa384f66560c74671b5d55306bb688 = $this->env->getExtension("native_profiler");
        $__internal_9bd7d17fd32ecc68f7488ab77f55f08a5efa384f66560c74671b5d55306bb688->enter($__internal_9bd7d17fd32ecc68f7488ab77f55f08a5efa384f66560c74671b5d55306bb688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bd7d17fd32ecc68f7488ab77f55f08a5efa384f66560c74671b5d55306bb688->leave($__internal_9bd7d17fd32ecc68f7488ab77f55f08a5efa384f66560c74671b5d55306bb688_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_221808c8624dbd5f8d82ade06211034a62983bff2c20f5615a0e562dbaa7b81d = $this->env->getExtension("native_profiler");
        $__internal_221808c8624dbd5f8d82ade06211034a62983bff2c20f5615a0e562dbaa7b81d->enter($__internal_221808c8624dbd5f8d82ade06211034a62983bff2c20f5615a0e562dbaa7b81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_221808c8624dbd5f8d82ade06211034a62983bff2c20f5615a0e562dbaa7b81d->leave($__internal_221808c8624dbd5f8d82ade06211034a62983bff2c20f5615a0e562dbaa7b81d_prof);

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
