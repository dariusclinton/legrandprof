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
        $__internal_5de5d852de6c3ecb33bd472ce4205288462c6397f9c5c73e6cefd09938405dfe = $this->env->getExtension("native_profiler");
        $__internal_5de5d852de6c3ecb33bd472ce4205288462c6397f9c5c73e6cefd09938405dfe->enter($__internal_5de5d852de6c3ecb33bd472ce4205288462c6397f9c5c73e6cefd09938405dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/email.txt.twig"));

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
        
        $__internal_5de5d852de6c3ecb33bd472ce4205288462c6397f9c5c73e6cefd09938405dfe->leave($__internal_5de5d852de6c3ecb33bd472ce4205288462c6397f9c5c73e6cefd09938405dfe_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5c3c89206fb4b199757bc1bedc776363be2a0c83efa004d57cd00e4e87dbdd33 = $this->env->getExtension("native_profiler");
        $__internal_5c3c89206fb4b199757bc1bedc776363be2a0c83efa004d57cd00e4e87dbdd33->enter($__internal_5c3c89206fb4b199757bc1bedc776363be2a0c83efa004d57cd00e4e87dbdd33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_5c3c89206fb4b199757bc1bedc776363be2a0c83efa004d57cd00e4e87dbdd33->leave($__internal_5c3c89206fb4b199757bc1bedc776363be2a0c83efa004d57cd00e4e87dbdd33_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5a7ca2063a819643cc72583d88964ef5659380ad955ca77f188f70702f9f7456 = $this->env->getExtension("native_profiler");
        $__internal_5a7ca2063a819643cc72583d88964ef5659380ad955ca77f188f70702f9f7456->enter($__internal_5a7ca2063a819643cc72583d88964ef5659380ad955ca77f188f70702f9f7456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_5a7ca2063a819643cc72583d88964ef5659380ad955ca77f188f70702f9f7456->leave($__internal_5a7ca2063a819643cc72583d88964ef5659380ad955ca77f188f70702f9f7456_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_18112757179307df3ac64ab844a8c9acfd47cb64ae62812516e48a336332a737 = $this->env->getExtension("native_profiler");
        $__internal_18112757179307df3ac64ab844a8c9acfd47cb64ae62812516e48a336332a737->enter($__internal_18112757179307df3ac64ab844a8c9acfd47cb64ae62812516e48a336332a737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_18112757179307df3ac64ab844a8c9acfd47cb64ae62812516e48a336332a737->leave($__internal_18112757179307df3ac64ab844a8c9acfd47cb64ae62812516e48a336332a737_prof);

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
