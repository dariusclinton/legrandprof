<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_6e65b62ede2bb5764409f4dbbc5c6c5845b409605ca8acd8cbefe76fa64afda8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_601357a1f5c5b0f34d4f6765abcc340cf029dc56cd7a8c95a7aa5af5c1bf8261 = $this->env->getExtension("native_profiler");
        $__internal_601357a1f5c5b0f34d4f6765abcc340cf029dc56cd7a8c95a7aa5af5c1bf8261->enter($__internal_601357a1f5c5b0f34d4f6765abcc340cf029dc56cd7a8c95a7aa5af5c1bf8261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_601357a1f5c5b0f34d4f6765abcc340cf029dc56cd7a8c95a7aa5af5c1bf8261->leave($__internal_601357a1f5c5b0f34d4f6765abcc340cf029dc56cd7a8c95a7aa5af5c1bf8261_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5717d77ef2ddbf53b36125f593f61152f495ccbbe93dd7f6f659fe882e8e8ee3 = $this->env->getExtension("native_profiler");
        $__internal_5717d77ef2ddbf53b36125f593f61152f495ccbbe93dd7f6f659fe882e8e8ee3->enter($__internal_5717d77ef2ddbf53b36125f593f61152f495ccbbe93dd7f6f659fe882e8e8ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_5717d77ef2ddbf53b36125f593f61152f495ccbbe93dd7f6f659fe882e8e8ee3->leave($__internal_5717d77ef2ddbf53b36125f593f61152f495ccbbe93dd7f6f659fe882e8e8ee3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
