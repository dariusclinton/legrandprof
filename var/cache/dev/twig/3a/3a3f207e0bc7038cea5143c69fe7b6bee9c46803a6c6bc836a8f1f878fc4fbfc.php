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
        $__internal_483298a9c9df5bc3a4ca50c69522b79011a719724588383dff9cc07dd10c0cef = $this->env->getExtension("native_profiler");
        $__internal_483298a9c9df5bc3a4ca50c69522b79011a719724588383dff9cc07dd10c0cef->enter($__internal_483298a9c9df5bc3a4ca50c69522b79011a719724588383dff9cc07dd10c0cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/email.txt.twig"));

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
        
        $__internal_483298a9c9df5bc3a4ca50c69522b79011a719724588383dff9cc07dd10c0cef->leave($__internal_483298a9c9df5bc3a4ca50c69522b79011a719724588383dff9cc07dd10c0cef_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_84efa71acd0de6f039d92ca678a358f48392d663facdb53dd67715cd1d928c81 = $this->env->getExtension("native_profiler");
        $__internal_84efa71acd0de6f039d92ca678a358f48392d663facdb53dd67715cd1d928c81->enter($__internal_84efa71acd0de6f039d92ca678a358f48392d663facdb53dd67715cd1d928c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_84efa71acd0de6f039d92ca678a358f48392d663facdb53dd67715cd1d928c81->leave($__internal_84efa71acd0de6f039d92ca678a358f48392d663facdb53dd67715cd1d928c81_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_930d6208e6b65fbaa168571439ecb0af95fc5782becb528379c64db15f3744ce = $this->env->getExtension("native_profiler");
        $__internal_930d6208e6b65fbaa168571439ecb0af95fc5782becb528379c64db15f3744ce->enter($__internal_930d6208e6b65fbaa168571439ecb0af95fc5782becb528379c64db15f3744ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_930d6208e6b65fbaa168571439ecb0af95fc5782becb528379c64db15f3744ce->leave($__internal_930d6208e6b65fbaa168571439ecb0af95fc5782becb528379c64db15f3744ce_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6468b7b4527d4395045855cd233e215e801a5648e3754c08c4a206b7c5f0c70b = $this->env->getExtension("native_profiler");
        $__internal_6468b7b4527d4395045855cd233e215e801a5648e3754c08c4a206b7c5f0c70b->enter($__internal_6468b7b4527d4395045855cd233e215e801a5648e3754c08c4a206b7c5f0c70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6468b7b4527d4395045855cd233e215e801a5648e3754c08c4a206b7c5f0c70b->leave($__internal_6468b7b4527d4395045855cd233e215e801a5648e3754c08c4a206b7c5f0c70b_prof);

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
