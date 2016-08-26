<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_ec52b5077b7639cdefe61788cacbf62c3f44462d53284020fa171ffdab3e79ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_b3946d0e43fb3f7f2584ebf9bd99b87749a50df9ca89b26d5daed6a0383e43f5 = $this->env->getExtension("native_profiler");
        $__internal_b3946d0e43fb3f7f2584ebf9bd99b87749a50df9ca89b26d5daed6a0383e43f5->enter($__internal_b3946d0e43fb3f7f2584ebf9bd99b87749a50df9ca89b26d5daed6a0383e43f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3946d0e43fb3f7f2584ebf9bd99b87749a50df9ca89b26d5daed6a0383e43f5->leave($__internal_b3946d0e43fb3f7f2584ebf9bd99b87749a50df9ca89b26d5daed6a0383e43f5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c6b3cbb2faeb0a85f16de1a648754e0f4cf71254e8f546b794e3d03a96bda28c = $this->env->getExtension("native_profiler");
        $__internal_c6b3cbb2faeb0a85f16de1a648754e0f4cf71254e8f546b794e3d03a96bda28c->enter($__internal_c6b3cbb2faeb0a85f16de1a648754e0f4cf71254e8f546b794e3d03a96bda28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_c6b3cbb2faeb0a85f16de1a648754e0f4cf71254e8f546b794e3d03a96bda28c->leave($__internal_c6b3cbb2faeb0a85f16de1a648754e0f4cf71254e8f546b794e3d03a96bda28c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
