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
        $__internal_8e51516f2ba35a2d49e85c828c2482ecac181d91730c6cfd1cacece4302a1224 = $this->env->getExtension("native_profiler");
        $__internal_8e51516f2ba35a2d49e85c828c2482ecac181d91730c6cfd1cacece4302a1224->enter($__internal_8e51516f2ba35a2d49e85c828c2482ecac181d91730c6cfd1cacece4302a1224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8e51516f2ba35a2d49e85c828c2482ecac181d91730c6cfd1cacece4302a1224->leave($__internal_8e51516f2ba35a2d49e85c828c2482ecac181d91730c6cfd1cacece4302a1224_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_462c9fa3ec40839650be81d632fe5d3f956fcd80a9defa8b5ea048ebf567c384 = $this->env->getExtension("native_profiler");
        $__internal_462c9fa3ec40839650be81d632fe5d3f956fcd80a9defa8b5ea048ebf567c384->enter($__internal_462c9fa3ec40839650be81d632fe5d3f956fcd80a9defa8b5ea048ebf567c384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_462c9fa3ec40839650be81d632fe5d3f956fcd80a9defa8b5ea048ebf567c384->leave($__internal_462c9fa3ec40839650be81d632fe5d3f956fcd80a9defa8b5ea048ebf567c384_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_36d5f46310e71fef341c642009fdaf2d2e24eacac1ce7f8d231b7d8f42cb55b9 = $this->env->getExtension("native_profiler");
        $__internal_36d5f46310e71fef341c642009fdaf2d2e24eacac1ce7f8d231b7d8f42cb55b9->enter($__internal_36d5f46310e71fef341c642009fdaf2d2e24eacac1ce7f8d231b7d8f42cb55b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_36d5f46310e71fef341c642009fdaf2d2e24eacac1ce7f8d231b7d8f42cb55b9->leave($__internal_36d5f46310e71fef341c642009fdaf2d2e24eacac1ce7f8d231b7d8f42cb55b9_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_50a9efa890c4264c57157aa4fa5114111a674de7fbc559436047c8e5fd8e40f1 = $this->env->getExtension("native_profiler");
        $__internal_50a9efa890c4264c57157aa4fa5114111a674de7fbc559436047c8e5fd8e40f1->enter($__internal_50a9efa890c4264c57157aa4fa5114111a674de7fbc559436047c8e5fd8e40f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_50a9efa890c4264c57157aa4fa5114111a674de7fbc559436047c8e5fd8e40f1->leave($__internal_50a9efa890c4264c57157aa4fa5114111a674de7fbc559436047c8e5fd8e40f1_prof);

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
