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
        $__internal_2b22b53fe3bf64b96609d0083135d9fbdd3795ed0c44e84148accebf80dced4f = $this->env->getExtension("native_profiler");
        $__internal_2b22b53fe3bf64b96609d0083135d9fbdd3795ed0c44e84148accebf80dced4f->enter($__internal_2b22b53fe3bf64b96609d0083135d9fbdd3795ed0c44e84148accebf80dced4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/email.txt.twig"));

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
        
        $__internal_2b22b53fe3bf64b96609d0083135d9fbdd3795ed0c44e84148accebf80dced4f->leave($__internal_2b22b53fe3bf64b96609d0083135d9fbdd3795ed0c44e84148accebf80dced4f_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_75ee2a0d19bbbfb0482abd7d3b17a7678bbc7aa45febe56ffdccd3280e8986a5 = $this->env->getExtension("native_profiler");
        $__internal_75ee2a0d19bbbfb0482abd7d3b17a7678bbc7aa45febe56ffdccd3280e8986a5->enter($__internal_75ee2a0d19bbbfb0482abd7d3b17a7678bbc7aa45febe56ffdccd3280e8986a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_75ee2a0d19bbbfb0482abd7d3b17a7678bbc7aa45febe56ffdccd3280e8986a5->leave($__internal_75ee2a0d19bbbfb0482abd7d3b17a7678bbc7aa45febe56ffdccd3280e8986a5_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ddaa6cd52a7549afbbd98b1fad74ce9a4534f1b34d1bab11640005b6b2c5d831 = $this->env->getExtension("native_profiler");
        $__internal_ddaa6cd52a7549afbbd98b1fad74ce9a4534f1b34d1bab11640005b6b2c5d831->enter($__internal_ddaa6cd52a7549afbbd98b1fad74ce9a4534f1b34d1bab11640005b6b2c5d831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_ddaa6cd52a7549afbbd98b1fad74ce9a4534f1b34d1bab11640005b6b2c5d831->leave($__internal_ddaa6cd52a7549afbbd98b1fad74ce9a4534f1b34d1bab11640005b6b2c5d831_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d7599bccaed551db6ad83d043f0044ee40c670df8efa90fa4f8adb4fbb46737a = $this->env->getExtension("native_profiler");
        $__internal_d7599bccaed551db6ad83d043f0044ee40c670df8efa90fa4f8adb4fbb46737a->enter($__internal_d7599bccaed551db6ad83d043f0044ee40c670df8efa90fa4f8adb4fbb46737a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d7599bccaed551db6ad83d043f0044ee40c670df8efa90fa4f8adb4fbb46737a->leave($__internal_d7599bccaed551db6ad83d043f0044ee40c670df8efa90fa4f8adb4fbb46737a_prof);

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
