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
        $__internal_dc863eee72d7df0cd45072d47d40ffcb4b40f51e7960c61fb27a1affc47c6f2b = $this->env->getExtension("native_profiler");
        $__internal_dc863eee72d7df0cd45072d47d40ffcb4b40f51e7960c61fb27a1affc47c6f2b->enter($__internal_dc863eee72d7df0cd45072d47d40ffcb4b40f51e7960c61fb27a1affc47c6f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc863eee72d7df0cd45072d47d40ffcb4b40f51e7960c61fb27a1affc47c6f2b->leave($__internal_dc863eee72d7df0cd45072d47d40ffcb4b40f51e7960c61fb27a1affc47c6f2b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_53d9f1ff657c23d06ff2123e70f757f7dbbd688468bad811bc84d1c6351601b0 = $this->env->getExtension("native_profiler");
        $__internal_53d9f1ff657c23d06ff2123e70f757f7dbbd688468bad811bc84d1c6351601b0->enter($__internal_53d9f1ff657c23d06ff2123e70f757f7dbbd688468bad811bc84d1c6351601b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_53d9f1ff657c23d06ff2123e70f757f7dbbd688468bad811bc84d1c6351601b0->leave($__internal_53d9f1ff657c23d06ff2123e70f757f7dbbd688468bad811bc84d1c6351601b0_prof);

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
