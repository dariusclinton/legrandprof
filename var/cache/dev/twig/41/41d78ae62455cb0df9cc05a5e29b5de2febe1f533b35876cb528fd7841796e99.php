<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_69700de77d8683b392286b51e45f6482285578de84f7d9fa04b3f469ef66d876 extends Twig_Template
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
        $__internal_05a144512dfb3907ebed96366694f6546b1f472aa821ad44b4552b9effd5d7c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05a144512dfb3907ebed96366694f6546b1f472aa821ad44b4552b9effd5d7c6->enter($__internal_05a144512dfb3907ebed96366694f6546b1f472aa821ad44b4552b9effd5d7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('subject', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('body_text', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_05a144512dfb3907ebed96366694f6546b1f472aa821ad44b4552b9effd5d7c6->leave($__internal_05a144512dfb3907ebed96366694f6546b1f472aa821ad44b4552b9effd5d7c6_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_235eff94437969204c147c31814dd39c30094c32ab1b9ee9b02dce73524f6a0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_235eff94437969204c147c31814dd39c30094c32ab1b9ee9b02dce73524f6a0b->enter($__internal_235eff94437969204c147c31814dd39c30094c32ab1b9ee9b02dce73524f6a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenoms", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_235eff94437969204c147c31814dd39c30094c32ab1b9ee9b02dce73524f6a0b->leave($__internal_235eff94437969204c147c31814dd39c30094c32ab1b9ee9b02dce73524f6a0b_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_53a4edb9fc24c7d89244e7e1795c7477f24721c4525259f1252aa5ce584a7926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a4edb9fc24c7d89244e7e1795c7477f24721c4525259f1252aa5ce584a7926->enter($__internal_53a4edb9fc24c7d89244e7e1795c7477f24721c4525259f1252aa5ce584a7926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_upper_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenoms", array())), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_53a4edb9fc24c7d89244e7e1795c7477f24721c4525259f1252aa5ce584a7926->leave($__internal_53a4edb9fc24c7d89244e7e1795c7477f24721c4525259f1252aa5ce584a7926_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cbae114784258146e57b8f2d97f0ce9daccd3fca6b3847181630bb161d83073b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbae114784258146e57b8f2d97f0ce9daccd3fca6b3847181630bb161d83073b->enter($__internal_cbae114784258146e57b8f2d97f0ce9daccd3fca6b3847181630bb161d83073b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cbae114784258146e57b8f2d97f0ce9daccd3fca6b3847181630bb161d83073b->leave($__internal_cbae114784258146e57b8f2d97f0ce9daccd3fca6b3847181630bb161d83073b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  71 => 11,  69 => 10,  63 => 9,  53 => 5,  51 => 4,  45 => 3,  38 => 15,  35 => 14,  33 => 9,  30 => 8,  28 => 3,  25 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}

{% block subject %}
  {% autoescape false %}
  {{ 'registration.email.subject'|trans({'%username%': user.prenoms, '%confirmationUrl%': confirmationUrl}) }}
  {% endautoescape %}
{% endblock %}

{% block body_text %}
  {% autoescape false %}
  {{ 'registration.email.message'|trans({'%username%': user.prenoms | upper, '%confirmationUrl%': confirmationUrl}) }}
  {% endautoescape %}
{% endblock %}

{% block body_html %}{% endblock %}
";
    }
}
