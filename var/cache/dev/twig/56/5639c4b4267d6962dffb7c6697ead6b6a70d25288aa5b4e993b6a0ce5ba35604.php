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
        $__internal_56e8686ec976f33370af1fe33ab5ffd2f946c4b6a50f4c77f05402ab384e47cf = $this->env->getExtension("native_profiler");
        $__internal_56e8686ec976f33370af1fe33ab5ffd2f946c4b6a50f4c77f05402ab384e47cf->enter($__internal_56e8686ec976f33370af1fe33ab5ffd2f946c4b6a50f4c77f05402ab384e47cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56e8686ec976f33370af1fe33ab5ffd2f946c4b6a50f4c77f05402ab384e47cf->leave($__internal_56e8686ec976f33370af1fe33ab5ffd2f946c4b6a50f4c77f05402ab384e47cf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2aafa05e30a08b178c33186932cccf7f6cb639eae27f260796077a12f63255e6 = $this->env->getExtension("native_profiler");
        $__internal_2aafa05e30a08b178c33186932cccf7f6cb639eae27f260796077a12f63255e6->enter($__internal_2aafa05e30a08b178c33186932cccf7f6cb639eae27f260796077a12f63255e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_2aafa05e30a08b178c33186932cccf7f6cb639eae27f260796077a12f63255e6->leave($__internal_2aafa05e30a08b178c33186932cccf7f6cb639eae27f260796077a12f63255e6_prof);

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
