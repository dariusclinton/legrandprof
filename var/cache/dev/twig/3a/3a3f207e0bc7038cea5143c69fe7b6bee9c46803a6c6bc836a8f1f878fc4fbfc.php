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
        $__internal_c6e89f38a940cf5ce4700692011e916d1f82b0d1c66ff06b20d061845524c8ba = $this->env->getExtension("native_profiler");
        $__internal_c6e89f38a940cf5ce4700692011e916d1f82b0d1c66ff06b20d061845524c8ba->enter($__internal_c6e89f38a940cf5ce4700692011e916d1f82b0d1c66ff06b20d061845524c8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/email.txt.twig"));

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
        
        $__internal_c6e89f38a940cf5ce4700692011e916d1f82b0d1c66ff06b20d061845524c8ba->leave($__internal_c6e89f38a940cf5ce4700692011e916d1f82b0d1c66ff06b20d061845524c8ba_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_35957b4c83dfe1d11ed97e09e9d87ec3f47a9a3fd4431f4dcc27519a295fbb74 = $this->env->getExtension("native_profiler");
        $__internal_35957b4c83dfe1d11ed97e09e9d87ec3f47a9a3fd4431f4dcc27519a295fbb74->enter($__internal_35957b4c83dfe1d11ed97e09e9d87ec3f47a9a3fd4431f4dcc27519a295fbb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_35957b4c83dfe1d11ed97e09e9d87ec3f47a9a3fd4431f4dcc27519a295fbb74->leave($__internal_35957b4c83dfe1d11ed97e09e9d87ec3f47a9a3fd4431f4dcc27519a295fbb74_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c16d8665b2d5213f37a61817d2e706a7052622e0146ed061f437e5b6ff275cc8 = $this->env->getExtension("native_profiler");
        $__internal_c16d8665b2d5213f37a61817d2e706a7052622e0146ed061f437e5b6ff275cc8->enter($__internal_c16d8665b2d5213f37a61817d2e706a7052622e0146ed061f437e5b6ff275cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_c16d8665b2d5213f37a61817d2e706a7052622e0146ed061f437e5b6ff275cc8->leave($__internal_c16d8665b2d5213f37a61817d2e706a7052622e0146ed061f437e5b6ff275cc8_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_49687f524709da474a06a00494e04114b83a444dd0c34aa5ae6423cb25a9615f = $this->env->getExtension("native_profiler");
        $__internal_49687f524709da474a06a00494e04114b83a444dd0c34aa5ae6423cb25a9615f->enter($__internal_49687f524709da474a06a00494e04114b83a444dd0c34aa5ae6423cb25a9615f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_49687f524709da474a06a00494e04114b83a444dd0c34aa5ae6423cb25a9615f->leave($__internal_49687f524709da474a06a00494e04114b83a444dd0c34aa5ae6423cb25a9615f_prof);

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
