<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_27a09d736fac03f0d4c39cae07b895e26a09caedb8ed943a9e6b28bf4fd87ef0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_9ca411de1e060dbf66846bcff0b05283d516c3dc579aaa15aeed7d54d69a8c3f = $this->env->getExtension("native_profiler");
        $__internal_9ca411de1e060dbf66846bcff0b05283d516c3dc579aaa15aeed7d54d69a8c3f->enter($__internal_9ca411de1e060dbf66846bcff0b05283d516c3dc579aaa15aeed7d54d69a8c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ca411de1e060dbf66846bcff0b05283d516c3dc579aaa15aeed7d54d69a8c3f->leave($__internal_9ca411de1e060dbf66846bcff0b05283d516c3dc579aaa15aeed7d54d69a8c3f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9fa20184702c82e95e3afb5948914ec6c5059c3bca26e3d30b0a73ccc1c58029 = $this->env->getExtension("native_profiler");
        $__internal_9fa20184702c82e95e3afb5948914ec6c5059c3bca26e3d30b0a73ccc1c58029->enter($__internal_9fa20184702c82e95e3afb5948914ec6c5059c3bca26e3d30b0a73ccc1c58029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_9fa20184702c82e95e3afb5948914ec6c5059c3bca26e3d30b0a73ccc1c58029->leave($__internal_9fa20184702c82e95e3afb5948914ec6c5059c3bca26e3d30b0a73ccc1c58029_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
