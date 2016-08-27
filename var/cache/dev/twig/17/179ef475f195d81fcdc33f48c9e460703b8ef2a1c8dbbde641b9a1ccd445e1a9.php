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
        $__internal_07695ebb5af0d7a50959f774da60e704c4c3deeccc886b062352603ef1e3f1a9 = $this->env->getExtension("native_profiler");
        $__internal_07695ebb5af0d7a50959f774da60e704c4c3deeccc886b062352603ef1e3f1a9->enter($__internal_07695ebb5af0d7a50959f774da60e704c4c3deeccc886b062352603ef1e3f1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_07695ebb5af0d7a50959f774da60e704c4c3deeccc886b062352603ef1e3f1a9->leave($__internal_07695ebb5af0d7a50959f774da60e704c4c3deeccc886b062352603ef1e3f1a9_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8e3edc620f9ace38a1abd146864ae9837b767c864807864367502b102d521931 = $this->env->getExtension("native_profiler");
        $__internal_8e3edc620f9ace38a1abd146864ae9837b767c864807864367502b102d521931->enter($__internal_8e3edc620f9ace38a1abd146864ae9837b767c864807864367502b102d521931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8e3edc620f9ace38a1abd146864ae9837b767c864807864367502b102d521931->leave($__internal_8e3edc620f9ace38a1abd146864ae9837b767c864807864367502b102d521931_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7f13dfeabe111f2fa95acc8a4010517253a4e4f0f7c81ee21f315909ca703024 = $this->env->getExtension("native_profiler");
        $__internal_7f13dfeabe111f2fa95acc8a4010517253a4e4f0f7c81ee21f315909ca703024->enter($__internal_7f13dfeabe111f2fa95acc8a4010517253a4e4f0f7c81ee21f315909ca703024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7f13dfeabe111f2fa95acc8a4010517253a4e4f0f7c81ee21f315909ca703024->leave($__internal_7f13dfeabe111f2fa95acc8a4010517253a4e4f0f7c81ee21f315909ca703024_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f2dc051cf06366ce1230aebce4724a66b8ffacb962a833a88e4fad516a2e3c1f = $this->env->getExtension("native_profiler");
        $__internal_f2dc051cf06366ce1230aebce4724a66b8ffacb962a833a88e4fad516a2e3c1f->enter($__internal_f2dc051cf06366ce1230aebce4724a66b8ffacb962a833a88e4fad516a2e3c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f2dc051cf06366ce1230aebce4724a66b8ffacb962a833a88e4fad516a2e3c1f->leave($__internal_f2dc051cf06366ce1230aebce4724a66b8ffacb962a833a88e4fad516a2e3c1f_prof);

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
