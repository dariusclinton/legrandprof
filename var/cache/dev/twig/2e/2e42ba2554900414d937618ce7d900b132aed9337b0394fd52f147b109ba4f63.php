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
        $__internal_00b16756b252f75758158d0f203c16ffbc57495115e4bd93fc4a7cc90b77d06d = $this->env->getExtension("native_profiler");
        $__internal_00b16756b252f75758158d0f203c16ffbc57495115e4bd93fc4a7cc90b77d06d->enter($__internal_00b16756b252f75758158d0f203c16ffbc57495115e4bd93fc4a7cc90b77d06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_00b16756b252f75758158d0f203c16ffbc57495115e4bd93fc4a7cc90b77d06d->leave($__internal_00b16756b252f75758158d0f203c16ffbc57495115e4bd93fc4a7cc90b77d06d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4036e89da5f8a64fa6ff30634dd8a1c1e513c633cd6b6dafa7744f984e226c2b = $this->env->getExtension("native_profiler");
        $__internal_4036e89da5f8a64fa6ff30634dd8a1c1e513c633cd6b6dafa7744f984e226c2b->enter($__internal_4036e89da5f8a64fa6ff30634dd8a1c1e513c633cd6b6dafa7744f984e226c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_4036e89da5f8a64fa6ff30634dd8a1c1e513c633cd6b6dafa7744f984e226c2b->leave($__internal_4036e89da5f8a64fa6ff30634dd8a1c1e513c633cd6b6dafa7744f984e226c2b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5f17bcb6bcac23e5d594f058fc82e16be0acfce42d3afbe291c7005c9bcfbb95 = $this->env->getExtension("native_profiler");
        $__internal_5f17bcb6bcac23e5d594f058fc82e16be0acfce42d3afbe291c7005c9bcfbb95->enter($__internal_5f17bcb6bcac23e5d594f058fc82e16be0acfce42d3afbe291c7005c9bcfbb95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5f17bcb6bcac23e5d594f058fc82e16be0acfce42d3afbe291c7005c9bcfbb95->leave($__internal_5f17bcb6bcac23e5d594f058fc82e16be0acfce42d3afbe291c7005c9bcfbb95_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9dcfeb72892a0793263f430c76dfbc8cfcb4008b7c264eb3a8e7ff5c9a2122c7 = $this->env->getExtension("native_profiler");
        $__internal_9dcfeb72892a0793263f430c76dfbc8cfcb4008b7c264eb3a8e7ff5c9a2122c7->enter($__internal_9dcfeb72892a0793263f430c76dfbc8cfcb4008b7c264eb3a8e7ff5c9a2122c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9dcfeb72892a0793263f430c76dfbc8cfcb4008b7c264eb3a8e7ff5c9a2122c7->leave($__internal_9dcfeb72892a0793263f430c76dfbc8cfcb4008b7c264eb3a8e7ff5c9a2122c7_prof);

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
