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
        $__internal_83a23da6338e785d201f0de57f6050588736b999be5a1def1f7112f4b8f4fb12 = $this->env->getExtension("native_profiler");
        $__internal_83a23da6338e785d201f0de57f6050588736b999be5a1def1f7112f4b8f4fb12->enter($__internal_83a23da6338e785d201f0de57f6050588736b999be5a1def1f7112f4b8f4fb12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_83a23da6338e785d201f0de57f6050588736b999be5a1def1f7112f4b8f4fb12->leave($__internal_83a23da6338e785d201f0de57f6050588736b999be5a1def1f7112f4b8f4fb12_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4959a541dd88e57d6e1547fe82b81126b9c8c9ed9eaa3c419b5a89ea0651c2fd = $this->env->getExtension("native_profiler");
        $__internal_4959a541dd88e57d6e1547fe82b81126b9c8c9ed9eaa3c419b5a89ea0651c2fd->enter($__internal_4959a541dd88e57d6e1547fe82b81126b9c8c9ed9eaa3c419b5a89ea0651c2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4959a541dd88e57d6e1547fe82b81126b9c8c9ed9eaa3c419b5a89ea0651c2fd->leave($__internal_4959a541dd88e57d6e1547fe82b81126b9c8c9ed9eaa3c419b5a89ea0651c2fd_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c698f1e9b026fb46e3e58497227f4c03f5ce3432e85131db3de02053101843b0 = $this->env->getExtension("native_profiler");
        $__internal_c698f1e9b026fb46e3e58497227f4c03f5ce3432e85131db3de02053101843b0->enter($__internal_c698f1e9b026fb46e3e58497227f4c03f5ce3432e85131db3de02053101843b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c698f1e9b026fb46e3e58497227f4c03f5ce3432e85131db3de02053101843b0->leave($__internal_c698f1e9b026fb46e3e58497227f4c03f5ce3432e85131db3de02053101843b0_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5774d458144d86a9ae876e253251709fca8be66eaf7dc094bacac3c40a8806e4 = $this->env->getExtension("native_profiler");
        $__internal_5774d458144d86a9ae876e253251709fca8be66eaf7dc094bacac3c40a8806e4->enter($__internal_5774d458144d86a9ae876e253251709fca8be66eaf7dc094bacac3c40a8806e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5774d458144d86a9ae876e253251709fca8be66eaf7dc094bacac3c40a8806e4->leave($__internal_5774d458144d86a9ae876e253251709fca8be66eaf7dc094bacac3c40a8806e4_prof);

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
