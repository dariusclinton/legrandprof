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
        $__internal_b5cec3ea6c7b77d97e1fecc03a103635135903c7aa1e5821e64032ee0541108a = $this->env->getExtension("native_profiler");
        $__internal_b5cec3ea6c7b77d97e1fecc03a103635135903c7aa1e5821e64032ee0541108a->enter($__internal_b5cec3ea6c7b77d97e1fecc03a103635135903c7aa1e5821e64032ee0541108a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/email.txt.twig"));

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
        
        $__internal_b5cec3ea6c7b77d97e1fecc03a103635135903c7aa1e5821e64032ee0541108a->leave($__internal_b5cec3ea6c7b77d97e1fecc03a103635135903c7aa1e5821e64032ee0541108a_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_cb5343631cfa0e5b1b3b4c64ba0630f22708513010c0af2b370909c0a53f1beb = $this->env->getExtension("native_profiler");
        $__internal_cb5343631cfa0e5b1b3b4c64ba0630f22708513010c0af2b370909c0a53f1beb->enter($__internal_cb5343631cfa0e5b1b3b4c64ba0630f22708513010c0af2b370909c0a53f1beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_cb5343631cfa0e5b1b3b4c64ba0630f22708513010c0af2b370909c0a53f1beb->leave($__internal_cb5343631cfa0e5b1b3b4c64ba0630f22708513010c0af2b370909c0a53f1beb_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_02c65c972702401685f7c4d07730f1a8a42dce59f6ec50b73d986a666e95546c = $this->env->getExtension("native_profiler");
        $__internal_02c65c972702401685f7c4d07730f1a8a42dce59f6ec50b73d986a666e95546c->enter($__internal_02c65c972702401685f7c4d07730f1a8a42dce59f6ec50b73d986a666e95546c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_02c65c972702401685f7c4d07730f1a8a42dce59f6ec50b73d986a666e95546c->leave($__internal_02c65c972702401685f7c4d07730f1a8a42dce59f6ec50b73d986a666e95546c_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_dfde83d818265dece22e122759d2586c5c02287084818cb96c9d718cc568a2f1 = $this->env->getExtension("native_profiler");
        $__internal_dfde83d818265dece22e122759d2586c5c02287084818cb96c9d718cc568a2f1->enter($__internal_dfde83d818265dece22e122759d2586c5c02287084818cb96c9d718cc568a2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_dfde83d818265dece22e122759d2586c5c02287084818cb96c9d718cc568a2f1->leave($__internal_dfde83d818265dece22e122759d2586c5c02287084818cb96c9d718cc568a2f1_prof);

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
