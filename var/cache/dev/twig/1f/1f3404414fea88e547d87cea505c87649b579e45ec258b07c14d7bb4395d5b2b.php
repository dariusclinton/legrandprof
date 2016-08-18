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
        $__internal_19b57bcd573e70043ab5a710c6c6bb8a0485e7db4604ba66fb4f92fe3df5c11e = $this->env->getExtension("native_profiler");
        $__internal_19b57bcd573e70043ab5a710c6c6bb8a0485e7db4604ba66fb4f92fe3df5c11e->enter($__internal_19b57bcd573e70043ab5a710c6c6bb8a0485e7db4604ba66fb4f92fe3df5c11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19b57bcd573e70043ab5a710c6c6bb8a0485e7db4604ba66fb4f92fe3df5c11e->leave($__internal_19b57bcd573e70043ab5a710c6c6bb8a0485e7db4604ba66fb4f92fe3df5c11e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9082dc8e1298efa339ebdfefb32267e49872339e08a48fed95965117b597eac4 = $this->env->getExtension("native_profiler");
        $__internal_9082dc8e1298efa339ebdfefb32267e49872339e08a48fed95965117b597eac4->enter($__internal_9082dc8e1298efa339ebdfefb32267e49872339e08a48fed95965117b597eac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_9082dc8e1298efa339ebdfefb32267e49872339e08a48fed95965117b597eac4->leave($__internal_9082dc8e1298efa339ebdfefb32267e49872339e08a48fed95965117b597eac4_prof);

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
