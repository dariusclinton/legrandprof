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
        $__internal_3699c9987e22e69a897723d01e8b3e37f1fa107506eba7850d16e13443fecb72 = $this->env->getExtension("native_profiler");
        $__internal_3699c9987e22e69a897723d01e8b3e37f1fa107506eba7850d16e13443fecb72->enter($__internal_3699c9987e22e69a897723d01e8b3e37f1fa107506eba7850d16e13443fecb72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_3699c9987e22e69a897723d01e8b3e37f1fa107506eba7850d16e13443fecb72->leave($__internal_3699c9987e22e69a897723d01e8b3e37f1fa107506eba7850d16e13443fecb72_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6f8016a1ceb8612aed8ad8803f0032b07698a9695da27e2de28dccaa4b1df8d8 = $this->env->getExtension("native_profiler");
        $__internal_6f8016a1ceb8612aed8ad8803f0032b07698a9695da27e2de28dccaa4b1df8d8->enter($__internal_6f8016a1ceb8612aed8ad8803f0032b07698a9695da27e2de28dccaa4b1df8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_6f8016a1ceb8612aed8ad8803f0032b07698a9695da27e2de28dccaa4b1df8d8->leave($__internal_6f8016a1ceb8612aed8ad8803f0032b07698a9695da27e2de28dccaa4b1df8d8_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f8730188615166076b7f279a2bc1149cd83d50f1a208bcaa232b9dbf62e55d80 = $this->env->getExtension("native_profiler");
        $__internal_f8730188615166076b7f279a2bc1149cd83d50f1a208bcaa232b9dbf62e55d80->enter($__internal_f8730188615166076b7f279a2bc1149cd83d50f1a208bcaa232b9dbf62e55d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_f8730188615166076b7f279a2bc1149cd83d50f1a208bcaa232b9dbf62e55d80->leave($__internal_f8730188615166076b7f279a2bc1149cd83d50f1a208bcaa232b9dbf62e55d80_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_640d9e6fb0bd6639d8fa09554e24ff000c7fb0893e5f71940cbc4e8ea72aa028 = $this->env->getExtension("native_profiler");
        $__internal_640d9e6fb0bd6639d8fa09554e24ff000c7fb0893e5f71940cbc4e8ea72aa028->enter($__internal_640d9e6fb0bd6639d8fa09554e24ff000c7fb0893e5f71940cbc4e8ea72aa028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_640d9e6fb0bd6639d8fa09554e24ff000c7fb0893e5f71940cbc4e8ea72aa028->leave($__internal_640d9e6fb0bd6639d8fa09554e24ff000c7fb0893e5f71940cbc4e8ea72aa028_prof);

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
