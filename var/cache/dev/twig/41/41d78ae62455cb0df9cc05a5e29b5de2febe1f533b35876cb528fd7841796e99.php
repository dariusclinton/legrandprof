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
        $__internal_de8c427a6d7f99bdc6cf862ba40ede3f02ba03b376982dfdb1d947a4243f17c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de8c427a6d7f99bdc6cf862ba40ede3f02ba03b376982dfdb1d947a4243f17c7->enter($__internal_de8c427a6d7f99bdc6cf862ba40ede3f02ba03b376982dfdb1d947a4243f17c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_de8c427a6d7f99bdc6cf862ba40ede3f02ba03b376982dfdb1d947a4243f17c7->leave($__internal_de8c427a6d7f99bdc6cf862ba40ede3f02ba03b376982dfdb1d947a4243f17c7_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4e0e81dc840deae2430bf7816d623b5bcd39226fc5decfafdcf73eb3648a9ad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e0e81dc840deae2430bf7816d623b5bcd39226fc5decfafdcf73eb3648a9ad6->enter($__internal_4e0e81dc840deae2430bf7816d623b5bcd39226fc5decfafdcf73eb3648a9ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenoms", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_4e0e81dc840deae2430bf7816d623b5bcd39226fc5decfafdcf73eb3648a9ad6->leave($__internal_4e0e81dc840deae2430bf7816d623b5bcd39226fc5decfafdcf73eb3648a9ad6_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ec0d9b771e603c6e7f0a45871cdf2bf2f8486353c93d6780208634fea7930d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec0d9b771e603c6e7f0a45871cdf2bf2f8486353c93d6780208634fea7930d03->enter($__internal_ec0d9b771e603c6e7f0a45871cdf2bf2f8486353c93d6780208634fea7930d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_upper_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenoms", array())), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_ec0d9b771e603c6e7f0a45871cdf2bf2f8486353c93d6780208634fea7930d03->leave($__internal_ec0d9b771e603c6e7f0a45871cdf2bf2f8486353c93d6780208634fea7930d03_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a8cf5bb23276a75c7a72e88d5617e64ce1e29f3d319826da2f7391c7cdd4da07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8cf5bb23276a75c7a72e88d5617e64ce1e29f3d319826da2f7391c7cdd4da07->enter($__internal_a8cf5bb23276a75c7a72e88d5617e64ce1e29f3d319826da2f7391c7cdd4da07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a8cf5bb23276a75c7a72e88d5617e64ce1e29f3d319826da2f7391c7cdd4da07->leave($__internal_a8cf5bb23276a75c7a72e88d5617e64ce1e29f3d319826da2f7391c7cdd4da07_prof);

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
