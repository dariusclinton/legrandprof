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
        $__internal_2ff8e45fd898f66912e7d10675e94d16dbb07cfb89c85b69fffbefce70afbb17 = $this->env->getExtension("native_profiler");
        $__internal_2ff8e45fd898f66912e7d10675e94d16dbb07cfb89c85b69fffbefce70afbb17->enter($__internal_2ff8e45fd898f66912e7d10675e94d16dbb07cfb89c85b69fffbefce70afbb17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/email.txt.twig"));

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
        
        $__internal_2ff8e45fd898f66912e7d10675e94d16dbb07cfb89c85b69fffbefce70afbb17->leave($__internal_2ff8e45fd898f66912e7d10675e94d16dbb07cfb89c85b69fffbefce70afbb17_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5b50373b28167acf1f6ad96f515fc3e038b0dd2c174e5de28ea47d573d78c808 = $this->env->getExtension("native_profiler");
        $__internal_5b50373b28167acf1f6ad96f515fc3e038b0dd2c174e5de28ea47d573d78c808->enter($__internal_5b50373b28167acf1f6ad96f515fc3e038b0dd2c174e5de28ea47d573d78c808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_5b50373b28167acf1f6ad96f515fc3e038b0dd2c174e5de28ea47d573d78c808->leave($__internal_5b50373b28167acf1f6ad96f515fc3e038b0dd2c174e5de28ea47d573d78c808_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1a00cb852bc8c3f91161deea07b6cd1f65b15a34d48c3fb8d50f1bfee54dc424 = $this->env->getExtension("native_profiler");
        $__internal_1a00cb852bc8c3f91161deea07b6cd1f65b15a34d48c3fb8d50f1bfee54dc424->enter($__internal_1a00cb852bc8c3f91161deea07b6cd1f65b15a34d48c3fb8d50f1bfee54dc424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_1a00cb852bc8c3f91161deea07b6cd1f65b15a34d48c3fb8d50f1bfee54dc424->leave($__internal_1a00cb852bc8c3f91161deea07b6cd1f65b15a34d48c3fb8d50f1bfee54dc424_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1f644a7feb07c0b88721dc4486c443e9e4fb65eddb0e0369307fba82bb722368 = $this->env->getExtension("native_profiler");
        $__internal_1f644a7feb07c0b88721dc4486c443e9e4fb65eddb0e0369307fba82bb722368->enter($__internal_1f644a7feb07c0b88721dc4486c443e9e4fb65eddb0e0369307fba82bb722368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1f644a7feb07c0b88721dc4486c443e9e4fb65eddb0e0369307fba82bb722368->leave($__internal_1f644a7feb07c0b88721dc4486c443e9e4fb65eddb0e0369307fba82bb722368_prof);

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
