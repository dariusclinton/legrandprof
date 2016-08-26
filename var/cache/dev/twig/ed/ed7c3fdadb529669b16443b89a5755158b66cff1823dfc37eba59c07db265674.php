<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_be1e132bae8340ed2a0182bfd29fdc26ce89f6f4aa09f54257e84ea80981a725 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_dc8e6c70828f3cf5d61d34c5b619d5732e5ff9b4e2242461950b5d545beac12a = $this->env->getExtension("native_profiler");
        $__internal_dc8e6c70828f3cf5d61d34c5b619d5732e5ff9b4e2242461950b5d545beac12a->enter($__internal_dc8e6c70828f3cf5d61d34c5b619d5732e5ff9b4e2242461950b5d545beac12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc8e6c70828f3cf5d61d34c5b619d5732e5ff9b4e2242461950b5d545beac12a->leave($__internal_dc8e6c70828f3cf5d61d34c5b619d5732e5ff9b4e2242461950b5d545beac12a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1568e6d38ebd81009cd7d197bfe1fd632a293d85b6bebd079a724cc45d8f49f0 = $this->env->getExtension("native_profiler");
        $__internal_1568e6d38ebd81009cd7d197bfe1fd632a293d85b6bebd079a724cc45d8f49f0->enter($__internal_1568e6d38ebd81009cd7d197bfe1fd632a293d85b6bebd079a724cc45d8f49f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_1568e6d38ebd81009cd7d197bfe1fd632a293d85b6bebd079a724cc45d8f49f0->leave($__internal_1568e6d38ebd81009cd7d197bfe1fd632a293d85b6bebd079a724cc45d8f49f0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
