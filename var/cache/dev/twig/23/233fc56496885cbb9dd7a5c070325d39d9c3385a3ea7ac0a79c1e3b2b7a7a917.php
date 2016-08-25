<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_a68c2b58d2abb85a6ac70f5fda3b1ec34cd0ed57b34ee6d7df1118ef3eca3954 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_f11978658409326408bea2afa2ebe0188df6a7680db5af82ea208c5da13fa32f = $this->env->getExtension("native_profiler");
        $__internal_f11978658409326408bea2afa2ebe0188df6a7680db5af82ea208c5da13fa32f->enter($__internal_f11978658409326408bea2afa2ebe0188df6a7680db5af82ea208c5da13fa32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f11978658409326408bea2afa2ebe0188df6a7680db5af82ea208c5da13fa32f->leave($__internal_f11978658409326408bea2afa2ebe0188df6a7680db5af82ea208c5da13fa32f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_268c4148e303e9fa00370362df50ffb51b9fabb5606e08210bbb1d15e17e597e = $this->env->getExtension("native_profiler");
        $__internal_268c4148e303e9fa00370362df50ffb51b9fabb5606e08210bbb1d15e17e597e->enter($__internal_268c4148e303e9fa00370362df50ffb51b9fabb5606e08210bbb1d15e17e597e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_268c4148e303e9fa00370362df50ffb51b9fabb5606e08210bbb1d15e17e597e->leave($__internal_268c4148e303e9fa00370362df50ffb51b9fabb5606e08210bbb1d15e17e597e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
