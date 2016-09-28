<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_6048cbd3a26dac7cd710c4ed71ee4a96460882edef410594863dac425eedaed8 extends Twig_Template
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
        $__internal_803471d3dbb3df723be783778a080b1f40606b66fb19f2dd7cd4b18d32eef513 = $this->env->getExtension("native_profiler");
        $__internal_803471d3dbb3df723be783778a080b1f40606b66fb19f2dd7cd4b18d32eef513->enter($__internal_803471d3dbb3df723be783778a080b1f40606b66fb19f2dd7cd4b18d32eef513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_803471d3dbb3df723be783778a080b1f40606b66fb19f2dd7cd4b18d32eef513->leave($__internal_803471d3dbb3df723be783778a080b1f40606b66fb19f2dd7cd4b18d32eef513_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b100eb6311c8c5cdd3304cc2fad1d81391399bfe52f2b1c7c719398ead6be8a3 = $this->env->getExtension("native_profiler");
        $__internal_b100eb6311c8c5cdd3304cc2fad1d81391399bfe52f2b1c7c719398ead6be8a3->enter($__internal_b100eb6311c8c5cdd3304cc2fad1d81391399bfe52f2b1c7c719398ead6be8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_b100eb6311c8c5cdd3304cc2fad1d81391399bfe52f2b1c7c719398ead6be8a3->leave($__internal_b100eb6311c8c5cdd3304cc2fad1d81391399bfe52f2b1c7c719398ead6be8a3_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_945e5ce6c96eb6af7f171f5a07dd799670fd4ad7f2465f716ace56492be81078 = $this->env->getExtension("native_profiler");
        $__internal_945e5ce6c96eb6af7f171f5a07dd799670fd4ad7f2465f716ace56492be81078->enter($__internal_945e5ce6c96eb6af7f171f5a07dd799670fd4ad7f2465f716ace56492be81078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_945e5ce6c96eb6af7f171f5a07dd799670fd4ad7f2465f716ace56492be81078->leave($__internal_945e5ce6c96eb6af7f171f5a07dd799670fd4ad7f2465f716ace56492be81078_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f9d3ff662dd94d6ab72736f3e0eef7901ea168b30ecdd6b82ec65471218ff689 = $this->env->getExtension("native_profiler");
        $__internal_f9d3ff662dd94d6ab72736f3e0eef7901ea168b30ecdd6b82ec65471218ff689->enter($__internal_f9d3ff662dd94d6ab72736f3e0eef7901ea168b30ecdd6b82ec65471218ff689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f9d3ff662dd94d6ab72736f3e0eef7901ea168b30ecdd6b82ec65471218ff689->leave($__internal_f9d3ff662dd94d6ab72736f3e0eef7901ea168b30ecdd6b82ec65471218ff689_prof);

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
