<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_8289a9aa6768909206d53459e47ae4d0f5ac845c84045bd81222574220bfed7f extends Twig_Template
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
        $__internal_e91607123762aec57587cea3624d373d62bdb9b3467ede7a1a243360ddd8dce0 = $this->env->getExtension("native_profiler");
        $__internal_e91607123762aec57587cea3624d373d62bdb9b3467ede7a1a243360ddd8dce0->enter($__internal_e91607123762aec57587cea3624d373d62bdb9b3467ede7a1a243360ddd8dce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e91607123762aec57587cea3624d373d62bdb9b3467ede7a1a243360ddd8dce0->leave($__internal_e91607123762aec57587cea3624d373d62bdb9b3467ede7a1a243360ddd8dce0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9aa7b264eb4fc1d92c8cac3cc552c7885d81f458a93054242167bd4d76a3eb83 = $this->env->getExtension("native_profiler");
        $__internal_9aa7b264eb4fc1d92c8cac3cc552c7885d81f458a93054242167bd4d76a3eb83->enter($__internal_9aa7b264eb4fc1d92c8cac3cc552c7885d81f458a93054242167bd4d76a3eb83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_9aa7b264eb4fc1d92c8cac3cc552c7885d81f458a93054242167bd4d76a3eb83->leave($__internal_9aa7b264eb4fc1d92c8cac3cc552c7885d81f458a93054242167bd4d76a3eb83_prof);

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

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%email%': email}) }}
</p>
{% endblock %}
";
    }
}
