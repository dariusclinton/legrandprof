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
        $__internal_8f2aea684ab886ce2fa30d5da47e78515fd550e258469f0b7683c153229821ea = $this->env->getExtension("native_profiler");
        $__internal_8f2aea684ab886ce2fa30d5da47e78515fd550e258469f0b7683c153229821ea->enter($__internal_8f2aea684ab886ce2fa30d5da47e78515fd550e258469f0b7683c153229821ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_8f2aea684ab886ce2fa30d5da47e78515fd550e258469f0b7683c153229821ea->leave($__internal_8f2aea684ab886ce2fa30d5da47e78515fd550e258469f0b7683c153229821ea_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c4b2d4a94135ce060b4ac9c79552d5a67df671e5a40aa0550f0baefca48596fe = $this->env->getExtension("native_profiler");
        $__internal_c4b2d4a94135ce060b4ac9c79552d5a67df671e5a40aa0550f0baefca48596fe->enter($__internal_c4b2d4a94135ce060b4ac9c79552d5a67df671e5a40aa0550f0baefca48596fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_c4b2d4a94135ce060b4ac9c79552d5a67df671e5a40aa0550f0baefca48596fe->leave($__internal_c4b2d4a94135ce060b4ac9c79552d5a67df671e5a40aa0550f0baefca48596fe_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_20ec76a5851fa3cd35eaf88af25a3e166cc94d4eeaf11e3283498debbefae0f4 = $this->env->getExtension("native_profiler");
        $__internal_20ec76a5851fa3cd35eaf88af25a3e166cc94d4eeaf11e3283498debbefae0f4->enter($__internal_20ec76a5851fa3cd35eaf88af25a3e166cc94d4eeaf11e3283498debbefae0f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_20ec76a5851fa3cd35eaf88af25a3e166cc94d4eeaf11e3283498debbefae0f4->leave($__internal_20ec76a5851fa3cd35eaf88af25a3e166cc94d4eeaf11e3283498debbefae0f4_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_950e4d62997cc345f340dd3c1e7f178bdc42b056421105f8af5638b3cfad08f0 = $this->env->getExtension("native_profiler");
        $__internal_950e4d62997cc345f340dd3c1e7f178bdc42b056421105f8af5638b3cfad08f0->enter($__internal_950e4d62997cc345f340dd3c1e7f178bdc42b056421105f8af5638b3cfad08f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_950e4d62997cc345f340dd3c1e7f178bdc42b056421105f8af5638b3cfad08f0->leave($__internal_950e4d62997cc345f340dd3c1e7f178bdc42b056421105f8af5638b3cfad08f0_prof);

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
