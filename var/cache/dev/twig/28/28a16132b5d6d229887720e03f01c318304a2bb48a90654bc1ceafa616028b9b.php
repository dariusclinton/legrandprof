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
        $__internal_edefb73ee18257292a3a29a575d0febb20b4a2b23b10acc4753071826daa9453 = $this->env->getExtension("native_profiler");
        $__internal_edefb73ee18257292a3a29a575d0febb20b4a2b23b10acc4753071826daa9453->enter($__internal_edefb73ee18257292a3a29a575d0febb20b4a2b23b10acc4753071826daa9453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edefb73ee18257292a3a29a575d0febb20b4a2b23b10acc4753071826daa9453->leave($__internal_edefb73ee18257292a3a29a575d0febb20b4a2b23b10acc4753071826daa9453_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3fcb9f6b4b4472a478e98c449440cdf7ea826f93818c24ea7d7925aae6205bd2 = $this->env->getExtension("native_profiler");
        $__internal_3fcb9f6b4b4472a478e98c449440cdf7ea826f93818c24ea7d7925aae6205bd2->enter($__internal_3fcb9f6b4b4472a478e98c449440cdf7ea826f93818c24ea7d7925aae6205bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_3fcb9f6b4b4472a478e98c449440cdf7ea826f93818c24ea7d7925aae6205bd2->leave($__internal_3fcb9f6b4b4472a478e98c449440cdf7ea826f93818c24ea7d7925aae6205bd2_prof);

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
