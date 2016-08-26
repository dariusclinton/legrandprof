<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_2a00b1dac2c61a734ba3034bd7813c4ce86417a5f2788a98b4230a1dff6fda7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_30107675d11319a47e7649ebae2cd41bc5bb846fda2ff914634a16ac5e43a39c = $this->env->getExtension("native_profiler");
        $__internal_30107675d11319a47e7649ebae2cd41bc5bb846fda2ff914634a16ac5e43a39c->enter($__internal_30107675d11319a47e7649ebae2cd41bc5bb846fda2ff914634a16ac5e43a39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30107675d11319a47e7649ebae2cd41bc5bb846fda2ff914634a16ac5e43a39c->leave($__internal_30107675d11319a47e7649ebae2cd41bc5bb846fda2ff914634a16ac5e43a39c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1870bc0f7b23ca8cd97ea5fc8c415c6c64a1ecd5f436ca93f82a944560c2f0b3 = $this->env->getExtension("native_profiler");
        $__internal_1870bc0f7b23ca8cd97ea5fc8c415c6c64a1ecd5f436ca93f82a944560c2f0b3->enter($__internal_1870bc0f7b23ca8cd97ea5fc8c415c6c64a1ecd5f436ca93f82a944560c2f0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_1870bc0f7b23ca8cd97ea5fc8c415c6c64a1ecd5f436ca93f82a944560c2f0b3->leave($__internal_1870bc0f7b23ca8cd97ea5fc8c415c6c64a1ecd5f436ca93f82a944560c2f0b3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
