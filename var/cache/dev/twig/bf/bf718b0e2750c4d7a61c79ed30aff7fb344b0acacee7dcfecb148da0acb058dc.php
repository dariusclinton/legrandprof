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
        $__internal_b53bbee632e0550e3abb95fbcaf84273af5032cd476be43b43ad0fcbd3eb3d24 = $this->env->getExtension("native_profiler");
        $__internal_b53bbee632e0550e3abb95fbcaf84273af5032cd476be43b43ad0fcbd3eb3d24->enter($__internal_b53bbee632e0550e3abb95fbcaf84273af5032cd476be43b43ad0fcbd3eb3d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b53bbee632e0550e3abb95fbcaf84273af5032cd476be43b43ad0fcbd3eb3d24->leave($__internal_b53bbee632e0550e3abb95fbcaf84273af5032cd476be43b43ad0fcbd3eb3d24_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_953a74f128997aeadaffde3d9f3beb35be638665472a1f2ea4b7d6aa9dc2187e = $this->env->getExtension("native_profiler");
        $__internal_953a74f128997aeadaffde3d9f3beb35be638665472a1f2ea4b7d6aa9dc2187e->enter($__internal_953a74f128997aeadaffde3d9f3beb35be638665472a1f2ea4b7d6aa9dc2187e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_953a74f128997aeadaffde3d9f3beb35be638665472a1f2ea4b7d6aa9dc2187e->leave($__internal_953a74f128997aeadaffde3d9f3beb35be638665472a1f2ea4b7d6aa9dc2187e_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c469149fc73dbbc6815c28a39a2f24e5e0da7a186739bb43b3f67b6824fb14fc = $this->env->getExtension("native_profiler");
        $__internal_c469149fc73dbbc6815c28a39a2f24e5e0da7a186739bb43b3f67b6824fb14fc->enter($__internal_c469149fc73dbbc6815c28a39a2f24e5e0da7a186739bb43b3f67b6824fb14fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c469149fc73dbbc6815c28a39a2f24e5e0da7a186739bb43b3f67b6824fb14fc->leave($__internal_c469149fc73dbbc6815c28a39a2f24e5e0da7a186739bb43b3f67b6824fb14fc_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_464727522cd29c731bbd0c74c6826574a5774e983f4dd30b7beb55be09c49c05 = $this->env->getExtension("native_profiler");
        $__internal_464727522cd29c731bbd0c74c6826574a5774e983f4dd30b7beb55be09c49c05->enter($__internal_464727522cd29c731bbd0c74c6826574a5774e983f4dd30b7beb55be09c49c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_464727522cd29c731bbd0c74c6826574a5774e983f4dd30b7beb55be09c49c05->leave($__internal_464727522cd29c731bbd0c74c6826574a5774e983f4dd30b7beb55be09c49c05_prof);

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
