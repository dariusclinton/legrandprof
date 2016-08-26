<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_57a580726f6f38382b614b6cee9b7d20d12470429cc0ae9d2ecf1aac06549105 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_0137fe2149cc0d2d2e5c07f80122ab3a18a7e4133ce406f057f8a3ff684a6eca = $this->env->getExtension("native_profiler");
        $__internal_0137fe2149cc0d2d2e5c07f80122ab3a18a7e4133ce406f057f8a3ff684a6eca->enter($__internal_0137fe2149cc0d2d2e5c07f80122ab3a18a7e4133ce406f057f8a3ff684a6eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0137fe2149cc0d2d2e5c07f80122ab3a18a7e4133ce406f057f8a3ff684a6eca->leave($__internal_0137fe2149cc0d2d2e5c07f80122ab3a18a7e4133ce406f057f8a3ff684a6eca_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e0138e700b1fdf9f3ebab746faa1a17fa7de0a7104d651f2abec229836de9ba1 = $this->env->getExtension("native_profiler");
        $__internal_e0138e700b1fdf9f3ebab746faa1a17fa7de0a7104d651f2abec229836de9ba1->enter($__internal_e0138e700b1fdf9f3ebab746faa1a17fa7de0a7104d651f2abec229836de9ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_e0138e700b1fdf9f3ebab746faa1a17fa7de0a7104d651f2abec229836de9ba1->leave($__internal_e0138e700b1fdf9f3ebab746faa1a17fa7de0a7104d651f2abec229836de9ba1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
