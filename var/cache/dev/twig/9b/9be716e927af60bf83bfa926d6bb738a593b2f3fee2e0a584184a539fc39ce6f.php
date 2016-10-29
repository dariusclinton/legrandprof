<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_ed1635f31659db5a27da36bd60bc355274982c19f5bcb639dc8c1048eb3f8213 extends Twig_Template
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
        $__internal_b072cad6891c556896796a30777eafcf4c3452f4d8879e3d42a7ec38f327019e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b072cad6891c556896796a30777eafcf4c3452f4d8879e3d42a7ec38f327019e->enter($__internal_b072cad6891c556896796a30777eafcf4c3452f4d8879e3d42a7ec38f327019e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b072cad6891c556896796a30777eafcf4c3452f4d8879e3d42a7ec38f327019e->leave($__internal_b072cad6891c556896796a30777eafcf4c3452f4d8879e3d42a7ec38f327019e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_88958bbb658cfd5cdda7d6c74a5d6de997513adcddd5e5c3607f3978799d8ca0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88958bbb658cfd5cdda7d6c74a5d6de997513adcddd5e5c3607f3978799d8ca0->enter($__internal_88958bbb658cfd5cdda7d6c74a5d6de997513adcddd5e5c3607f3978799d8ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_88958bbb658cfd5cdda7d6c74a5d6de997513adcddd5e5c3607f3978799d8ca0->leave($__internal_88958bbb658cfd5cdda7d6c74a5d6de997513adcddd5e5c3607f3978799d8ca0_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2f49ec5673a224fb9b611ba6a7d31a25bacfbe917ab1affcaaeccb423264358f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f49ec5673a224fb9b611ba6a7d31a25bacfbe917ab1affcaaeccb423264358f->enter($__internal_2f49ec5673a224fb9b611ba6a7d31a25bacfbe917ab1affcaaeccb423264358f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2f49ec5673a224fb9b611ba6a7d31a25bacfbe917ab1affcaaeccb423264358f->leave($__internal_2f49ec5673a224fb9b611ba6a7d31a25bacfbe917ab1affcaaeccb423264358f_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1e61cddce829000488829746a247b1bdfad1bede472520203f6fd76df81c2433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e61cddce829000488829746a247b1bdfad1bede472520203f6fd76df81c2433->enter($__internal_1e61cddce829000488829746a247b1bdfad1bede472520203f6fd76df81c2433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1e61cddce829000488829746a247b1bdfad1bede472520203f6fd76df81c2433->leave($__internal_1e61cddce829000488829746a247b1bdfad1bede472520203f6fd76df81c2433_prof);

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
