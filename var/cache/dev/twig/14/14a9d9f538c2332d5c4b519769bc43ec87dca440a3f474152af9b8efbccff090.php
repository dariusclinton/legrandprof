<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_087cef8121578a64b4a56ac1e510f9d2cf49aef7bc345dbaf81731057cf5b671 extends Twig_Template
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
        $__internal_316ac7e8db9b4710bd2dd12d670f452a5be0baa7ece904c22f0a05e4024b9588 = $this->env->getExtension("native_profiler");
        $__internal_316ac7e8db9b4710bd2dd12d670f452a5be0baa7ece904c22f0a05e4024b9588->enter($__internal_316ac7e8db9b4710bd2dd12d670f452a5be0baa7ece904c22f0a05e4024b9588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_316ac7e8db9b4710bd2dd12d670f452a5be0baa7ece904c22f0a05e4024b9588->leave($__internal_316ac7e8db9b4710bd2dd12d670f452a5be0baa7ece904c22f0a05e4024b9588_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9b775d50e3c698f59561b3e6ce85d3da4984e5972b04ac5f20bc0e57b19bb536 = $this->env->getExtension("native_profiler");
        $__internal_9b775d50e3c698f59561b3e6ce85d3da4984e5972b04ac5f20bc0e57b19bb536->enter($__internal_9b775d50e3c698f59561b3e6ce85d3da4984e5972b04ac5f20bc0e57b19bb536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_9b775d50e3c698f59561b3e6ce85d3da4984e5972b04ac5f20bc0e57b19bb536->leave($__internal_9b775d50e3c698f59561b3e6ce85d3da4984e5972b04ac5f20bc0e57b19bb536_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_664d7b5cdbbb019d59f88b886e3cff1d27c795bc663a6ee9e636040be50dc4f0 = $this->env->getExtension("native_profiler");
        $__internal_664d7b5cdbbb019d59f88b886e3cff1d27c795bc663a6ee9e636040be50dc4f0->enter($__internal_664d7b5cdbbb019d59f88b886e3cff1d27c795bc663a6ee9e636040be50dc4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_664d7b5cdbbb019d59f88b886e3cff1d27c795bc663a6ee9e636040be50dc4f0->leave($__internal_664d7b5cdbbb019d59f88b886e3cff1d27c795bc663a6ee9e636040be50dc4f0_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_daaa2f6e555abd4606ba64288c0144a2b8995e7f91c982609cb2202aa90b9ff1 = $this->env->getExtension("native_profiler");
        $__internal_daaa2f6e555abd4606ba64288c0144a2b8995e7f91c982609cb2202aa90b9ff1->enter($__internal_daaa2f6e555abd4606ba64288c0144a2b8995e7f91c982609cb2202aa90b9ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_daaa2f6e555abd4606ba64288c0144a2b8995e7f91c982609cb2202aa90b9ff1->leave($__internal_daaa2f6e555abd4606ba64288c0144a2b8995e7f91c982609cb2202aa90b9ff1_prof);

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
