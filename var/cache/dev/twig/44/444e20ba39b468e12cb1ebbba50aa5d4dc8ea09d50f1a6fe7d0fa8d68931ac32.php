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
        $__internal_1e67b86d83041e6010a569d4f71a714fd4270579c2d6ac1746877996c6314cf0 = $this->env->getExtension("native_profiler");
        $__internal_1e67b86d83041e6010a569d4f71a714fd4270579c2d6ac1746877996c6314cf0->enter($__internal_1e67b86d83041e6010a569d4f71a714fd4270579c2d6ac1746877996c6314cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_1e67b86d83041e6010a569d4f71a714fd4270579c2d6ac1746877996c6314cf0->leave($__internal_1e67b86d83041e6010a569d4f71a714fd4270579c2d6ac1746877996c6314cf0_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e563eca40bc1ea6a5a775edc6cb138c4e154411d6490741e82be49daf2772b35 = $this->env->getExtension("native_profiler");
        $__internal_e563eca40bc1ea6a5a775edc6cb138c4e154411d6490741e82be49daf2772b35->enter($__internal_e563eca40bc1ea6a5a775edc6cb138c4e154411d6490741e82be49daf2772b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_e563eca40bc1ea6a5a775edc6cb138c4e154411d6490741e82be49daf2772b35->leave($__internal_e563eca40bc1ea6a5a775edc6cb138c4e154411d6490741e82be49daf2772b35_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a4355ace20f3ea3341ef9c2c21239029a0bf11f403930b35dab19aed0398099a = $this->env->getExtension("native_profiler");
        $__internal_a4355ace20f3ea3341ef9c2c21239029a0bf11f403930b35dab19aed0398099a->enter($__internal_a4355ace20f3ea3341ef9c2c21239029a0bf11f403930b35dab19aed0398099a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_a4355ace20f3ea3341ef9c2c21239029a0bf11f403930b35dab19aed0398099a->leave($__internal_a4355ace20f3ea3341ef9c2c21239029a0bf11f403930b35dab19aed0398099a_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5e90c0264304e400f61c67f89322a57a282084b6ea3d8ddab13521a8c71f0f1d = $this->env->getExtension("native_profiler");
        $__internal_5e90c0264304e400f61c67f89322a57a282084b6ea3d8ddab13521a8c71f0f1d->enter($__internal_5e90c0264304e400f61c67f89322a57a282084b6ea3d8ddab13521a8c71f0f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5e90c0264304e400f61c67f89322a57a282084b6ea3d8ddab13521a8c71f0f1d->leave($__internal_5e90c0264304e400f61c67f89322a57a282084b6ea3d8ddab13521a8c71f0f1d_prof);

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
