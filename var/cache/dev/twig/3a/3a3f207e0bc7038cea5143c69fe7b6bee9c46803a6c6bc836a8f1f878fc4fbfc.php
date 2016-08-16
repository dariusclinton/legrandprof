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
        $__internal_3c04ecf0c71d07b55cda31d40cb9bba11dbcafb100cfe46b517f856911da7801 = $this->env->getExtension("native_profiler");
        $__internal_3c04ecf0c71d07b55cda31d40cb9bba11dbcafb100cfe46b517f856911da7801->enter($__internal_3c04ecf0c71d07b55cda31d40cb9bba11dbcafb100cfe46b517f856911da7801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/email.txt.twig"));

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
        
        $__internal_3c04ecf0c71d07b55cda31d40cb9bba11dbcafb100cfe46b517f856911da7801->leave($__internal_3c04ecf0c71d07b55cda31d40cb9bba11dbcafb100cfe46b517f856911da7801_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_83cec44516131daee9f56aec7cd9abb34def07161acb1de9f6eb513555c2f0c6 = $this->env->getExtension("native_profiler");
        $__internal_83cec44516131daee9f56aec7cd9abb34def07161acb1de9f6eb513555c2f0c6->enter($__internal_83cec44516131daee9f56aec7cd9abb34def07161acb1de9f6eb513555c2f0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_83cec44516131daee9f56aec7cd9abb34def07161acb1de9f6eb513555c2f0c6->leave($__internal_83cec44516131daee9f56aec7cd9abb34def07161acb1de9f6eb513555c2f0c6_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_69afba270cf131a7948dd7638976dfd077555ea1c5c74bfe80875ac3847fb6ab = $this->env->getExtension("native_profiler");
        $__internal_69afba270cf131a7948dd7638976dfd077555ea1c5c74bfe80875ac3847fb6ab->enter($__internal_69afba270cf131a7948dd7638976dfd077555ea1c5c74bfe80875ac3847fb6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_69afba270cf131a7948dd7638976dfd077555ea1c5c74bfe80875ac3847fb6ab->leave($__internal_69afba270cf131a7948dd7638976dfd077555ea1c5c74bfe80875ac3847fb6ab_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_04bba91da7a5f49ba5e951300d56a6084a026dc3a7898c1f460a8b506ef9c79f = $this->env->getExtension("native_profiler");
        $__internal_04bba91da7a5f49ba5e951300d56a6084a026dc3a7898c1f460a8b506ef9c79f->enter($__internal_04bba91da7a5f49ba5e951300d56a6084a026dc3a7898c1f460a8b506ef9c79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_04bba91da7a5f49ba5e951300d56a6084a026dc3a7898c1f460a8b506ef9c79f->leave($__internal_04bba91da7a5f49ba5e951300d56a6084a026dc3a7898c1f460a8b506ef9c79f_prof);

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
