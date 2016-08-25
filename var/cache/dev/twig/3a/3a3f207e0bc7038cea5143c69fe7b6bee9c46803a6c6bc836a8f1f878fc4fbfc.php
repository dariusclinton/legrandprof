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
        $__internal_1d3a4163f55a59743e6ebdcdaef6b30201dcde560ae1ab7214176f4e8e83fa09 = $this->env->getExtension("native_profiler");
        $__internal_1d3a4163f55a59743e6ebdcdaef6b30201dcde560ae1ab7214176f4e8e83fa09->enter($__internal_1d3a4163f55a59743e6ebdcdaef6b30201dcde560ae1ab7214176f4e8e83fa09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/email.txt.twig"));

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
        
        $__internal_1d3a4163f55a59743e6ebdcdaef6b30201dcde560ae1ab7214176f4e8e83fa09->leave($__internal_1d3a4163f55a59743e6ebdcdaef6b30201dcde560ae1ab7214176f4e8e83fa09_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b4e078a5fbbb43687a2a21fd557ae46157c0f57a3e9b9eb0c72aef28d927e728 = $this->env->getExtension("native_profiler");
        $__internal_b4e078a5fbbb43687a2a21fd557ae46157c0f57a3e9b9eb0c72aef28d927e728->enter($__internal_b4e078a5fbbb43687a2a21fd557ae46157c0f57a3e9b9eb0c72aef28d927e728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_b4e078a5fbbb43687a2a21fd557ae46157c0f57a3e9b9eb0c72aef28d927e728->leave($__internal_b4e078a5fbbb43687a2a21fd557ae46157c0f57a3e9b9eb0c72aef28d927e728_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_03b07198f17f18f65e0565c233a57a1c2c5dde47920e06e41c82e406e07a325a = $this->env->getExtension("native_profiler");
        $__internal_03b07198f17f18f65e0565c233a57a1c2c5dde47920e06e41c82e406e07a325a->enter($__internal_03b07198f17f18f65e0565c233a57a1c2c5dde47920e06e41c82e406e07a325a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_03b07198f17f18f65e0565c233a57a1c2c5dde47920e06e41c82e406e07a325a->leave($__internal_03b07198f17f18f65e0565c233a57a1c2c5dde47920e06e41c82e406e07a325a_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_849bd153e37056de2bbd097d319a4d73a0996bd1b2123684690d63577ff292c2 = $this->env->getExtension("native_profiler");
        $__internal_849bd153e37056de2bbd097d319a4d73a0996bd1b2123684690d63577ff292c2->enter($__internal_849bd153e37056de2bbd097d319a4d73a0996bd1b2123684690d63577ff292c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_849bd153e37056de2bbd097d319a4d73a0996bd1b2123684690d63577ff292c2->leave($__internal_849bd153e37056de2bbd097d319a4d73a0996bd1b2123684690d63577ff292c2_prof);

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
