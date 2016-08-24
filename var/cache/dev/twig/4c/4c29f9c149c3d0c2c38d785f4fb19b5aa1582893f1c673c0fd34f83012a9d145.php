<?php

/* @LGPUser/Registration/register.html.twig */
class __TwigTemplate_7fee79d169dc4609d180808d7c2a6cdfc7cb7aed15a819309c1b79c098c137b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@LGPUser/Registration/register.html.twig", 1);
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
        $__internal_708536494ebf71d055bf8c96cf8ef19fe74d73ce2b744fbde7bf75fd75cf407d = $this->env->getExtension("native_profiler");
        $__internal_708536494ebf71d055bf8c96cf8ef19fe74d73ce2b744fbde7bf75fd75cf407d->enter($__internal_708536494ebf71d055bf8c96cf8ef19fe74d73ce2b744fbde7bf75fd75cf407d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_708536494ebf71d055bf8c96cf8ef19fe74d73ce2b744fbde7bf75fd75cf407d->leave($__internal_708536494ebf71d055bf8c96cf8ef19fe74d73ce2b744fbde7bf75fd75cf407d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cf66404d1421f7d745e4c78e0f09e2f7e06a748d0774b515f5d5bb96b700ddce = $this->env->getExtension("native_profiler");
        $__internal_cf66404d1421f7d745e4c78e0f09e2f7e06a748d0774b515f5d5bb96b700ddce->enter($__internal_cf66404d1421f7d745e4c78e0f09e2f7e06a748d0774b515f5d5bb96b700ddce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "  ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@LGPUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_cf66404d1421f7d745e4c78e0f09e2f7e06a748d0774b515f5d5bb96b700ddce->leave($__internal_cf66404d1421f7d745e4c78e0f09e2f7e06a748d0774b515f5d5bb96b700ddce_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Registration/register.html.twig";
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
/*   {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
