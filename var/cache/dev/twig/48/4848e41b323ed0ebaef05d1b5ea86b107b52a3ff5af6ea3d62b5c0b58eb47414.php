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
        $__internal_66e84bf653092f994c15cae41584a7a8499421f64efdbebdbc71156bb560cee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e84bf653092f994c15cae41584a7a8499421f64efdbebdbc71156bb560cee0->enter($__internal_66e84bf653092f994c15cae41584a7a8499421f64efdbebdbc71156bb560cee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_66e84bf653092f994c15cae41584a7a8499421f64efdbebdbc71156bb560cee0->leave($__internal_66e84bf653092f994c15cae41584a7a8499421f64efdbebdbc71156bb560cee0_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6a18a41dbac4305b62fe77b99645dab345587496ddce2d90e6fa94d12d6f7dcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a18a41dbac4305b62fe77b99645dab345587496ddce2d90e6fa94d12d6f7dcb->enter($__internal_6a18a41dbac4305b62fe77b99645dab345587496ddce2d90e6fa94d12d6f7dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_6a18a41dbac4305b62fe77b99645dab345587496ddce2d90e6fa94d12d6f7dcb->leave($__internal_6a18a41dbac4305b62fe77b99645dab345587496ddce2d90e6fa94d12d6f7dcb_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_819ac8dc21021b59718b5b81624b356bad3dc0287ce7b6570ec77f64a81189ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_819ac8dc21021b59718b5b81624b356bad3dc0287ce7b6570ec77f64a81189ab->enter($__internal_819ac8dc21021b59718b5b81624b356bad3dc0287ce7b6570ec77f64a81189ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_819ac8dc21021b59718b5b81624b356bad3dc0287ce7b6570ec77f64a81189ab->leave($__internal_819ac8dc21021b59718b5b81624b356bad3dc0287ce7b6570ec77f64a81189ab_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a845fff920af47db6514105cda0ff4b697fa596aab674c720c8e94e6df5d2324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a845fff920af47db6514105cda0ff4b697fa596aab674c720c8e94e6df5d2324->enter($__internal_a845fff920af47db6514105cda0ff4b697fa596aab674c720c8e94e6df5d2324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a845fff920af47db6514105cda0ff4b697fa596aab674c720c8e94e6df5d2324->leave($__internal_a845fff920af47db6514105cda0ff4b697fa596aab674c720c8e94e6df5d2324_prof);

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
