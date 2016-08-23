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
        $__internal_4801729d4baf732eb5103d6441307fbd35211185d7dc51e58a40f8195224859f = $this->env->getExtension("native_profiler");
        $__internal_4801729d4baf732eb5103d6441307fbd35211185d7dc51e58a40f8195224859f->enter($__internal_4801729d4baf732eb5103d6441307fbd35211185d7dc51e58a40f8195224859f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4801729d4baf732eb5103d6441307fbd35211185d7dc51e58a40f8195224859f->leave($__internal_4801729d4baf732eb5103d6441307fbd35211185d7dc51e58a40f8195224859f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f80b333bc09808086493cd91727f89dff8f6cab81f03fd0224a9e6671ee28bb9 = $this->env->getExtension("native_profiler");
        $__internal_f80b333bc09808086493cd91727f89dff8f6cab81f03fd0224a9e6671ee28bb9->enter($__internal_f80b333bc09808086493cd91727f89dff8f6cab81f03fd0224a9e6671ee28bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_f80b333bc09808086493cd91727f89dff8f6cab81f03fd0224a9e6671ee28bb9->leave($__internal_f80b333bc09808086493cd91727f89dff8f6cab81f03fd0224a9e6671ee28bb9_prof);

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
