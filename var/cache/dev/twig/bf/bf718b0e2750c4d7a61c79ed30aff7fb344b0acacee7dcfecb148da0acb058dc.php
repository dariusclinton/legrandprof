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
        $__internal_7d3f01bf44d19d634991cc81255752ef5419d7ada8c5948357122a550a7c8087 = $this->env->getExtension("native_profiler");
        $__internal_7d3f01bf44d19d634991cc81255752ef5419d7ada8c5948357122a550a7c8087->enter($__internal_7d3f01bf44d19d634991cc81255752ef5419d7ada8c5948357122a550a7c8087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7d3f01bf44d19d634991cc81255752ef5419d7ada8c5948357122a550a7c8087->leave($__internal_7d3f01bf44d19d634991cc81255752ef5419d7ada8c5948357122a550a7c8087_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_beeb4a451e9245b4e5990a8c82630dcf76b27026d6a055596d4ced4a95e1803f = $this->env->getExtension("native_profiler");
        $__internal_beeb4a451e9245b4e5990a8c82630dcf76b27026d6a055596d4ced4a95e1803f->enter($__internal_beeb4a451e9245b4e5990a8c82630dcf76b27026d6a055596d4ced4a95e1803f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_beeb4a451e9245b4e5990a8c82630dcf76b27026d6a055596d4ced4a95e1803f->leave($__internal_beeb4a451e9245b4e5990a8c82630dcf76b27026d6a055596d4ced4a95e1803f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4f487b74c371378a9426c3662ad02efeab2b0f8b5bc8043d9642aadd5efbe4d9 = $this->env->getExtension("native_profiler");
        $__internal_4f487b74c371378a9426c3662ad02efeab2b0f8b5bc8043d9642aadd5efbe4d9->enter($__internal_4f487b74c371378a9426c3662ad02efeab2b0f8b5bc8043d9642aadd5efbe4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4f487b74c371378a9426c3662ad02efeab2b0f8b5bc8043d9642aadd5efbe4d9->leave($__internal_4f487b74c371378a9426c3662ad02efeab2b0f8b5bc8043d9642aadd5efbe4d9_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_789b35f3a88bbcfd9f97cf60f04b15c7c5ae4e6939de0b094b117a1f5763eb71 = $this->env->getExtension("native_profiler");
        $__internal_789b35f3a88bbcfd9f97cf60f04b15c7c5ae4e6939de0b094b117a1f5763eb71->enter($__internal_789b35f3a88bbcfd9f97cf60f04b15c7c5ae4e6939de0b094b117a1f5763eb71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_789b35f3a88bbcfd9f97cf60f04b15c7c5ae4e6939de0b094b117a1f5763eb71->leave($__internal_789b35f3a88bbcfd9f97cf60f04b15c7c5ae4e6939de0b094b117a1f5763eb71_prof);

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
