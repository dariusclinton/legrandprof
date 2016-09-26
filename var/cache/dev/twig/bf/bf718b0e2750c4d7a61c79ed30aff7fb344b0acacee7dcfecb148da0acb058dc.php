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
        $__internal_6e76e8840d02aab276d8a7389049d9e0532b5266812448100053c09a18912cd2 = $this->env->getExtension("native_profiler");
        $__internal_6e76e8840d02aab276d8a7389049d9e0532b5266812448100053c09a18912cd2->enter($__internal_6e76e8840d02aab276d8a7389049d9e0532b5266812448100053c09a18912cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6e76e8840d02aab276d8a7389049d9e0532b5266812448100053c09a18912cd2->leave($__internal_6e76e8840d02aab276d8a7389049d9e0532b5266812448100053c09a18912cd2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9b47e9c7b9146fd5ae558e749366f3f3b935f7985593040e803807eb0edd526c = $this->env->getExtension("native_profiler");
        $__internal_9b47e9c7b9146fd5ae558e749366f3f3b935f7985593040e803807eb0edd526c->enter($__internal_9b47e9c7b9146fd5ae558e749366f3f3b935f7985593040e803807eb0edd526c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_9b47e9c7b9146fd5ae558e749366f3f3b935f7985593040e803807eb0edd526c->leave($__internal_9b47e9c7b9146fd5ae558e749366f3f3b935f7985593040e803807eb0edd526c_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_bdabbd175a824684b9fad12fec3446942b640ee9fe766ab1673e7b4bae19d1f7 = $this->env->getExtension("native_profiler");
        $__internal_bdabbd175a824684b9fad12fec3446942b640ee9fe766ab1673e7b4bae19d1f7->enter($__internal_bdabbd175a824684b9fad12fec3446942b640ee9fe766ab1673e7b4bae19d1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bdabbd175a824684b9fad12fec3446942b640ee9fe766ab1673e7b4bae19d1f7->leave($__internal_bdabbd175a824684b9fad12fec3446942b640ee9fe766ab1673e7b4bae19d1f7_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2608165b986a68d6f09b41ea4c43688447e67884db53f1913e384ccfb4c48621 = $this->env->getExtension("native_profiler");
        $__internal_2608165b986a68d6f09b41ea4c43688447e67884db53f1913e384ccfb4c48621->enter($__internal_2608165b986a68d6f09b41ea4c43688447e67884db53f1913e384ccfb4c48621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2608165b986a68d6f09b41ea4c43688447e67884db53f1913e384ccfb4c48621->leave($__internal_2608165b986a68d6f09b41ea4c43688447e67884db53f1913e384ccfb4c48621_prof);

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
