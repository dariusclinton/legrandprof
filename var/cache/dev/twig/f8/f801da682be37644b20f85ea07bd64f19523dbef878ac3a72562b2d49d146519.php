<?php

/* @LGPUser/Registration/checkEmail.html.twig */
class __TwigTemplate_7aae9c1e0e87ac6aae144a0fd6c3497add40fe654b15084734373b8ceeea6021 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@LGPUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_21ac815a3a1e03ec938f3a008e263b4cef377bbe0bbbf5924fbe0625a709d88f = $this->env->getExtension("native_profiler");
        $__internal_21ac815a3a1e03ec938f3a008e263b4cef377bbe0bbbf5924fbe0625a709d88f->enter($__internal_21ac815a3a1e03ec938f3a008e263b4cef377bbe0bbbf5924fbe0625a709d88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21ac815a3a1e03ec938f3a008e263b4cef377bbe0bbbf5924fbe0625a709d88f->leave($__internal_21ac815a3a1e03ec938f3a008e263b4cef377bbe0bbbf5924fbe0625a709d88f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f3253f4a6a64ded372cede7900357cf605391b3fad2bbb8d5a8b5b3ffe6e00b2 = $this->env->getExtension("native_profiler");
        $__internal_f3253f4a6a64ded372cede7900357cf605391b3fad2bbb8d5a8b5b3ffe6e00b2->enter($__internal_f3253f4a6a64ded372cede7900357cf605391b3fad2bbb8d5a8b5b3ffe6e00b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f3253f4a6a64ded372cede7900357cf605391b3fad2bbb8d5a8b5b3ffe6e00b2->leave($__internal_f3253f4a6a64ded372cede7900357cf605391b3fad2bbb8d5a8b5b3ffe6e00b2_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Registration/checkEmail.html.twig";
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
