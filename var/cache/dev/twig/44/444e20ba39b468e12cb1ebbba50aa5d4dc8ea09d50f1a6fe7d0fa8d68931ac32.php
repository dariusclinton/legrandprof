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
        $__internal_d6227dabae8a591557f2f1e8c71d2cd8c82c84b64a7e133711e71d15216ca11c = $this->env->getExtension("native_profiler");
        $__internal_d6227dabae8a591557f2f1e8c71d2cd8c82c84b64a7e133711e71d15216ca11c->enter($__internal_d6227dabae8a591557f2f1e8c71d2cd8c82c84b64a7e133711e71d15216ca11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_d6227dabae8a591557f2f1e8c71d2cd8c82c84b64a7e133711e71d15216ca11c->leave($__internal_d6227dabae8a591557f2f1e8c71d2cd8c82c84b64a7e133711e71d15216ca11c_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_de12b648c3e3e826a833d45ad5cd1386c19287576282a3e3c1faef0f4deee481 = $this->env->getExtension("native_profiler");
        $__internal_de12b648c3e3e826a833d45ad5cd1386c19287576282a3e3c1faef0f4deee481->enter($__internal_de12b648c3e3e826a833d45ad5cd1386c19287576282a3e3c1faef0f4deee481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_de12b648c3e3e826a833d45ad5cd1386c19287576282a3e3c1faef0f4deee481->leave($__internal_de12b648c3e3e826a833d45ad5cd1386c19287576282a3e3c1faef0f4deee481_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3d9779009e44c123694e69427e901888365b9c4baa9f37a7e5db51db429d2f9b = $this->env->getExtension("native_profiler");
        $__internal_3d9779009e44c123694e69427e901888365b9c4baa9f37a7e5db51db429d2f9b->enter($__internal_3d9779009e44c123694e69427e901888365b9c4baa9f37a7e5db51db429d2f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_3d9779009e44c123694e69427e901888365b9c4baa9f37a7e5db51db429d2f9b->leave($__internal_3d9779009e44c123694e69427e901888365b9c4baa9f37a7e5db51db429d2f9b_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ef5035a058326efe0e344504d4437f83515b93e5b5ffff6e22ea34df7f633dbe = $this->env->getExtension("native_profiler");
        $__internal_ef5035a058326efe0e344504d4437f83515b93e5b5ffff6e22ea34df7f633dbe->enter($__internal_ef5035a058326efe0e344504d4437f83515b93e5b5ffff6e22ea34df7f633dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ef5035a058326efe0e344504d4437f83515b93e5b5ffff6e22ea34df7f633dbe->leave($__internal_ef5035a058326efe0e344504d4437f83515b93e5b5ffff6e22ea34df7f633dbe_prof);

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
