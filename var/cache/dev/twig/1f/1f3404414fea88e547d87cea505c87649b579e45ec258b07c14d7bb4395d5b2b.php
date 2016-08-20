<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_dbd5d53f0cc3680a412195cd06fb3539dffb4db7a587f89e1e87b780209aa671 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_fd1ef436c7851515526ae8645571b12395cd020815e1a8e67bf9ff37c6ef525e = $this->env->getExtension("native_profiler");
        $__internal_fd1ef436c7851515526ae8645571b12395cd020815e1a8e67bf9ff37c6ef525e->enter($__internal_fd1ef436c7851515526ae8645571b12395cd020815e1a8e67bf9ff37c6ef525e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd1ef436c7851515526ae8645571b12395cd020815e1a8e67bf9ff37c6ef525e->leave($__internal_fd1ef436c7851515526ae8645571b12395cd020815e1a8e67bf9ff37c6ef525e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_28bbeb4c525e1e7a728fb4333b3b85f2d1eada19082702a14dc87f750d2792d9 = $this->env->getExtension("native_profiler");
        $__internal_28bbeb4c525e1e7a728fb4333b3b85f2d1eada19082702a14dc87f750d2792d9->enter($__internal_28bbeb4c525e1e7a728fb4333b3b85f2d1eada19082702a14dc87f750d2792d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_28bbeb4c525e1e7a728fb4333b3b85f2d1eada19082702a14dc87f750d2792d9->leave($__internal_28bbeb4c525e1e7a728fb4333b3b85f2d1eada19082702a14dc87f750d2792d9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
