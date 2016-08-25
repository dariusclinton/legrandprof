<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_6e65b62ede2bb5764409f4dbbc5c6c5845b409605ca8acd8cbefe76fa64afda8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_ecffe13f88a618ec9e4797d21b14a4b446c4d6472bf3ecf8d847685670be839c = $this->env->getExtension("native_profiler");
        $__internal_ecffe13f88a618ec9e4797d21b14a4b446c4d6472bf3ecf8d847685670be839c->enter($__internal_ecffe13f88a618ec9e4797d21b14a4b446c4d6472bf3ecf8d847685670be839c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecffe13f88a618ec9e4797d21b14a4b446c4d6472bf3ecf8d847685670be839c->leave($__internal_ecffe13f88a618ec9e4797d21b14a4b446c4d6472bf3ecf8d847685670be839c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_191d6a92c2140aec6fdb41b8ca9df24e47c71bdfb6694bba35b8c2d127780fd0 = $this->env->getExtension("native_profiler");
        $__internal_191d6a92c2140aec6fdb41b8ca9df24e47c71bdfb6694bba35b8c2d127780fd0->enter($__internal_191d6a92c2140aec6fdb41b8ca9df24e47c71bdfb6694bba35b8c2d127780fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_191d6a92c2140aec6fdb41b8ca9df24e47c71bdfb6694bba35b8c2d127780fd0->leave($__internal_191d6a92c2140aec6fdb41b8ca9df24e47c71bdfb6694bba35b8c2d127780fd0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
