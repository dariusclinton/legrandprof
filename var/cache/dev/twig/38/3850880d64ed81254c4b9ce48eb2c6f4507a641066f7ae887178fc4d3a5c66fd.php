<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_8b02bcd5e9ec801b298d89fd284aa660d3d5e82fb298cfe6e8beb9b1cb966719 extends Twig_Template
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
        $__internal_fc072fed0a0958552bd34242c871933186570c29aac230f6fd0bb6b6ebec4c10 = $this->env->getExtension("native_profiler");
        $__internal_fc072fed0a0958552bd34242c871933186570c29aac230f6fd0bb6b6ebec4c10->enter($__internal_fc072fed0a0958552bd34242c871933186570c29aac230f6fd0bb6b6ebec4c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fc072fed0a0958552bd34242c871933186570c29aac230f6fd0bb6b6ebec4c10->leave($__internal_fc072fed0a0958552bd34242c871933186570c29aac230f6fd0bb6b6ebec4c10_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0a8c2d7dcee27fabbf5714601c3d7f984edc475671d56c5c931b4e05d1706e28 = $this->env->getExtension("native_profiler");
        $__internal_0a8c2d7dcee27fabbf5714601c3d7f984edc475671d56c5c931b4e05d1706e28->enter($__internal_0a8c2d7dcee27fabbf5714601c3d7f984edc475671d56c5c931b4e05d1706e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0a8c2d7dcee27fabbf5714601c3d7f984edc475671d56c5c931b4e05d1706e28->leave($__internal_0a8c2d7dcee27fabbf5714601c3d7f984edc475671d56c5c931b4e05d1706e28_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f5894c4e98a2300dc84cbe3dd52d5985aa1ce807eccf1f8f357680632a66605d = $this->env->getExtension("native_profiler");
        $__internal_f5894c4e98a2300dc84cbe3dd52d5985aa1ce807eccf1f8f357680632a66605d->enter($__internal_f5894c4e98a2300dc84cbe3dd52d5985aa1ce807eccf1f8f357680632a66605d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f5894c4e98a2300dc84cbe3dd52d5985aa1ce807eccf1f8f357680632a66605d->leave($__internal_f5894c4e98a2300dc84cbe3dd52d5985aa1ce807eccf1f8f357680632a66605d_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_dae012c6f396e94d295750010b41a2275c51c14b23c991ff4b67d97455cf4a53 = $this->env->getExtension("native_profiler");
        $__internal_dae012c6f396e94d295750010b41a2275c51c14b23c991ff4b67d97455cf4a53->enter($__internal_dae012c6f396e94d295750010b41a2275c51c14b23c991ff4b67d97455cf4a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_dae012c6f396e94d295750010b41a2275c51c14b23c991ff4b67d97455cf4a53->leave($__internal_dae012c6f396e94d295750010b41a2275c51c14b23c991ff4b67d97455cf4a53_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
";
    }
}
