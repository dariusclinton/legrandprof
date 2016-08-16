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
        $__internal_8d1954414de3bb2f6566f5a7c8286629392957cf3fe023254d3921959158325a = $this->env->getExtension("native_profiler");
        $__internal_8d1954414de3bb2f6566f5a7c8286629392957cf3fe023254d3921959158325a->enter($__internal_8d1954414de3bb2f6566f5a7c8286629392957cf3fe023254d3921959158325a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/email.txt.twig"));

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
        
        $__internal_8d1954414de3bb2f6566f5a7c8286629392957cf3fe023254d3921959158325a->leave($__internal_8d1954414de3bb2f6566f5a7c8286629392957cf3fe023254d3921959158325a_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bae2e5734c57d30a63b4a92495e8d5173d8b050efa49e750225834d36c8ba1cc = $this->env->getExtension("native_profiler");
        $__internal_bae2e5734c57d30a63b4a92495e8d5173d8b050efa49e750225834d36c8ba1cc->enter($__internal_bae2e5734c57d30a63b4a92495e8d5173d8b050efa49e750225834d36c8ba1cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_bae2e5734c57d30a63b4a92495e8d5173d8b050efa49e750225834d36c8ba1cc->leave($__internal_bae2e5734c57d30a63b4a92495e8d5173d8b050efa49e750225834d36c8ba1cc_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8c9fe142f14eecca0f2d1785687b99c7d5557e60316412894c3e26e5796cb75a = $this->env->getExtension("native_profiler");
        $__internal_8c9fe142f14eecca0f2d1785687b99c7d5557e60316412894c3e26e5796cb75a->enter($__internal_8c9fe142f14eecca0f2d1785687b99c7d5557e60316412894c3e26e5796cb75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_8c9fe142f14eecca0f2d1785687b99c7d5557e60316412894c3e26e5796cb75a->leave($__internal_8c9fe142f14eecca0f2d1785687b99c7d5557e60316412894c3e26e5796cb75a_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_69b742b9b1d5298d6744ad72c21712815decae00ac4e315181aed0d2621dd5c6 = $this->env->getExtension("native_profiler");
        $__internal_69b742b9b1d5298d6744ad72c21712815decae00ac4e315181aed0d2621dd5c6->enter($__internal_69b742b9b1d5298d6744ad72c21712815decae00ac4e315181aed0d2621dd5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_69b742b9b1d5298d6744ad72c21712815decae00ac4e315181aed0d2621dd5c6->leave($__internal_69b742b9b1d5298d6744ad72c21712815decae00ac4e315181aed0d2621dd5c6_prof);

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
