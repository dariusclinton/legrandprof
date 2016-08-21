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
        $__internal_1df461df569fde59c7cd6f33400e37996f1f4e89b01c9fbc951c20f6db004bef = $this->env->getExtension("native_profiler");
        $__internal_1df461df569fde59c7cd6f33400e37996f1f4e89b01c9fbc951c20f6db004bef->enter($__internal_1df461df569fde59c7cd6f33400e37996f1f4e89b01c9fbc951c20f6db004bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/email.txt.twig"));

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
        
        $__internal_1df461df569fde59c7cd6f33400e37996f1f4e89b01c9fbc951c20f6db004bef->leave($__internal_1df461df569fde59c7cd6f33400e37996f1f4e89b01c9fbc951c20f6db004bef_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_650d2b32e9da32495927c7ebfbba5356754cf627e44b0561a253b86f53612d8c = $this->env->getExtension("native_profiler");
        $__internal_650d2b32e9da32495927c7ebfbba5356754cf627e44b0561a253b86f53612d8c->enter($__internal_650d2b32e9da32495927c7ebfbba5356754cf627e44b0561a253b86f53612d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_650d2b32e9da32495927c7ebfbba5356754cf627e44b0561a253b86f53612d8c->leave($__internal_650d2b32e9da32495927c7ebfbba5356754cf627e44b0561a253b86f53612d8c_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_673cb078755fddcbcb770aacb772f28f6d849c3e65b6a6d76b8e9f0bb8ea1c10 = $this->env->getExtension("native_profiler");
        $__internal_673cb078755fddcbcb770aacb772f28f6d849c3e65b6a6d76b8e9f0bb8ea1c10->enter($__internal_673cb078755fddcbcb770aacb772f28f6d849c3e65b6a6d76b8e9f0bb8ea1c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_673cb078755fddcbcb770aacb772f28f6d849c3e65b6a6d76b8e9f0bb8ea1c10->leave($__internal_673cb078755fddcbcb770aacb772f28f6d849c3e65b6a6d76b8e9f0bb8ea1c10_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b79f68922764f87865edbbf22393262a309dcadac99e00a2d96e96dba51afb7a = $this->env->getExtension("native_profiler");
        $__internal_b79f68922764f87865edbbf22393262a309dcadac99e00a2d96e96dba51afb7a->enter($__internal_b79f68922764f87865edbbf22393262a309dcadac99e00a2d96e96dba51afb7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b79f68922764f87865edbbf22393262a309dcadac99e00a2d96e96dba51afb7a->leave($__internal_b79f68922764f87865edbbf22393262a309dcadac99e00a2d96e96dba51afb7a_prof);

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
