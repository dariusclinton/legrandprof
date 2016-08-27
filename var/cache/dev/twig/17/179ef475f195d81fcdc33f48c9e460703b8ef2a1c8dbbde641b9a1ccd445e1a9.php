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
        $__internal_691cfa3fd31848c4bb89b3fd4fec67bd2dde89050e0178deef5765a26f0fc1c1 = $this->env->getExtension("native_profiler");
        $__internal_691cfa3fd31848c4bb89b3fd4fec67bd2dde89050e0178deef5765a26f0fc1c1->enter($__internal_691cfa3fd31848c4bb89b3fd4fec67bd2dde89050e0178deef5765a26f0fc1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_691cfa3fd31848c4bb89b3fd4fec67bd2dde89050e0178deef5765a26f0fc1c1->leave($__internal_691cfa3fd31848c4bb89b3fd4fec67bd2dde89050e0178deef5765a26f0fc1c1_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0d1a0025ff24b305c7b10b2bbe808193dd40a60ec18020eda9e74b64effefdee = $this->env->getExtension("native_profiler");
        $__internal_0d1a0025ff24b305c7b10b2bbe808193dd40a60ec18020eda9e74b64effefdee->enter($__internal_0d1a0025ff24b305c7b10b2bbe808193dd40a60ec18020eda9e74b64effefdee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0d1a0025ff24b305c7b10b2bbe808193dd40a60ec18020eda9e74b64effefdee->leave($__internal_0d1a0025ff24b305c7b10b2bbe808193dd40a60ec18020eda9e74b64effefdee_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ead27fb232f73a9107940a9ed0f7ab46998890cc54e5db2a164046a0ac1360e1 = $this->env->getExtension("native_profiler");
        $__internal_ead27fb232f73a9107940a9ed0f7ab46998890cc54e5db2a164046a0ac1360e1->enter($__internal_ead27fb232f73a9107940a9ed0f7ab46998890cc54e5db2a164046a0ac1360e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ead27fb232f73a9107940a9ed0f7ab46998890cc54e5db2a164046a0ac1360e1->leave($__internal_ead27fb232f73a9107940a9ed0f7ab46998890cc54e5db2a164046a0ac1360e1_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a14e75b5669865c8df20e4866d8b38b54db29969d06772821dc729fcffacb91d = $this->env->getExtension("native_profiler");
        $__internal_a14e75b5669865c8df20e4866d8b38b54db29969d06772821dc729fcffacb91d->enter($__internal_a14e75b5669865c8df20e4866d8b38b54db29969d06772821dc729fcffacb91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a14e75b5669865c8df20e4866d8b38b54db29969d06772821dc729fcffacb91d->leave($__internal_a14e75b5669865c8df20e4866d8b38b54db29969d06772821dc729fcffacb91d_prof);

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
