<?php

/* @LGPUser/Registration/email.txt.twig */
class __TwigTemplate_8242e01ba1c1797f041ea9d9850b29640c1c88d11811d64101634708f1d10f78 extends Twig_Template
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
        $__internal_c7cf13b9c6e6a957a95cd4ec6505e689d977ca9b4ea442da0df17c4cd9e111ae = $this->env->getExtension("native_profiler");
        $__internal_c7cf13b9c6e6a957a95cd4ec6505e689d977ca9b4ea442da0df17c4cd9e111ae->enter($__internal_c7cf13b9c6e6a957a95cd4ec6505e689d977ca9b4ea442da0df17c4cd9e111ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/email.txt.twig"));

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
        
        $__internal_c7cf13b9c6e6a957a95cd4ec6505e689d977ca9b4ea442da0df17c4cd9e111ae->leave($__internal_c7cf13b9c6e6a957a95cd4ec6505e689d977ca9b4ea442da0df17c4cd9e111ae_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5ac62022b8a9882ccd16108bc977471e3be4f941676c2be5c54f31ae639e42d9 = $this->env->getExtension("native_profiler");
        $__internal_5ac62022b8a9882ccd16108bc977471e3be4f941676c2be5c54f31ae639e42d9->enter($__internal_5ac62022b8a9882ccd16108bc977471e3be4f941676c2be5c54f31ae639e42d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_5ac62022b8a9882ccd16108bc977471e3be4f941676c2be5c54f31ae639e42d9->leave($__internal_5ac62022b8a9882ccd16108bc977471e3be4f941676c2be5c54f31ae639e42d9_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6ee6ee13bef9849382bff068e721ea5c9be05dd8de17d89724e3bf3c5799cf17 = $this->env->getExtension("native_profiler");
        $__internal_6ee6ee13bef9849382bff068e721ea5c9be05dd8de17d89724e3bf3c5799cf17->enter($__internal_6ee6ee13bef9849382bff068e721ea5c9be05dd8de17d89724e3bf3c5799cf17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_6ee6ee13bef9849382bff068e721ea5c9be05dd8de17d89724e3bf3c5799cf17->leave($__internal_6ee6ee13bef9849382bff068e721ea5c9be05dd8de17d89724e3bf3c5799cf17_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_216ffb3321ed671298ce9f0f7eb5e4355ffa4bc51421eefacf99d153e377f453 = $this->env->getExtension("native_profiler");
        $__internal_216ffb3321ed671298ce9f0f7eb5e4355ffa4bc51421eefacf99d153e377f453->enter($__internal_216ffb3321ed671298ce9f0f7eb5e4355ffa4bc51421eefacf99d153e377f453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_216ffb3321ed671298ce9f0f7eb5e4355ffa4bc51421eefacf99d153e377f453->leave($__internal_216ffb3321ed671298ce9f0f7eb5e4355ffa4bc51421eefacf99d153e377f453_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  71 => 11,  69 => 10,  63 => 9,  53 => 5,  51 => 4,  45 => 3,  38 => 15,  35 => 14,  33 => 9,  30 => 8,  28 => 3,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block subject %}*/
/*   {% autoescape false %}*/
/*   {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/*   {% endautoescape %}*/
/* {% endblock %}*/
/* */
/* {% block body_text %}*/
/*   {% autoescape false %}*/
/*   {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/*   {% endautoescape %}*/
/* {% endblock %}*/
/* */
/* {% block body_html %}{% endblock %}*/
/* */
