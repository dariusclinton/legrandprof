<?php

/* FOSUserBundle:Resetting:password_already_requested.html.twig */
class __TwigTemplate_de3a5165fa096a95801d1d2b6414f309825b160f69891d7d9a7e4ad9595fd2e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:password_already_requested.html.twig", 1);
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
        $__internal_93bc9a3a3ae7cc78e35aa707795a64650c83b69c5c18ec5a8505c5337f08e575 = $this->env->getExtension("native_profiler");
        $__internal_93bc9a3a3ae7cc78e35aa707795a64650c83b69c5c18ec5a8505c5337f08e575->enter($__internal_93bc9a3a3ae7cc78e35aa707795a64650c83b69c5c18ec5a8505c5337f08e575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:password_already_requested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93bc9a3a3ae7cc78e35aa707795a64650c83b69c5c18ec5a8505c5337f08e575->leave($__internal_93bc9a3a3ae7cc78e35aa707795a64650c83b69c5c18ec5a8505c5337f08e575_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b5e51d2d9c3f67fedcf6d66379dc6c79db3792db41e32fdaa7e44b186b0b2323 = $this->env->getExtension("native_profiler");
        $__internal_b5e51d2d9c3f67fedcf6d66379dc6c79db3792db41e32fdaa7e44b186b0b2323->enter($__internal_b5e51d2d9c3f67fedcf6d66379dc6c79db3792db41e32fdaa7e44b186b0b2323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_b5e51d2d9c3f67fedcf6d66379dc6c79db3792db41e32fdaa7e44b186b0b2323->leave($__internal_b5e51d2d9c3f67fedcf6d66379dc6c79db3792db41e32fdaa7e44b186b0b2323_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:password_already_requested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>{{ 'resetting.password_already_requested'|trans }}</p>
{% endblock fos_user_content %}
";
    }
}
