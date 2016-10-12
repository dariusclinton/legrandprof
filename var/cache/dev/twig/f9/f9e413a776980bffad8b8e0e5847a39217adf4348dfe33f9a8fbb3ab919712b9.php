<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_74c7be5d57db606590f4cd98a29732ed9a362f9fd685cd18d898ca2ad852985c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_0c5e3333468a5b2e904d60f78725b434f1b99b694c3f8795229d59bdb2bbfed2 = $this->env->getExtension("native_profiler");
        $__internal_0c5e3333468a5b2e904d60f78725b434f1b99b694c3f8795229d59bdb2bbfed2->enter($__internal_0c5e3333468a5b2e904d60f78725b434f1b99b694c3f8795229d59bdb2bbfed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c5e3333468a5b2e904d60f78725b434f1b99b694c3f8795229d59bdb2bbfed2->leave($__internal_0c5e3333468a5b2e904d60f78725b434f1b99b694c3f8795229d59bdb2bbfed2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a6c3591bf79d4350415fddf76826773e6c16c78529e14abd116bcdcc2a940200 = $this->env->getExtension("native_profiler");
        $__internal_a6c3591bf79d4350415fddf76826773e6c16c78529e14abd116bcdcc2a940200->enter($__internal_a6c3591bf79d4350415fddf76826773e6c16c78529e14abd116bcdcc2a940200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_a6c3591bf79d4350415fddf76826773e6c16c78529e14abd116bcdcc2a940200->leave($__internal_a6c3591bf79d4350415fddf76826773e6c16c78529e14abd116bcdcc2a940200_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
