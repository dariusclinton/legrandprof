<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_ee0985f62d4eacb1eb1f956850499e166fce5a6d04d9851b488e299475614d4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_2a55a11dba71b6637430cd7cadde1e3e00ee53131fbded390aa06b460ce6cf6a = $this->env->getExtension("native_profiler");
        $__internal_2a55a11dba71b6637430cd7cadde1e3e00ee53131fbded390aa06b460ce6cf6a->enter($__internal_2a55a11dba71b6637430cd7cadde1e3e00ee53131fbded390aa06b460ce6cf6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a55a11dba71b6637430cd7cadde1e3e00ee53131fbded390aa06b460ce6cf6a->leave($__internal_2a55a11dba71b6637430cd7cadde1e3e00ee53131fbded390aa06b460ce6cf6a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_946a11847691814bbb7f56c2a4582ead134b383bbd3189afbcfe5cf1ed6d9fc5 = $this->env->getExtension("native_profiler");
        $__internal_946a11847691814bbb7f56c2a4582ead134b383bbd3189afbcfe5cf1ed6d9fc5->enter($__internal_946a11847691814bbb7f56c2a4582ead134b383bbd3189afbcfe5cf1ed6d9fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_946a11847691814bbb7f56c2a4582ead134b383bbd3189afbcfe5cf1ed6d9fc5->leave($__internal_946a11847691814bbb7f56c2a4582ead134b383bbd3189afbcfe5cf1ed6d9fc5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
