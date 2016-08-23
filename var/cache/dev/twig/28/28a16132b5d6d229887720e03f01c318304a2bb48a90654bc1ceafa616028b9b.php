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
        $__internal_e64487ecbec37a6e6b6796063ddd930de807abcae56e05b87cc386fecabdb878 = $this->env->getExtension("native_profiler");
        $__internal_e64487ecbec37a6e6b6796063ddd930de807abcae56e05b87cc386fecabdb878->enter($__internal_e64487ecbec37a6e6b6796063ddd930de807abcae56e05b87cc386fecabdb878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e64487ecbec37a6e6b6796063ddd930de807abcae56e05b87cc386fecabdb878->leave($__internal_e64487ecbec37a6e6b6796063ddd930de807abcae56e05b87cc386fecabdb878_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a322817fe531438db288bf8eb433a45a47ce68d462b573ce87327fd8aae769a4 = $this->env->getExtension("native_profiler");
        $__internal_a322817fe531438db288bf8eb433a45a47ce68d462b573ce87327fd8aae769a4->enter($__internal_a322817fe531438db288bf8eb433a45a47ce68d462b573ce87327fd8aae769a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a322817fe531438db288bf8eb433a45a47ce68d462b573ce87327fd8aae769a4->leave($__internal_a322817fe531438db288bf8eb433a45a47ce68d462b573ce87327fd8aae769a4_prof);

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
