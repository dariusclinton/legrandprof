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
        $__internal_f4333bd4dd617ffb0d9d00dd47bfb0cd8204d8ddb4f38de9231ed997ad3e52e6 = $this->env->getExtension("native_profiler");
        $__internal_f4333bd4dd617ffb0d9d00dd47bfb0cd8204d8ddb4f38de9231ed997ad3e52e6->enter($__internal_f4333bd4dd617ffb0d9d00dd47bfb0cd8204d8ddb4f38de9231ed997ad3e52e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/email.txt.twig"));

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
        
        $__internal_f4333bd4dd617ffb0d9d00dd47bfb0cd8204d8ddb4f38de9231ed997ad3e52e6->leave($__internal_f4333bd4dd617ffb0d9d00dd47bfb0cd8204d8ddb4f38de9231ed997ad3e52e6_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_10e679a90f05955962944ec5f5ccae83db7c7b7eed2607c6c7e154931cc84a2d = $this->env->getExtension("native_profiler");
        $__internal_10e679a90f05955962944ec5f5ccae83db7c7b7eed2607c6c7e154931cc84a2d->enter($__internal_10e679a90f05955962944ec5f5ccae83db7c7b7eed2607c6c7e154931cc84a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_10e679a90f05955962944ec5f5ccae83db7c7b7eed2607c6c7e154931cc84a2d->leave($__internal_10e679a90f05955962944ec5f5ccae83db7c7b7eed2607c6c7e154931cc84a2d_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_14fe8aaa5995d7b1c417235d727027479db7af970f15ef7a331d04e0e32fe5ef = $this->env->getExtension("native_profiler");
        $__internal_14fe8aaa5995d7b1c417235d727027479db7af970f15ef7a331d04e0e32fe5ef->enter($__internal_14fe8aaa5995d7b1c417235d727027479db7af970f15ef7a331d04e0e32fe5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_14fe8aaa5995d7b1c417235d727027479db7af970f15ef7a331d04e0e32fe5ef->leave($__internal_14fe8aaa5995d7b1c417235d727027479db7af970f15ef7a331d04e0e32fe5ef_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f947d4a8c7f72437e1f9a48cd78ab5ff8ffdba8f4d552113056ced5ed383255c = $this->env->getExtension("native_profiler");
        $__internal_f947d4a8c7f72437e1f9a48cd78ab5ff8ffdba8f4d552113056ced5ed383255c->enter($__internal_f947d4a8c7f72437e1f9a48cd78ab5ff8ffdba8f4d552113056ced5ed383255c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f947d4a8c7f72437e1f9a48cd78ab5ff8ffdba8f4d552113056ced5ed383255c->leave($__internal_f947d4a8c7f72437e1f9a48cd78ab5ff8ffdba8f4d552113056ced5ed383255c_prof);

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
