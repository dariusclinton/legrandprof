<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_d307a7e90ca6c1741aa1061b2c0fe55a6a6a6aea980e344f340b875383ebb623 extends Twig_Template
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
        $__internal_3e9f1128bf3c59cde7e85dd0de64702bbc2512ff70d0c0440e5ebd46667084bd = $this->env->getExtension("native_profiler");
        $__internal_3e9f1128bf3c59cde7e85dd0de64702bbc2512ff70d0c0440e5ebd46667084bd->enter($__internal_3e9f1128bf3c59cde7e85dd0de64702bbc2512ff70d0c0440e5ebd46667084bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3e9f1128bf3c59cde7e85dd0de64702bbc2512ff70d0c0440e5ebd46667084bd->leave($__internal_3e9f1128bf3c59cde7e85dd0de64702bbc2512ff70d0c0440e5ebd46667084bd_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_05f710ced0c250e1fc26be434e6ee6fc8d77621772a0845e01326e31c0edabc3 = $this->env->getExtension("native_profiler");
        $__internal_05f710ced0c250e1fc26be434e6ee6fc8d77621772a0845e01326e31c0edabc3->enter($__internal_05f710ced0c250e1fc26be434e6ee6fc8d77621772a0845e01326e31c0edabc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_05f710ced0c250e1fc26be434e6ee6fc8d77621772a0845e01326e31c0edabc3->leave($__internal_05f710ced0c250e1fc26be434e6ee6fc8d77621772a0845e01326e31c0edabc3_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b10d892641f5a5418507f90d7b46eeb2d5762c29677d8077de3d086c0bb74723 = $this->env->getExtension("native_profiler");
        $__internal_b10d892641f5a5418507f90d7b46eeb2d5762c29677d8077de3d086c0bb74723->enter($__internal_b10d892641f5a5418507f90d7b46eeb2d5762c29677d8077de3d086c0bb74723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b10d892641f5a5418507f90d7b46eeb2d5762c29677d8077de3d086c0bb74723->leave($__internal_b10d892641f5a5418507f90d7b46eeb2d5762c29677d8077de3d086c0bb74723_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_57eb6449d603b98f3d9bd79d5093202601b54eec9fb38c43dc09f90d730de6ba = $this->env->getExtension("native_profiler");
        $__internal_57eb6449d603b98f3d9bd79d5093202601b54eec9fb38c43dc09f90d730de6ba->enter($__internal_57eb6449d603b98f3d9bd79d5093202601b54eec9fb38c43dc09f90d730de6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_57eb6449d603b98f3d9bd79d5093202601b54eec9fb38c43dc09f90d730de6ba->leave($__internal_57eb6449d603b98f3d9bd79d5093202601b54eec9fb38c43dc09f90d730de6ba_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
