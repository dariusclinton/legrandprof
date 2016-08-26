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
        $__internal_95d8d421154078ad7e02ce90d1a48d78fbfaf1bf201d091a88ad273957d3964e = $this->env->getExtension("native_profiler");
        $__internal_95d8d421154078ad7e02ce90d1a48d78fbfaf1bf201d091a88ad273957d3964e->enter($__internal_95d8d421154078ad7e02ce90d1a48d78fbfaf1bf201d091a88ad273957d3964e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95d8d421154078ad7e02ce90d1a48d78fbfaf1bf201d091a88ad273957d3964e->leave($__internal_95d8d421154078ad7e02ce90d1a48d78fbfaf1bf201d091a88ad273957d3964e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c1c7dfa12eb5c579d14bb0e182c04c0148b00e609343cb952a85aa16c34da1f6 = $this->env->getExtension("native_profiler");
        $__internal_c1c7dfa12eb5c579d14bb0e182c04c0148b00e609343cb952a85aa16c34da1f6->enter($__internal_c1c7dfa12eb5c579d14bb0e182c04c0148b00e609343cb952a85aa16c34da1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_c1c7dfa12eb5c579d14bb0e182c04c0148b00e609343cb952a85aa16c34da1f6->leave($__internal_c1c7dfa12eb5c579d14bb0e182c04c0148b00e609343cb952a85aa16c34da1f6_prof);

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
