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
        $__internal_22f4b79139176f7cc06b5152cbd229816a15b4a5605b83095dfa6fc7451e31f9 = $this->env->getExtension("native_profiler");
        $__internal_22f4b79139176f7cc06b5152cbd229816a15b4a5605b83095dfa6fc7451e31f9->enter($__internal_22f4b79139176f7cc06b5152cbd229816a15b4a5605b83095dfa6fc7451e31f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22f4b79139176f7cc06b5152cbd229816a15b4a5605b83095dfa6fc7451e31f9->leave($__internal_22f4b79139176f7cc06b5152cbd229816a15b4a5605b83095dfa6fc7451e31f9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_11963286a0795d28ae94620d6e16dfb64b67a402af233357282141dd3adfe979 = $this->env->getExtension("native_profiler");
        $__internal_11963286a0795d28ae94620d6e16dfb64b67a402af233357282141dd3adfe979->enter($__internal_11963286a0795d28ae94620d6e16dfb64b67a402af233357282141dd3adfe979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_11963286a0795d28ae94620d6e16dfb64b67a402af233357282141dd3adfe979->leave($__internal_11963286a0795d28ae94620d6e16dfb64b67a402af233357282141dd3adfe979_prof);

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
