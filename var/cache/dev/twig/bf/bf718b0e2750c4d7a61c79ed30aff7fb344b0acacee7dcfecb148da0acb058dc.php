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
        $__internal_555a495c3cd76a4d01b9d4cfb387dd7cbd18a3b1dcb50804ccf147c6d010bf36 = $this->env->getExtension("native_profiler");
        $__internal_555a495c3cd76a4d01b9d4cfb387dd7cbd18a3b1dcb50804ccf147c6d010bf36->enter($__internal_555a495c3cd76a4d01b9d4cfb387dd7cbd18a3b1dcb50804ccf147c6d010bf36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_555a495c3cd76a4d01b9d4cfb387dd7cbd18a3b1dcb50804ccf147c6d010bf36->leave($__internal_555a495c3cd76a4d01b9d4cfb387dd7cbd18a3b1dcb50804ccf147c6d010bf36_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0b43b47f09dd6c1e614c3ede0e35ab8440f494b65de1b687508ad7a1fbd0a314 = $this->env->getExtension("native_profiler");
        $__internal_0b43b47f09dd6c1e614c3ede0e35ab8440f494b65de1b687508ad7a1fbd0a314->enter($__internal_0b43b47f09dd6c1e614c3ede0e35ab8440f494b65de1b687508ad7a1fbd0a314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_0b43b47f09dd6c1e614c3ede0e35ab8440f494b65de1b687508ad7a1fbd0a314->leave($__internal_0b43b47f09dd6c1e614c3ede0e35ab8440f494b65de1b687508ad7a1fbd0a314_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_54ab886b6398c125433185116a2091d3666ac7adffa9351b911c74432a1f2cd0 = $this->env->getExtension("native_profiler");
        $__internal_54ab886b6398c125433185116a2091d3666ac7adffa9351b911c74432a1f2cd0->enter($__internal_54ab886b6398c125433185116a2091d3666ac7adffa9351b911c74432a1f2cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_54ab886b6398c125433185116a2091d3666ac7adffa9351b911c74432a1f2cd0->leave($__internal_54ab886b6398c125433185116a2091d3666ac7adffa9351b911c74432a1f2cd0_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b68e21d45014e6b57ad748fb834b231732f5fbf1cfc5c2a5b83bc2391724d91f = $this->env->getExtension("native_profiler");
        $__internal_b68e21d45014e6b57ad748fb834b231732f5fbf1cfc5c2a5b83bc2391724d91f->enter($__internal_b68e21d45014e6b57ad748fb834b231732f5fbf1cfc5c2a5b83bc2391724d91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b68e21d45014e6b57ad748fb834b231732f5fbf1cfc5c2a5b83bc2391724d91f->leave($__internal_b68e21d45014e6b57ad748fb834b231732f5fbf1cfc5c2a5b83bc2391724d91f_prof);

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
