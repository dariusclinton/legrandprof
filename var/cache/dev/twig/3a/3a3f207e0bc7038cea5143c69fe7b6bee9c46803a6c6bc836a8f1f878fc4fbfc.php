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
        $__internal_d5f60063dc93f66d53df609100113447c0fb7415ba028e4c0fa076ce40a44666 = $this->env->getExtension("native_profiler");
        $__internal_d5f60063dc93f66d53df609100113447c0fb7415ba028e4c0fa076ce40a44666->enter($__internal_d5f60063dc93f66d53df609100113447c0fb7415ba028e4c0fa076ce40a44666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/email.txt.twig"));

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
        
        $__internal_d5f60063dc93f66d53df609100113447c0fb7415ba028e4c0fa076ce40a44666->leave($__internal_d5f60063dc93f66d53df609100113447c0fb7415ba028e4c0fa076ce40a44666_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f6a5a8c7ec01496c0253a812b135ddf79d0e33579178050cfdc20ef1e9f8db23 = $this->env->getExtension("native_profiler");
        $__internal_f6a5a8c7ec01496c0253a812b135ddf79d0e33579178050cfdc20ef1e9f8db23->enter($__internal_f6a5a8c7ec01496c0253a812b135ddf79d0e33579178050cfdc20ef1e9f8db23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_f6a5a8c7ec01496c0253a812b135ddf79d0e33579178050cfdc20ef1e9f8db23->leave($__internal_f6a5a8c7ec01496c0253a812b135ddf79d0e33579178050cfdc20ef1e9f8db23_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f2450c7978d460a293dba7cf8ef0020349e350a304d93fc06ead5daee4e7dfe6 = $this->env->getExtension("native_profiler");
        $__internal_f2450c7978d460a293dba7cf8ef0020349e350a304d93fc06ead5daee4e7dfe6->enter($__internal_f2450c7978d460a293dba7cf8ef0020349e350a304d93fc06ead5daee4e7dfe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_f2450c7978d460a293dba7cf8ef0020349e350a304d93fc06ead5daee4e7dfe6->leave($__internal_f2450c7978d460a293dba7cf8ef0020349e350a304d93fc06ead5daee4e7dfe6_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c6209f45467f7846babfd6863da1d66f5511210bc46cfa6f084cb983d2fe19a1 = $this->env->getExtension("native_profiler");
        $__internal_c6209f45467f7846babfd6863da1d66f5511210bc46cfa6f084cb983d2fe19a1->enter($__internal_c6209f45467f7846babfd6863da1d66f5511210bc46cfa6f084cb983d2fe19a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c6209f45467f7846babfd6863da1d66f5511210bc46cfa6f084cb983d2fe19a1->leave($__internal_c6209f45467f7846babfd6863da1d66f5511210bc46cfa6f084cb983d2fe19a1_prof);

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
