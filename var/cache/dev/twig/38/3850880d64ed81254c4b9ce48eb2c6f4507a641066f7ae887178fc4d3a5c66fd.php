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
        $__internal_2e1ab38d24c21df1bdad3c7f39f01a6d9e998d9683a8296285a8c08cbbde18f5 = $this->env->getExtension("native_profiler");
        $__internal_2e1ab38d24c21df1bdad3c7f39f01a6d9e998d9683a8296285a8c08cbbde18f5->enter($__internal_2e1ab38d24c21df1bdad3c7f39f01a6d9e998d9683a8296285a8c08cbbde18f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2e1ab38d24c21df1bdad3c7f39f01a6d9e998d9683a8296285a8c08cbbde18f5->leave($__internal_2e1ab38d24c21df1bdad3c7f39f01a6d9e998d9683a8296285a8c08cbbde18f5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_73f0f6ac531a3ce5a99ae1c03de2d746a6f9ad3dc453c2417cf730be74e6f8de = $this->env->getExtension("native_profiler");
        $__internal_73f0f6ac531a3ce5a99ae1c03de2d746a6f9ad3dc453c2417cf730be74e6f8de->enter($__internal_73f0f6ac531a3ce5a99ae1c03de2d746a6f9ad3dc453c2417cf730be74e6f8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_73f0f6ac531a3ce5a99ae1c03de2d746a6f9ad3dc453c2417cf730be74e6f8de->leave($__internal_73f0f6ac531a3ce5a99ae1c03de2d746a6f9ad3dc453c2417cf730be74e6f8de_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e0fd6f67f6777a9a9ff2762881245b92bffc633290bbd384f609273debd85522 = $this->env->getExtension("native_profiler");
        $__internal_e0fd6f67f6777a9a9ff2762881245b92bffc633290bbd384f609273debd85522->enter($__internal_e0fd6f67f6777a9a9ff2762881245b92bffc633290bbd384f609273debd85522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e0fd6f67f6777a9a9ff2762881245b92bffc633290bbd384f609273debd85522->leave($__internal_e0fd6f67f6777a9a9ff2762881245b92bffc633290bbd384f609273debd85522_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_77bb4c94109f3cfb7901b6f915f420b4814394e6569bb3ac2b9386b1848caab6 = $this->env->getExtension("native_profiler");
        $__internal_77bb4c94109f3cfb7901b6f915f420b4814394e6569bb3ac2b9386b1848caab6->enter($__internal_77bb4c94109f3cfb7901b6f915f420b4814394e6569bb3ac2b9386b1848caab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_77bb4c94109f3cfb7901b6f915f420b4814394e6569bb3ac2b9386b1848caab6->leave($__internal_77bb4c94109f3cfb7901b6f915f420b4814394e6569bb3ac2b9386b1848caab6_prof);

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
