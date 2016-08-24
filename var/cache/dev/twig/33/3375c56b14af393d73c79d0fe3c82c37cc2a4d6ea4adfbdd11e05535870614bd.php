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
        $__internal_34997f87e81840f2682c17837ae46df4069f22e9f8f20eee74aebcd75167c28c = $this->env->getExtension("native_profiler");
        $__internal_34997f87e81840f2682c17837ae46df4069f22e9f8f20eee74aebcd75167c28c->enter($__internal_34997f87e81840f2682c17837ae46df4069f22e9f8f20eee74aebcd75167c28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34997f87e81840f2682c17837ae46df4069f22e9f8f20eee74aebcd75167c28c->leave($__internal_34997f87e81840f2682c17837ae46df4069f22e9f8f20eee74aebcd75167c28c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_230325e9026301080a2ce260e43060a33c45fc05995b41dd2ea9543be7261e5f = $this->env->getExtension("native_profiler");
        $__internal_230325e9026301080a2ce260e43060a33c45fc05995b41dd2ea9543be7261e5f->enter($__internal_230325e9026301080a2ce260e43060a33c45fc05995b41dd2ea9543be7261e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_230325e9026301080a2ce260e43060a33c45fc05995b41dd2ea9543be7261e5f->leave($__internal_230325e9026301080a2ce260e43060a33c45fc05995b41dd2ea9543be7261e5f_prof);

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
