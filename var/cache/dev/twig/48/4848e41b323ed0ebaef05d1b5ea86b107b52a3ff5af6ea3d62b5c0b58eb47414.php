<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_da54af5bc35d9e3aefc09767d42a334cc037fe6c2bf934c416a2dca532ccc81a extends Twig_Template
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
        $__internal_80587ee88b5f93ae17b7cd6a7cdc10c24de8377875b12e151658279fe7b027e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80587ee88b5f93ae17b7cd6a7cdc10c24de8377875b12e151658279fe7b027e4->enter($__internal_80587ee88b5f93ae17b7cd6a7cdc10c24de8377875b12e151658279fe7b027e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_80587ee88b5f93ae17b7cd6a7cdc10c24de8377875b12e151658279fe7b027e4->leave($__internal_80587ee88b5f93ae17b7cd6a7cdc10c24de8377875b12e151658279fe7b027e4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_63b2025ddfba431305b35d52a7ef91a600ead7dd44b405c39ee114b5677fc8d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63b2025ddfba431305b35d52a7ef91a600ead7dd44b405c39ee114b5677fc8d6->enter($__internal_63b2025ddfba431305b35d52a7ef91a600ead7dd44b405c39ee114b5677fc8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_63b2025ddfba431305b35d52a7ef91a600ead7dd44b405c39ee114b5677fc8d6->leave($__internal_63b2025ddfba431305b35d52a7ef91a600ead7dd44b405c39ee114b5677fc8d6_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_21aa0de7783e88d364e328076c9ff7a9253373010a0a1510c3d54b77c90a898f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21aa0de7783e88d364e328076c9ff7a9253373010a0a1510c3d54b77c90a898f->enter($__internal_21aa0de7783e88d364e328076c9ff7a9253373010a0a1510c3d54b77c90a898f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_21aa0de7783e88d364e328076c9ff7a9253373010a0a1510c3d54b77c90a898f->leave($__internal_21aa0de7783e88d364e328076c9ff7a9253373010a0a1510c3d54b77c90a898f_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_caf43246c60fe9fb1d70c991022cb2f272180b567b30aa0cde91464d0a63c889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caf43246c60fe9fb1d70c991022cb2f272180b567b30aa0cde91464d0a63c889->enter($__internal_caf43246c60fe9fb1d70c991022cb2f272180b567b30aa0cde91464d0a63c889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_caf43246c60fe9fb1d70c991022cb2f272180b567b30aa0cde91464d0a63c889->leave($__internal_caf43246c60fe9fb1d70c991022cb2f272180b567b30aa0cde91464d0a63c889_prof);

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
