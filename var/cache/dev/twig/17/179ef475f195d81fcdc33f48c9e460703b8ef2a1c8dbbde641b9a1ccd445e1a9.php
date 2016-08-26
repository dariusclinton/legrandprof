<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_d307a7e90ca6c1741aa1061b2c0fe55a6a6a6aea980e344f340b875383ebb623 extends Twig_Template
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
        $__internal_77d8542a915eff2e647e6887886d55be1e7b91d06a03b09b7253ad6630b1cd17 = $this->env->getExtension("native_profiler");
        $__internal_77d8542a915eff2e647e6887886d55be1e7b91d06a03b09b7253ad6630b1cd17->enter($__internal_77d8542a915eff2e647e6887886d55be1e7b91d06a03b09b7253ad6630b1cd17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_77d8542a915eff2e647e6887886d55be1e7b91d06a03b09b7253ad6630b1cd17->leave($__internal_77d8542a915eff2e647e6887886d55be1e7b91d06a03b09b7253ad6630b1cd17_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ba43dfcc13bcd8b20b99a8c0d420ca1f38ae38bf03b4fd506b35663e12273f06 = $this->env->getExtension("native_profiler");
        $__internal_ba43dfcc13bcd8b20b99a8c0d420ca1f38ae38bf03b4fd506b35663e12273f06->enter($__internal_ba43dfcc13bcd8b20b99a8c0d420ca1f38ae38bf03b4fd506b35663e12273f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ba43dfcc13bcd8b20b99a8c0d420ca1f38ae38bf03b4fd506b35663e12273f06->leave($__internal_ba43dfcc13bcd8b20b99a8c0d420ca1f38ae38bf03b4fd506b35663e12273f06_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_66a4b2be3993a94e0ff3d6bfadac9139c8bc1c838971d0bf84e876b7f8e7a6b6 = $this->env->getExtension("native_profiler");
        $__internal_66a4b2be3993a94e0ff3d6bfadac9139c8bc1c838971d0bf84e876b7f8e7a6b6->enter($__internal_66a4b2be3993a94e0ff3d6bfadac9139c8bc1c838971d0bf84e876b7f8e7a6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_66a4b2be3993a94e0ff3d6bfadac9139c8bc1c838971d0bf84e876b7f8e7a6b6->leave($__internal_66a4b2be3993a94e0ff3d6bfadac9139c8bc1c838971d0bf84e876b7f8e7a6b6_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_bf0f88ff682262c3f5fea46ddb78f681bcec753fb5943e71d899b7dfe9130009 = $this->env->getExtension("native_profiler");
        $__internal_bf0f88ff682262c3f5fea46ddb78f681bcec753fb5943e71d899b7dfe9130009->enter($__internal_bf0f88ff682262c3f5fea46ddb78f681bcec753fb5943e71d899b7dfe9130009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_bf0f88ff682262c3f5fea46ddb78f681bcec753fb5943e71d899b7dfe9130009->leave($__internal_bf0f88ff682262c3f5fea46ddb78f681bcec753fb5943e71d899b7dfe9130009_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
