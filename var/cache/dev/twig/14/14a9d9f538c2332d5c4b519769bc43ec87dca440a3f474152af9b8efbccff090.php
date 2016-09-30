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
        $__internal_1d54a7368763d72f7e7b191264a72b8f4bf9da7487d98548e930de6cdeb4a742 = $this->env->getExtension("native_profiler");
        $__internal_1d54a7368763d72f7e7b191264a72b8f4bf9da7487d98548e930de6cdeb4a742->enter($__internal_1d54a7368763d72f7e7b191264a72b8f4bf9da7487d98548e930de6cdeb4a742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1d54a7368763d72f7e7b191264a72b8f4bf9da7487d98548e930de6cdeb4a742->leave($__internal_1d54a7368763d72f7e7b191264a72b8f4bf9da7487d98548e930de6cdeb4a742_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_579b4b13507c6bfd6c2a66fd0c1dedc4dd275e31827448daa6660d285127884b = $this->env->getExtension("native_profiler");
        $__internal_579b4b13507c6bfd6c2a66fd0c1dedc4dd275e31827448daa6660d285127884b->enter($__internal_579b4b13507c6bfd6c2a66fd0c1dedc4dd275e31827448daa6660d285127884b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_579b4b13507c6bfd6c2a66fd0c1dedc4dd275e31827448daa6660d285127884b->leave($__internal_579b4b13507c6bfd6c2a66fd0c1dedc4dd275e31827448daa6660d285127884b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_cf379a5e1573e2ba42314006eb436d7dee3a180038a2c1bae947074292f10d56 = $this->env->getExtension("native_profiler");
        $__internal_cf379a5e1573e2ba42314006eb436d7dee3a180038a2c1bae947074292f10d56->enter($__internal_cf379a5e1573e2ba42314006eb436d7dee3a180038a2c1bae947074292f10d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_cf379a5e1573e2ba42314006eb436d7dee3a180038a2c1bae947074292f10d56->leave($__internal_cf379a5e1573e2ba42314006eb436d7dee3a180038a2c1bae947074292f10d56_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a7bd8f422990fb3c85e3933b1af8433ceb896b25e3f24eb9cff8a4434d2e96c3 = $this->env->getExtension("native_profiler");
        $__internal_a7bd8f422990fb3c85e3933b1af8433ceb896b25e3f24eb9cff8a4434d2e96c3->enter($__internal_a7bd8f422990fb3c85e3933b1af8433ceb896b25e3f24eb9cff8a4434d2e96c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a7bd8f422990fb3c85e3933b1af8433ceb896b25e3f24eb9cff8a4434d2e96c3->leave($__internal_a7bd8f422990fb3c85e3933b1af8433ceb896b25e3f24eb9cff8a4434d2e96c3_prof);

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
