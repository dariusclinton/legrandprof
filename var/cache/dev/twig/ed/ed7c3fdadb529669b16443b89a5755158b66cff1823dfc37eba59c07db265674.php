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
        $__internal_90d001116c4e33f7d0b14e325a08c0fd647896c44b1a95a186211b485fedfc6a = $this->env->getExtension("native_profiler");
        $__internal_90d001116c4e33f7d0b14e325a08c0fd647896c44b1a95a186211b485fedfc6a->enter($__internal_90d001116c4e33f7d0b14e325a08c0fd647896c44b1a95a186211b485fedfc6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90d001116c4e33f7d0b14e325a08c0fd647896c44b1a95a186211b485fedfc6a->leave($__internal_90d001116c4e33f7d0b14e325a08c0fd647896c44b1a95a186211b485fedfc6a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc0da26455ba5bafc79dfa0efca4eb99fa51daf3fc01b24ba46c4b4e2870d7a1 = $this->env->getExtension("native_profiler");
        $__internal_dc0da26455ba5bafc79dfa0efca4eb99fa51daf3fc01b24ba46c4b4e2870d7a1->enter($__internal_dc0da26455ba5bafc79dfa0efca4eb99fa51daf3fc01b24ba46c4b4e2870d7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_dc0da26455ba5bafc79dfa0efca4eb99fa51daf3fc01b24ba46c4b4e2870d7a1->leave($__internal_dc0da26455ba5bafc79dfa0efca4eb99fa51daf3fc01b24ba46c4b4e2870d7a1_prof);

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
