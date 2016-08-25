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
        $__internal_2554ec8d5772bccab367a526f01f5af6e8140fb54bfb77385e0dc946f55ba6cb = $this->env->getExtension("native_profiler");
        $__internal_2554ec8d5772bccab367a526f01f5af6e8140fb54bfb77385e0dc946f55ba6cb->enter($__internal_2554ec8d5772bccab367a526f01f5af6e8140fb54bfb77385e0dc946f55ba6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2554ec8d5772bccab367a526f01f5af6e8140fb54bfb77385e0dc946f55ba6cb->leave($__internal_2554ec8d5772bccab367a526f01f5af6e8140fb54bfb77385e0dc946f55ba6cb_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9ca891a5f5b8a14f64577f8938448bfc157eda5762667e89ca115a485db9fb4a = $this->env->getExtension("native_profiler");
        $__internal_9ca891a5f5b8a14f64577f8938448bfc157eda5762667e89ca115a485db9fb4a->enter($__internal_9ca891a5f5b8a14f64577f8938448bfc157eda5762667e89ca115a485db9fb4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9ca891a5f5b8a14f64577f8938448bfc157eda5762667e89ca115a485db9fb4a->leave($__internal_9ca891a5f5b8a14f64577f8938448bfc157eda5762667e89ca115a485db9fb4a_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8bda69dc792927cb9ec8e631ac0c22fdbde67ea70dc2bd15d3d60d4972f1e4a5 = $this->env->getExtension("native_profiler");
        $__internal_8bda69dc792927cb9ec8e631ac0c22fdbde67ea70dc2bd15d3d60d4972f1e4a5->enter($__internal_8bda69dc792927cb9ec8e631ac0c22fdbde67ea70dc2bd15d3d60d4972f1e4a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8bda69dc792927cb9ec8e631ac0c22fdbde67ea70dc2bd15d3d60d4972f1e4a5->leave($__internal_8bda69dc792927cb9ec8e631ac0c22fdbde67ea70dc2bd15d3d60d4972f1e4a5_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5a2889992b368e1a12d49ec5014244fe81be83cda15ee747a132b5768d063ee4 = $this->env->getExtension("native_profiler");
        $__internal_5a2889992b368e1a12d49ec5014244fe81be83cda15ee747a132b5768d063ee4->enter($__internal_5a2889992b368e1a12d49ec5014244fe81be83cda15ee747a132b5768d063ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5a2889992b368e1a12d49ec5014244fe81be83cda15ee747a132b5768d063ee4->leave($__internal_5a2889992b368e1a12d49ec5014244fe81be83cda15ee747a132b5768d063ee4_prof);

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
