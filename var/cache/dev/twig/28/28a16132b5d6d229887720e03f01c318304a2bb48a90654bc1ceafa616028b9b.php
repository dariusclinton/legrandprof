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
        $__internal_8e0110f9eb826dddce785b994d0ebb12bfda82b54673841ffeb7ddfb1aa7681d = $this->env->getExtension("native_profiler");
        $__internal_8e0110f9eb826dddce785b994d0ebb12bfda82b54673841ffeb7ddfb1aa7681d->enter($__internal_8e0110f9eb826dddce785b994d0ebb12bfda82b54673841ffeb7ddfb1aa7681d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e0110f9eb826dddce785b994d0ebb12bfda82b54673841ffeb7ddfb1aa7681d->leave($__internal_8e0110f9eb826dddce785b994d0ebb12bfda82b54673841ffeb7ddfb1aa7681d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d19ff3ee66282cf5d8f1d2bbb83f995d2be4777b8631a5a737b83ed42427b05c = $this->env->getExtension("native_profiler");
        $__internal_d19ff3ee66282cf5d8f1d2bbb83f995d2be4777b8631a5a737b83ed42427b05c->enter($__internal_d19ff3ee66282cf5d8f1d2bbb83f995d2be4777b8631a5a737b83ed42427b05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d19ff3ee66282cf5d8f1d2bbb83f995d2be4777b8631a5a737b83ed42427b05c->leave($__internal_d19ff3ee66282cf5d8f1d2bbb83f995d2be4777b8631a5a737b83ed42427b05c_prof);

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
