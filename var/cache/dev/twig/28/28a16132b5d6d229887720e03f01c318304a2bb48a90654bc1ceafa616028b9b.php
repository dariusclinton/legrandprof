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
        $__internal_878adbf05db06a31fcae123566d3aecf8459a1297cd8e4d921870b1d760fd15e = $this->env->getExtension("native_profiler");
        $__internal_878adbf05db06a31fcae123566d3aecf8459a1297cd8e4d921870b1d760fd15e->enter($__internal_878adbf05db06a31fcae123566d3aecf8459a1297cd8e4d921870b1d760fd15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_878adbf05db06a31fcae123566d3aecf8459a1297cd8e4d921870b1d760fd15e->leave($__internal_878adbf05db06a31fcae123566d3aecf8459a1297cd8e4d921870b1d760fd15e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e1dbe002ee6a5316cc13b5166790f4ca7e064864c34cb14f0c9f4202f6a64866 = $this->env->getExtension("native_profiler");
        $__internal_e1dbe002ee6a5316cc13b5166790f4ca7e064864c34cb14f0c9f4202f6a64866->enter($__internal_e1dbe002ee6a5316cc13b5166790f4ca7e064864c34cb14f0c9f4202f6a64866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e1dbe002ee6a5316cc13b5166790f4ca7e064864c34cb14f0c9f4202f6a64866->leave($__internal_e1dbe002ee6a5316cc13b5166790f4ca7e064864c34cb14f0c9f4202f6a64866_prof);

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
