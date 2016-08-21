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
        $__internal_0f082f65ea9ce7c1cd869c70b35676bc7d346ab4cf8316ee429079b4ffe2a082 = $this->env->getExtension("native_profiler");
        $__internal_0f082f65ea9ce7c1cd869c70b35676bc7d346ab4cf8316ee429079b4ffe2a082->enter($__internal_0f082f65ea9ce7c1cd869c70b35676bc7d346ab4cf8316ee429079b4ffe2a082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0f082f65ea9ce7c1cd869c70b35676bc7d346ab4cf8316ee429079b4ffe2a082->leave($__internal_0f082f65ea9ce7c1cd869c70b35676bc7d346ab4cf8316ee429079b4ffe2a082_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2fa78fcd811fbc67277cae1e02ec02aff015af5874af743653b5bbfb3edbf319 = $this->env->getExtension("native_profiler");
        $__internal_2fa78fcd811fbc67277cae1e02ec02aff015af5874af743653b5bbfb3edbf319->enter($__internal_2fa78fcd811fbc67277cae1e02ec02aff015af5874af743653b5bbfb3edbf319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2fa78fcd811fbc67277cae1e02ec02aff015af5874af743653b5bbfb3edbf319->leave($__internal_2fa78fcd811fbc67277cae1e02ec02aff015af5874af743653b5bbfb3edbf319_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_52068cdb44cebd6220d0419b271ebfbd34b914c4ed58ad20f3d8e86efd1ce96c = $this->env->getExtension("native_profiler");
        $__internal_52068cdb44cebd6220d0419b271ebfbd34b914c4ed58ad20f3d8e86efd1ce96c->enter($__internal_52068cdb44cebd6220d0419b271ebfbd34b914c4ed58ad20f3d8e86efd1ce96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_52068cdb44cebd6220d0419b271ebfbd34b914c4ed58ad20f3d8e86efd1ce96c->leave($__internal_52068cdb44cebd6220d0419b271ebfbd34b914c4ed58ad20f3d8e86efd1ce96c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9ade0d3a3f93ede1d195286f8c2b943150aac554dccb7acc73a1353af10e3b38 = $this->env->getExtension("native_profiler");
        $__internal_9ade0d3a3f93ede1d195286f8c2b943150aac554dccb7acc73a1353af10e3b38->enter($__internal_9ade0d3a3f93ede1d195286f8c2b943150aac554dccb7acc73a1353af10e3b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9ade0d3a3f93ede1d195286f8c2b943150aac554dccb7acc73a1353af10e3b38->leave($__internal_9ade0d3a3f93ede1d195286f8c2b943150aac554dccb7acc73a1353af10e3b38_prof);

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
