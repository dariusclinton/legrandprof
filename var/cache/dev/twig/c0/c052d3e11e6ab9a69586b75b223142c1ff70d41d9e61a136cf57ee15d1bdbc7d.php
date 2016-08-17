<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_76f956740670e1d0c7cf76e1e38e59ae9e7cd737e87007a415e8dc0b23580121 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_d94ab1b043f53317eb90d6db2dda2d28e9dc122d95d8ddb1b233ded7aeffd02e = $this->env->getExtension("native_profiler");
        $__internal_d94ab1b043f53317eb90d6db2dda2d28e9dc122d95d8ddb1b233ded7aeffd02e->enter($__internal_d94ab1b043f53317eb90d6db2dda2d28e9dc122d95d8ddb1b233ded7aeffd02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d94ab1b043f53317eb90d6db2dda2d28e9dc122d95d8ddb1b233ded7aeffd02e->leave($__internal_d94ab1b043f53317eb90d6db2dda2d28e9dc122d95d8ddb1b233ded7aeffd02e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a4e8f4032213402d97467ed0b18d87c78c104fcdfb696f950b1a171b82c48eab = $this->env->getExtension("native_profiler");
        $__internal_a4e8f4032213402d97467ed0b18d87c78c104fcdfb696f950b1a171b82c48eab->enter($__internal_a4e8f4032213402d97467ed0b18d87c78c104fcdfb696f950b1a171b82c48eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a4e8f4032213402d97467ed0b18d87c78c104fcdfb696f950b1a171b82c48eab->leave($__internal_a4e8f4032213402d97467ed0b18d87c78c104fcdfb696f950b1a171b82c48eab_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
