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
        $__internal_85b780113fb3a061d5993dbfb86093823d6ca3e457f2efe251d21724d8dd2c17 = $this->env->getExtension("native_profiler");
        $__internal_85b780113fb3a061d5993dbfb86093823d6ca3e457f2efe251d21724d8dd2c17->enter($__internal_85b780113fb3a061d5993dbfb86093823d6ca3e457f2efe251d21724d8dd2c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85b780113fb3a061d5993dbfb86093823d6ca3e457f2efe251d21724d8dd2c17->leave($__internal_85b780113fb3a061d5993dbfb86093823d6ca3e457f2efe251d21724d8dd2c17_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0fc8bac31685b8bedbf81b2df0018aa66d9097a527d99e0207e32ed557e96b24 = $this->env->getExtension("native_profiler");
        $__internal_0fc8bac31685b8bedbf81b2df0018aa66d9097a527d99e0207e32ed557e96b24->enter($__internal_0fc8bac31685b8bedbf81b2df0018aa66d9097a527d99e0207e32ed557e96b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_0fc8bac31685b8bedbf81b2df0018aa66d9097a527d99e0207e32ed557e96b24->leave($__internal_0fc8bac31685b8bedbf81b2df0018aa66d9097a527d99e0207e32ed557e96b24_prof);

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
