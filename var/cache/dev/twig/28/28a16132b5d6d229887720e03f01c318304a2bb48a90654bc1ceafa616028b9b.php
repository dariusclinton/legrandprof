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
        $__internal_b7746a3a0e57765a26b603192c25faaf4783ed0a30e9d3d5ec5791a9c7e69b9e = $this->env->getExtension("native_profiler");
        $__internal_b7746a3a0e57765a26b603192c25faaf4783ed0a30e9d3d5ec5791a9c7e69b9e->enter($__internal_b7746a3a0e57765a26b603192c25faaf4783ed0a30e9d3d5ec5791a9c7e69b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7746a3a0e57765a26b603192c25faaf4783ed0a30e9d3d5ec5791a9c7e69b9e->leave($__internal_b7746a3a0e57765a26b603192c25faaf4783ed0a30e9d3d5ec5791a9c7e69b9e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_480a58ad961520917ebf2d770551e0866381e01f7e1c189d759d94d7c6363f7a = $this->env->getExtension("native_profiler");
        $__internal_480a58ad961520917ebf2d770551e0866381e01f7e1c189d759d94d7c6363f7a->enter($__internal_480a58ad961520917ebf2d770551e0866381e01f7e1c189d759d94d7c6363f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_480a58ad961520917ebf2d770551e0866381e01f7e1c189d759d94d7c6363f7a->leave($__internal_480a58ad961520917ebf2d770551e0866381e01f7e1c189d759d94d7c6363f7a_prof);

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
