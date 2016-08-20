<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_f3026d447259f0b4887f80ed7a1c1504af723ce4df8b857e6d798b7566e2fe25 extends Twig_Template
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
        $__internal_392a24e2114ec4dfa0ce4a7f7bc1a8b50d15a7920db5cc16df7739cb49c3e7e0 = $this->env->getExtension("native_profiler");
        $__internal_392a24e2114ec4dfa0ce4a7f7bc1a8b50d15a7920db5cc16df7739cb49c3e7e0->enter($__internal_392a24e2114ec4dfa0ce4a7f7bc1a8b50d15a7920db5cc16df7739cb49c3e7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_392a24e2114ec4dfa0ce4a7f7bc1a8b50d15a7920db5cc16df7739cb49c3e7e0->leave($__internal_392a24e2114ec4dfa0ce4a7f7bc1a8b50d15a7920db5cc16df7739cb49c3e7e0_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7ca44eab68d3adf9dc3b304dc08ebde0e0f697b0f855d3b5c40f5ed89f2c3664 = $this->env->getExtension("native_profiler");
        $__internal_7ca44eab68d3adf9dc3b304dc08ebde0e0f697b0f855d3b5c40f5ed89f2c3664->enter($__internal_7ca44eab68d3adf9dc3b304dc08ebde0e0f697b0f855d3b5c40f5ed89f2c3664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_7ca44eab68d3adf9dc3b304dc08ebde0e0f697b0f855d3b5c40f5ed89f2c3664->leave($__internal_7ca44eab68d3adf9dc3b304dc08ebde0e0f697b0f855d3b5c40f5ed89f2c3664_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e0b39ec678f7cc0d5edbf9b40f2c85af765c8bcfe05fc53830ca55ca7ee45bda = $this->env->getExtension("native_profiler");
        $__internal_e0b39ec678f7cc0d5edbf9b40f2c85af765c8bcfe05fc53830ca55ca7ee45bda->enter($__internal_e0b39ec678f7cc0d5edbf9b40f2c85af765c8bcfe05fc53830ca55ca7ee45bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e0b39ec678f7cc0d5edbf9b40f2c85af765c8bcfe05fc53830ca55ca7ee45bda->leave($__internal_e0b39ec678f7cc0d5edbf9b40f2c85af765c8bcfe05fc53830ca55ca7ee45bda_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3a145750f14a45e5f740d4fa20d80c32f223d583707449466de5e995032cf1b6 = $this->env->getExtension("native_profiler");
        $__internal_3a145750f14a45e5f740d4fa20d80c32f223d583707449466de5e995032cf1b6->enter($__internal_3a145750f14a45e5f740d4fa20d80c32f223d583707449466de5e995032cf1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3a145750f14a45e5f740d4fa20d80c32f223d583707449466de5e995032cf1b6->leave($__internal_3a145750f14a45e5f740d4fa20d80c32f223d583707449466de5e995032cf1b6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
