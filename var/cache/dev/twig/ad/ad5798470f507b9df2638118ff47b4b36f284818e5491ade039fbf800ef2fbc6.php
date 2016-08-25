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
        $__internal_5afe955a964ac174050ab12e7e40668b1d2eb2ba01c3fe82f5b4e5df32d3766d = $this->env->getExtension("native_profiler");
        $__internal_5afe955a964ac174050ab12e7e40668b1d2eb2ba01c3fe82f5b4e5df32d3766d->enter($__internal_5afe955a964ac174050ab12e7e40668b1d2eb2ba01c3fe82f5b4e5df32d3766d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5afe955a964ac174050ab12e7e40668b1d2eb2ba01c3fe82f5b4e5df32d3766d->leave($__internal_5afe955a964ac174050ab12e7e40668b1d2eb2ba01c3fe82f5b4e5df32d3766d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9d18c19a3d1c113fcb381ffc7e714fa353f4c883c6924a0ba1d3519e89b28b0a = $this->env->getExtension("native_profiler");
        $__internal_9d18c19a3d1c113fcb381ffc7e714fa353f4c883c6924a0ba1d3519e89b28b0a->enter($__internal_9d18c19a3d1c113fcb381ffc7e714fa353f4c883c6924a0ba1d3519e89b28b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_9d18c19a3d1c113fcb381ffc7e714fa353f4c883c6924a0ba1d3519e89b28b0a->leave($__internal_9d18c19a3d1c113fcb381ffc7e714fa353f4c883c6924a0ba1d3519e89b28b0a_prof);

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
