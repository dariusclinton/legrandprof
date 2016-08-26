<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_5157624dd1fed23d585bc0aa41f4c2ac82430c0814efc019f571a5c5094b1db1 extends Twig_Template
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
        $__internal_e31b965a27421b52cec469240cec79c977980fad6c138fd7aac5e8a72b13971c = $this->env->getExtension("native_profiler");
        $__internal_e31b965a27421b52cec469240cec79c977980fad6c138fd7aac5e8a72b13971c->enter($__internal_e31b965a27421b52cec469240cec79c977980fad6c138fd7aac5e8a72b13971c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_e31b965a27421b52cec469240cec79c977980fad6c138fd7aac5e8a72b13971c->leave($__internal_e31b965a27421b52cec469240cec79c977980fad6c138fd7aac5e8a72b13971c_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b1c79485e8b6f603ef7bfdac17ce6629f69afa00fb7726fffaea367bf4190bec = $this->env->getExtension("native_profiler");
        $__internal_b1c79485e8b6f603ef7bfdac17ce6629f69afa00fb7726fffaea367bf4190bec->enter($__internal_b1c79485e8b6f603ef7bfdac17ce6629f69afa00fb7726fffaea367bf4190bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_b1c79485e8b6f603ef7bfdac17ce6629f69afa00fb7726fffaea367bf4190bec->leave($__internal_b1c79485e8b6f603ef7bfdac17ce6629f69afa00fb7726fffaea367bf4190bec_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f441bdf526d167e4c990ef4911e64381da9f4c8fdb4920a285590b82106b8181 = $this->env->getExtension("native_profiler");
        $__internal_f441bdf526d167e4c990ef4911e64381da9f4c8fdb4920a285590b82106b8181->enter($__internal_f441bdf526d167e4c990ef4911e64381da9f4c8fdb4920a285590b82106b8181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_f441bdf526d167e4c990ef4911e64381da9f4c8fdb4920a285590b82106b8181->leave($__internal_f441bdf526d167e4c990ef4911e64381da9f4c8fdb4920a285590b82106b8181_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2d2c30e943ad3676603aa2162c06c89dc816c93b6b28fcabd74075eca3e51cf9 = $this->env->getExtension("native_profiler");
        $__internal_2d2c30e943ad3676603aa2162c06c89dc816c93b6b28fcabd74075eca3e51cf9->enter($__internal_2d2c30e943ad3676603aa2162c06c89dc816c93b6b28fcabd74075eca3e51cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2d2c30e943ad3676603aa2162c06c89dc816c93b6b28fcabd74075eca3e51cf9->leave($__internal_2d2c30e943ad3676603aa2162c06c89dc816c93b6b28fcabd74075eca3e51cf9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
