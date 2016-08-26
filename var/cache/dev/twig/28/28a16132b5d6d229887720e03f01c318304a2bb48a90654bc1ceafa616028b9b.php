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
        $__internal_9dce8ee06ff51e45aae153b06368d4615695359a022f6af30ced1e7bfbf5176a = $this->env->getExtension("native_profiler");
        $__internal_9dce8ee06ff51e45aae153b06368d4615695359a022f6af30ced1e7bfbf5176a->enter($__internal_9dce8ee06ff51e45aae153b06368d4615695359a022f6af30ced1e7bfbf5176a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9dce8ee06ff51e45aae153b06368d4615695359a022f6af30ced1e7bfbf5176a->leave($__internal_9dce8ee06ff51e45aae153b06368d4615695359a022f6af30ced1e7bfbf5176a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_57bc1e1ec16c7c3112e175158fafc9f5620d871167c9df0167f00dee892fce94 = $this->env->getExtension("native_profiler");
        $__internal_57bc1e1ec16c7c3112e175158fafc9f5620d871167c9df0167f00dee892fce94->enter($__internal_57bc1e1ec16c7c3112e175158fafc9f5620d871167c9df0167f00dee892fce94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_57bc1e1ec16c7c3112e175158fafc9f5620d871167c9df0167f00dee892fce94->leave($__internal_57bc1e1ec16c7c3112e175158fafc9f5620d871167c9df0167f00dee892fce94_prof);

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
