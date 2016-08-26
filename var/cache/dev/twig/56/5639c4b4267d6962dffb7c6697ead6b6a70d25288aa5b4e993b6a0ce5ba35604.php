<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_80464fbf5868c0c8865ff25d806c3d60bd8e2ff3da8e6d052d8dd565e21d7503 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_d4f4bdf49cf61f326325d1cb710a2ee78933207013f273fc4d01c42e97b27814 = $this->env->getExtension("native_profiler");
        $__internal_d4f4bdf49cf61f326325d1cb710a2ee78933207013f273fc4d01c42e97b27814->enter($__internal_d4f4bdf49cf61f326325d1cb710a2ee78933207013f273fc4d01c42e97b27814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4f4bdf49cf61f326325d1cb710a2ee78933207013f273fc4d01c42e97b27814->leave($__internal_d4f4bdf49cf61f326325d1cb710a2ee78933207013f273fc4d01c42e97b27814_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb83e984491c4e0d4aa8ca3ae7ab251a410f09e3eecc6975dc501a602a8722f7 = $this->env->getExtension("native_profiler");
        $__internal_bb83e984491c4e0d4aa8ca3ae7ab251a410f09e3eecc6975dc501a602a8722f7->enter($__internal_bb83e984491c4e0d4aa8ca3ae7ab251a410f09e3eecc6975dc501a602a8722f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_bb83e984491c4e0d4aa8ca3ae7ab251a410f09e3eecc6975dc501a602a8722f7->leave($__internal_bb83e984491c4e0d4aa8ca3ae7ab251a410f09e3eecc6975dc501a602a8722f7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
