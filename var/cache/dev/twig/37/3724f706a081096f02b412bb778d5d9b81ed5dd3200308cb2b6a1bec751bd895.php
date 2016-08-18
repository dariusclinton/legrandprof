<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_addc6a791de2974e7aa145d72799d3422f9b4b4248c4631977d654914e2cae32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_9ac48ff57b43add7549319df949d4bc02a1339ad768a67b91da82bc3002dd96a = $this->env->getExtension("native_profiler");
        $__internal_9ac48ff57b43add7549319df949d4bc02a1339ad768a67b91da82bc3002dd96a->enter($__internal_9ac48ff57b43add7549319df949d4bc02a1339ad768a67b91da82bc3002dd96a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ac48ff57b43add7549319df949d4bc02a1339ad768a67b91da82bc3002dd96a->leave($__internal_9ac48ff57b43add7549319df949d4bc02a1339ad768a67b91da82bc3002dd96a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1e203416d219b3c42fbd15e50d67e3488ddcce542482949eab18ca05e6ef492b = $this->env->getExtension("native_profiler");
        $__internal_1e203416d219b3c42fbd15e50d67e3488ddcce542482949eab18ca05e6ef492b->enter($__internal_1e203416d219b3c42fbd15e50d67e3488ddcce542482949eab18ca05e6ef492b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_1e203416d219b3c42fbd15e50d67e3488ddcce542482949eab18ca05e6ef492b->leave($__internal_1e203416d219b3c42fbd15e50d67e3488ddcce542482949eab18ca05e6ef492b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
