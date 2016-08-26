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
        $__internal_670446431cea641a61d1a199c44968ce5cb7d04e37c17a385b9685ebba5dc4d5 = $this->env->getExtension("native_profiler");
        $__internal_670446431cea641a61d1a199c44968ce5cb7d04e37c17a385b9685ebba5dc4d5->enter($__internal_670446431cea641a61d1a199c44968ce5cb7d04e37c17a385b9685ebba5dc4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/email.txt.twig"));

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
        
        $__internal_670446431cea641a61d1a199c44968ce5cb7d04e37c17a385b9685ebba5dc4d5->leave($__internal_670446431cea641a61d1a199c44968ce5cb7d04e37c17a385b9685ebba5dc4d5_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7a80ce6e320352b815fbeff52e607a4e26448b3898ef4576998bea26033894f5 = $this->env->getExtension("native_profiler");
        $__internal_7a80ce6e320352b815fbeff52e607a4e26448b3898ef4576998bea26033894f5->enter($__internal_7a80ce6e320352b815fbeff52e607a4e26448b3898ef4576998bea26033894f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_7a80ce6e320352b815fbeff52e607a4e26448b3898ef4576998bea26033894f5->leave($__internal_7a80ce6e320352b815fbeff52e607a4e26448b3898ef4576998bea26033894f5_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1dbe4f38d488dc9a4f88f7904055dfa6aaa6c637e7085dd93f703d51639e57bc = $this->env->getExtension("native_profiler");
        $__internal_1dbe4f38d488dc9a4f88f7904055dfa6aaa6c637e7085dd93f703d51639e57bc->enter($__internal_1dbe4f38d488dc9a4f88f7904055dfa6aaa6c637e7085dd93f703d51639e57bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_1dbe4f38d488dc9a4f88f7904055dfa6aaa6c637e7085dd93f703d51639e57bc->leave($__internal_1dbe4f38d488dc9a4f88f7904055dfa6aaa6c637e7085dd93f703d51639e57bc_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a9b6db5eddbed0e4476171c9320ce1b14e18f2c009d0ec2d379449894bb0f6a0 = $this->env->getExtension("native_profiler");
        $__internal_a9b6db5eddbed0e4476171c9320ce1b14e18f2c009d0ec2d379449894bb0f6a0->enter($__internal_a9b6db5eddbed0e4476171c9320ce1b14e18f2c009d0ec2d379449894bb0f6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a9b6db5eddbed0e4476171c9320ce1b14e18f2c009d0ec2d379449894bb0f6a0->leave($__internal_a9b6db5eddbed0e4476171c9320ce1b14e18f2c009d0ec2d379449894bb0f6a0_prof);

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
