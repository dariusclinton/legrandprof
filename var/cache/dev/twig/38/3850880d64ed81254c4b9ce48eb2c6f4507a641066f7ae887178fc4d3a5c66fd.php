<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_8b02bcd5e9ec801b298d89fd284aa660d3d5e82fb298cfe6e8beb9b1cb966719 extends Twig_Template
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
        $__internal_f526b1e4bed62ef9e42f44dde0ed03c71f65f0aec80b4424c572675b5b2b2ce2 = $this->env->getExtension("native_profiler");
        $__internal_f526b1e4bed62ef9e42f44dde0ed03c71f65f0aec80b4424c572675b5b2b2ce2->enter($__internal_f526b1e4bed62ef9e42f44dde0ed03c71f65f0aec80b4424c572675b5b2b2ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f526b1e4bed62ef9e42f44dde0ed03c71f65f0aec80b4424c572675b5b2b2ce2->leave($__internal_f526b1e4bed62ef9e42f44dde0ed03c71f65f0aec80b4424c572675b5b2b2ce2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a86367ac4a0afa2d551acf2e9899dc047ef3211eb5ffa8335d4817121f16111c = $this->env->getExtension("native_profiler");
        $__internal_a86367ac4a0afa2d551acf2e9899dc047ef3211eb5ffa8335d4817121f16111c->enter($__internal_a86367ac4a0afa2d551acf2e9899dc047ef3211eb5ffa8335d4817121f16111c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a86367ac4a0afa2d551acf2e9899dc047ef3211eb5ffa8335d4817121f16111c->leave($__internal_a86367ac4a0afa2d551acf2e9899dc047ef3211eb5ffa8335d4817121f16111c_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_909536d3e87f6430dbc3afc7f921ebca2ca6605a01f9dc1f0d3c83e6d9462238 = $this->env->getExtension("native_profiler");
        $__internal_909536d3e87f6430dbc3afc7f921ebca2ca6605a01f9dc1f0d3c83e6d9462238->enter($__internal_909536d3e87f6430dbc3afc7f921ebca2ca6605a01f9dc1f0d3c83e6d9462238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_909536d3e87f6430dbc3afc7f921ebca2ca6605a01f9dc1f0d3c83e6d9462238->leave($__internal_909536d3e87f6430dbc3afc7f921ebca2ca6605a01f9dc1f0d3c83e6d9462238_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_283ea627fa1178b00777dce42f46236e6953f08a879a8dfe8fa899038784b15f = $this->env->getExtension("native_profiler");
        $__internal_283ea627fa1178b00777dce42f46236e6953f08a879a8dfe8fa899038784b15f->enter($__internal_283ea627fa1178b00777dce42f46236e6953f08a879a8dfe8fa899038784b15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_283ea627fa1178b00777dce42f46236e6953f08a879a8dfe8fa899038784b15f->leave($__internal_283ea627fa1178b00777dce42f46236e6953f08a879a8dfe8fa899038784b15f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
";
    }
}
