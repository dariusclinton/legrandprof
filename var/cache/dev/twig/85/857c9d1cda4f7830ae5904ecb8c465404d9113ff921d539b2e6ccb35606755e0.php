<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_b2da100027ad2c80aff66fe8c43d7acd5fc639b2de787732c4e4de55a407e6b5 extends Twig_Template
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
        $__internal_39f398665b51d16810acb44b1beb9f44d7d14fd85cf0e01794f382eb3692d701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39f398665b51d16810acb44b1beb9f44d7d14fd85cf0e01794f382eb3692d701->enter($__internal_39f398665b51d16810acb44b1beb9f44d7d14fd85cf0e01794f382eb3692d701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_39f398665b51d16810acb44b1beb9f44d7d14fd85cf0e01794f382eb3692d701->leave($__internal_39f398665b51d16810acb44b1beb9f44d7d14fd85cf0e01794f382eb3692d701_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_dedb8ffd3b964f529bb945f0767417e7f5e39c903fdf840f1a75c2507b753782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dedb8ffd3b964f529bb945f0767417e7f5e39c903fdf840f1a75c2507b753782->enter($__internal_dedb8ffd3b964f529bb945f0767417e7f5e39c903fdf840f1a75c2507b753782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_dedb8ffd3b964f529bb945f0767417e7f5e39c903fdf840f1a75c2507b753782->leave($__internal_dedb8ffd3b964f529bb945f0767417e7f5e39c903fdf840f1a75c2507b753782_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e2b3c0251b50082905e842125fa1b0df7d3311b5c82b8ddb9cc7e25e5c500a96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2b3c0251b50082905e842125fa1b0df7d3311b5c82b8ddb9cc7e25e5c500a96->enter($__internal_e2b3c0251b50082905e842125fa1b0df7d3311b5c82b8ddb9cc7e25e5c500a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e2b3c0251b50082905e842125fa1b0df7d3311b5c82b8ddb9cc7e25e5c500a96->leave($__internal_e2b3c0251b50082905e842125fa1b0df7d3311b5c82b8ddb9cc7e25e5c500a96_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_514b23423de067710a339dae00b203b73f7bf29fd2119d86c7617ae4361ac0b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_514b23423de067710a339dae00b203b73f7bf29fd2119d86c7617ae4361ac0b8->enter($__internal_514b23423de067710a339dae00b203b73f7bf29fd2119d86c7617ae4361ac0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_514b23423de067710a339dae00b203b73f7bf29fd2119d86c7617ae4361ac0b8->leave($__internal_514b23423de067710a339dae00b203b73f7bf29fd2119d86c7617ae4361ac0b8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
