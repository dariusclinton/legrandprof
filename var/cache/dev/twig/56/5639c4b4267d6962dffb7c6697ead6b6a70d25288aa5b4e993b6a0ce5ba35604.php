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
        $__internal_f891b360755179a1fd47d61eaf5b6e1e0144be728a68f798f0af8a3269b64aee = $this->env->getExtension("native_profiler");
        $__internal_f891b360755179a1fd47d61eaf5b6e1e0144be728a68f798f0af8a3269b64aee->enter($__internal_f891b360755179a1fd47d61eaf5b6e1e0144be728a68f798f0af8a3269b64aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f891b360755179a1fd47d61eaf5b6e1e0144be728a68f798f0af8a3269b64aee->leave($__internal_f891b360755179a1fd47d61eaf5b6e1e0144be728a68f798f0af8a3269b64aee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d124161ff520477a445ca451becdcec51b78ffcdfc8719f312c91d6c809446e2 = $this->env->getExtension("native_profiler");
        $__internal_d124161ff520477a445ca451becdcec51b78ffcdfc8719f312c91d6c809446e2->enter($__internal_d124161ff520477a445ca451becdcec51b78ffcdfc8719f312c91d6c809446e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_d124161ff520477a445ca451becdcec51b78ffcdfc8719f312c91d6c809446e2->leave($__internal_d124161ff520477a445ca451becdcec51b78ffcdfc8719f312c91d6c809446e2_prof);

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
