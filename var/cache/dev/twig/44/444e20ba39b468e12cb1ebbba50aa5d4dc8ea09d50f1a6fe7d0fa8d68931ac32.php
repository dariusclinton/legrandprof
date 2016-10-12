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
        $__internal_089015b40d99c0b98d3dce3cf6d0628d2241f6f85258e847fe8206dca8543493 = $this->env->getExtension("native_profiler");
        $__internal_089015b40d99c0b98d3dce3cf6d0628d2241f6f85258e847fe8206dca8543493->enter($__internal_089015b40d99c0b98d3dce3cf6d0628d2241f6f85258e847fe8206dca8543493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_089015b40d99c0b98d3dce3cf6d0628d2241f6f85258e847fe8206dca8543493->leave($__internal_089015b40d99c0b98d3dce3cf6d0628d2241f6f85258e847fe8206dca8543493_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c1cd1d3c5052e7be3a8f945498d35002df253b22757652effad9e4eaf7bcc454 = $this->env->getExtension("native_profiler");
        $__internal_c1cd1d3c5052e7be3a8f945498d35002df253b22757652effad9e4eaf7bcc454->enter($__internal_c1cd1d3c5052e7be3a8f945498d35002df253b22757652effad9e4eaf7bcc454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_c1cd1d3c5052e7be3a8f945498d35002df253b22757652effad9e4eaf7bcc454->leave($__internal_c1cd1d3c5052e7be3a8f945498d35002df253b22757652effad9e4eaf7bcc454_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f78c49dd3d9a1184302dc2d126997fb269a52f1d1af01003202ac99950000f49 = $this->env->getExtension("native_profiler");
        $__internal_f78c49dd3d9a1184302dc2d126997fb269a52f1d1af01003202ac99950000f49->enter($__internal_f78c49dd3d9a1184302dc2d126997fb269a52f1d1af01003202ac99950000f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_f78c49dd3d9a1184302dc2d126997fb269a52f1d1af01003202ac99950000f49->leave($__internal_f78c49dd3d9a1184302dc2d126997fb269a52f1d1af01003202ac99950000f49_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7de81bdba9fcb9a1e50b64617e61dbdbf216587882e6aed7e82b8f936360369a = $this->env->getExtension("native_profiler");
        $__internal_7de81bdba9fcb9a1e50b64617e61dbdbf216587882e6aed7e82b8f936360369a->enter($__internal_7de81bdba9fcb9a1e50b64617e61dbdbf216587882e6aed7e82b8f936360369a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7de81bdba9fcb9a1e50b64617e61dbdbf216587882e6aed7e82b8f936360369a->leave($__internal_7de81bdba9fcb9a1e50b64617e61dbdbf216587882e6aed7e82b8f936360369a_prof);

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
