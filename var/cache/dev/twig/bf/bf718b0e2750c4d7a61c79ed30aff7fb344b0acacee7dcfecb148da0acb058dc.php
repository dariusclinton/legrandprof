<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_9356332193063902e3a3be80d22ee17bea76de800561fe63d1ecf7ec890a5942 extends Twig_Template
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
        $__internal_a754705f02a462603aef5712bc5603c88a68c6e11644de37f2f222b9b312042c = $this->env->getExtension("native_profiler");
        $__internal_a754705f02a462603aef5712bc5603c88a68c6e11644de37f2f222b9b312042c->enter($__internal_a754705f02a462603aef5712bc5603c88a68c6e11644de37f2f222b9b312042c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a754705f02a462603aef5712bc5603c88a68c6e11644de37f2f222b9b312042c->leave($__internal_a754705f02a462603aef5712bc5603c88a68c6e11644de37f2f222b9b312042c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7e60e86440a6e6431c558ef21a2424c29c17d370d42dc10a311abf5c40542ea7 = $this->env->getExtension("native_profiler");
        $__internal_7e60e86440a6e6431c558ef21a2424c29c17d370d42dc10a311abf5c40542ea7->enter($__internal_7e60e86440a6e6431c558ef21a2424c29c17d370d42dc10a311abf5c40542ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_7e60e86440a6e6431c558ef21a2424c29c17d370d42dc10a311abf5c40542ea7->leave($__internal_7e60e86440a6e6431c558ef21a2424c29c17d370d42dc10a311abf5c40542ea7_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d5f3c980e6f6df538097f97a7e781359f42b1d51ab1c9ec4ddf7685c9b26d47e = $this->env->getExtension("native_profiler");
        $__internal_d5f3c980e6f6df538097f97a7e781359f42b1d51ab1c9ec4ddf7685c9b26d47e->enter($__internal_d5f3c980e6f6df538097f97a7e781359f42b1d51ab1c9ec4ddf7685c9b26d47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d5f3c980e6f6df538097f97a7e781359f42b1d51ab1c9ec4ddf7685c9b26d47e->leave($__internal_d5f3c980e6f6df538097f97a7e781359f42b1d51ab1c9ec4ddf7685c9b26d47e_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_12f6aaa7b39b4f50d5d7e95caec1085d521af3dffc29c12ce4934be9a45bda29 = $this->env->getExtension("native_profiler");
        $__internal_12f6aaa7b39b4f50d5d7e95caec1085d521af3dffc29c12ce4934be9a45bda29->enter($__internal_12f6aaa7b39b4f50d5d7e95caec1085d521af3dffc29c12ce4934be9a45bda29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_12f6aaa7b39b4f50d5d7e95caec1085d521af3dffc29c12ce4934be9a45bda29->leave($__internal_12f6aaa7b39b4f50d5d7e95caec1085d521af3dffc29c12ce4934be9a45bda29_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
";
    }
}
