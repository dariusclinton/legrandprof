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
        $__internal_5b742c31d1e90ed78ae99e384d078c996aaa69717dfb113f082c7494f9f69666 = $this->env->getExtension("native_profiler");
        $__internal_5b742c31d1e90ed78ae99e384d078c996aaa69717dfb113f082c7494f9f69666->enter($__internal_5b742c31d1e90ed78ae99e384d078c996aaa69717dfb113f082c7494f9f69666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b742c31d1e90ed78ae99e384d078c996aaa69717dfb113f082c7494f9f69666->leave($__internal_5b742c31d1e90ed78ae99e384d078c996aaa69717dfb113f082c7494f9f69666_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb333b334e7ba68dff79dd8c619fb2299b0f8610ad3f709d55a12a5829f8d885 = $this->env->getExtension("native_profiler");
        $__internal_bb333b334e7ba68dff79dd8c619fb2299b0f8610ad3f709d55a12a5829f8d885->enter($__internal_bb333b334e7ba68dff79dd8c619fb2299b0f8610ad3f709d55a12a5829f8d885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_bb333b334e7ba68dff79dd8c619fb2299b0f8610ad3f709d55a12a5829f8d885->leave($__internal_bb333b334e7ba68dff79dd8c619fb2299b0f8610ad3f709d55a12a5829f8d885_prof);

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
