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
        $__internal_64f43f90f107e89a231022c927bcfd204419350d8a56a92087968bbfcea37830 = $this->env->getExtension("native_profiler");
        $__internal_64f43f90f107e89a231022c927bcfd204419350d8a56a92087968bbfcea37830->enter($__internal_64f43f90f107e89a231022c927bcfd204419350d8a56a92087968bbfcea37830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64f43f90f107e89a231022c927bcfd204419350d8a56a92087968bbfcea37830->leave($__internal_64f43f90f107e89a231022c927bcfd204419350d8a56a92087968bbfcea37830_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fbe0ae05e5901bcdcdb22057243e8af1a61ae3bff236bd0705bf409c08486c32 = $this->env->getExtension("native_profiler");
        $__internal_fbe0ae05e5901bcdcdb22057243e8af1a61ae3bff236bd0705bf409c08486c32->enter($__internal_fbe0ae05e5901bcdcdb22057243e8af1a61ae3bff236bd0705bf409c08486c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_fbe0ae05e5901bcdcdb22057243e8af1a61ae3bff236bd0705bf409c08486c32->leave($__internal_fbe0ae05e5901bcdcdb22057243e8af1a61ae3bff236bd0705bf409c08486c32_prof);

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
