<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_ec52b5077b7639cdefe61788cacbf62c3f44462d53284020fa171ffdab3e79ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_cdf6ad8b66277b9ea570cbafe48a1505a3da8a3c9bffbe400cc3bb87adfb4d31 = $this->env->getExtension("native_profiler");
        $__internal_cdf6ad8b66277b9ea570cbafe48a1505a3da8a3c9bffbe400cc3bb87adfb4d31->enter($__internal_cdf6ad8b66277b9ea570cbafe48a1505a3da8a3c9bffbe400cc3bb87adfb4d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdf6ad8b66277b9ea570cbafe48a1505a3da8a3c9bffbe400cc3bb87adfb4d31->leave($__internal_cdf6ad8b66277b9ea570cbafe48a1505a3da8a3c9bffbe400cc3bb87adfb4d31_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9fbdcb8081b3a36dfdfeb7fba749deaa8c4e6d630149de8975bc736c6d16a792 = $this->env->getExtension("native_profiler");
        $__internal_9fbdcb8081b3a36dfdfeb7fba749deaa8c4e6d630149de8975bc736c6d16a792->enter($__internal_9fbdcb8081b3a36dfdfeb7fba749deaa8c4e6d630149de8975bc736c6d16a792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_9fbdcb8081b3a36dfdfeb7fba749deaa8c4e6d630149de8975bc736c6d16a792->leave($__internal_9fbdcb8081b3a36dfdfeb7fba749deaa8c4e6d630149de8975bc736c6d16a792_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
