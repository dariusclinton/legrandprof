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
        $__internal_3029aaaf3d43d886d3f2d05e7c2c9ac04b2a61b51bb590cf90cd7c204cbbd642 = $this->env->getExtension("native_profiler");
        $__internal_3029aaaf3d43d886d3f2d05e7c2c9ac04b2a61b51bb590cf90cd7c204cbbd642->enter($__internal_3029aaaf3d43d886d3f2d05e7c2c9ac04b2a61b51bb590cf90cd7c204cbbd642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3029aaaf3d43d886d3f2d05e7c2c9ac04b2a61b51bb590cf90cd7c204cbbd642->leave($__internal_3029aaaf3d43d886d3f2d05e7c2c9ac04b2a61b51bb590cf90cd7c204cbbd642_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dcb7665dc75e83bd7998955a553bf9be3336ad5025e6d3ea1c72dbb3025b2151 = $this->env->getExtension("native_profiler");
        $__internal_dcb7665dc75e83bd7998955a553bf9be3336ad5025e6d3ea1c72dbb3025b2151->enter($__internal_dcb7665dc75e83bd7998955a553bf9be3336ad5025e6d3ea1c72dbb3025b2151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_dcb7665dc75e83bd7998955a553bf9be3336ad5025e6d3ea1c72dbb3025b2151->leave($__internal_dcb7665dc75e83bd7998955a553bf9be3336ad5025e6d3ea1c72dbb3025b2151_prof);

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
