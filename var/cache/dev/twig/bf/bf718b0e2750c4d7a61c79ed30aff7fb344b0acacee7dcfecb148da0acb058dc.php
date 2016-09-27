<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_9356332193063902e3a3be80d22ee17bea76de800561fe63d1ecf7ec890a5942 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25370bcbf2844b4e197cec13625ab784d9533a6964e66d64f3036d121abb7f5e = $this->env->getExtension("native_profiler");
        $__internal_25370bcbf2844b4e197cec13625ab784d9533a6964e66d64f3036d121abb7f5e->enter($__internal_25370bcbf2844b4e197cec13625ab784d9533a6964e66d64f3036d121abb7f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_25370bcbf2844b4e197cec13625ab784d9533a6964e66d64f3036d121abb7f5e->leave($__internal_25370bcbf2844b4e197cec13625ab784d9533a6964e66d64f3036d121abb7f5e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4d1bb26cea069567e2a8e8142dd007b0174dbfc4263010392edc5c17b4c81199 = $this->env->getExtension("native_profiler");
        $__internal_4d1bb26cea069567e2a8e8142dd007b0174dbfc4263010392edc5c17b4c81199->enter($__internal_4d1bb26cea069567e2a8e8142dd007b0174dbfc4263010392edc5c17b4c81199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_4d1bb26cea069567e2a8e8142dd007b0174dbfc4263010392edc5c17b4c81199->leave($__internal_4d1bb26cea069567e2a8e8142dd007b0174dbfc4263010392edc5c17b4c81199_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a8c75ca2a19a9b6cbed9f74f91e3ed0a68ff498301106a3e46e0bbcc7812a02f = $this->env->getExtension("native_profiler");
        $__internal_a8c75ca2a19a9b6cbed9f74f91e3ed0a68ff498301106a3e46e0bbcc7812a02f->enter($__internal_a8c75ca2a19a9b6cbed9f74f91e3ed0a68ff498301106a3e46e0bbcc7812a02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a8c75ca2a19a9b6cbed9f74f91e3ed0a68ff498301106a3e46e0bbcc7812a02f->leave($__internal_a8c75ca2a19a9b6cbed9f74f91e3ed0a68ff498301106a3e46e0bbcc7812a02f_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2dd7898ef09b543ed1f26963e0c3e3bd34bd581885038b0e64baf4a8483f493e = $this->env->getExtension("native_profiler");
        $__internal_2dd7898ef09b543ed1f26963e0c3e3bd34bd581885038b0e64baf4a8483f493e->enter($__internal_2dd7898ef09b543ed1f26963e0c3e3bd34bd581885038b0e64baf4a8483f493e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2dd7898ef09b543ed1f26963e0c3e3bd34bd581885038b0e64baf4a8483f493e->leave($__internal_2dd7898ef09b543ed1f26963e0c3e3bd34bd581885038b0e64baf4a8483f493e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
";
    }
}
