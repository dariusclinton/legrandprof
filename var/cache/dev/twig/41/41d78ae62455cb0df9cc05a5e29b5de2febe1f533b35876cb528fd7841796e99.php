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
        $__internal_9e480e0bf0533ccf60e7d7972f75c92f3e4b7759d6570e135b9c54b3691f3346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e480e0bf0533ccf60e7d7972f75c92f3e4b7759d6570e135b9c54b3691f3346->enter($__internal_9e480e0bf0533ccf60e7d7972f75c92f3e4b7759d6570e135b9c54b3691f3346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        echo "<div style=\"background-color: #e58664; width:90%; height:500px;padding:20px;\">
\t<div style=\"background-color:white;height:100%;\">
            ";
        // line 4
        echo "            ";
        $this->displayBlock('subject', $context, $blocks);
        // line 9
        echo "            ";
        $this->displayBlock('body_text', $context, $blocks);
        // line 14
        echo "            ";
        $this->displayBlock('body_html', $context, $blocks);
        // line 15
        echo "\t</div>
</div>

";
        
        $__internal_9e480e0bf0533ccf60e7d7972f75c92f3e4b7759d6570e135b9c54b3691f3346->leave($__internal_9e480e0bf0533ccf60e7d7972f75c92f3e4b7759d6570e135b9c54b3691f3346_prof);

    }

    // line 4
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3e1631f9b2dca8b132ffa6066b2df081dbfa4649ac0cde74e330e29f1727e1de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e1631f9b2dca8b132ffa6066b2df081dbfa4649ac0cde74e330e29f1727e1de->enter($__internal_3e1631f9b2dca8b132ffa6066b2df081dbfa4649ac0cde74e330e29f1727e1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 5
        echo "            ";
        // line 6
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
            ";
        // line 8
        echo "            ";
        
        $__internal_3e1631f9b2dca8b132ffa6066b2df081dbfa4649ac0cde74e330e29f1727e1de->leave($__internal_3e1631f9b2dca8b132ffa6066b2df081dbfa4649ac0cde74e330e29f1727e1de_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e2743d006008062fc8135dd0d06bb40db6feb835078be553cafbbcba35999ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2743d006008062fc8135dd0d06bb40db6feb835078be553cafbbcba35999ae6->enter($__internal_e2743d006008062fc8135dd0d06bb40db6feb835078be553cafbbcba35999ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "            ";
        // line 11
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
            ";
        // line 13
        echo "            ";
        
        $__internal_e2743d006008062fc8135dd0d06bb40db6feb835078be553cafbbcba35999ae6->leave($__internal_e2743d006008062fc8135dd0d06bb40db6feb835078be553cafbbcba35999ae6_prof);

    }

    // line 14
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6d64105ad8c726e6819260e0a1ab49922006bd7badc42deb975d90d69951898a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d64105ad8c726e6819260e0a1ab49922006bd7badc42deb975d90d69951898a->enter($__internal_6d64105ad8c726e6819260e0a1ab49922006bd7badc42deb975d90d69951898a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6d64105ad8c726e6819260e0a1ab49922006bd7badc42deb975d90d69951898a->leave($__internal_6d64105ad8c726e6819260e0a1ab49922006bd7badc42deb975d90d69951898a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  88 => 14,  81 => 13,  76 => 11,  74 => 10,  68 => 9,  61 => 8,  56 => 6,  54 => 5,  48 => 4,  38 => 15,  35 => 14,  32 => 9,  29 => 4,  25 => 1,);
    }

    public function getSource()
    {
        return "<div style=\"background-color: #e58664; width:90%; height:500px;padding:20px;\">
\t<div style=\"background-color:white;height:100%;\">
            {% trans_default_domain 'FOSUserBundle' %}
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
\t</div>
</div>

";
    }
}
