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
        $__internal_bc1a3cba82b096ff81c31db95580537e187ddd8919c7ea675935bfc8dc46c48f = $this->env->getExtension("native_profiler");
        $__internal_bc1a3cba82b096ff81c31db95580537e187ddd8919c7ea675935bfc8dc46c48f->enter($__internal_bc1a3cba82b096ff81c31db95580537e187ddd8919c7ea675935bfc8dc46c48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_bc1a3cba82b096ff81c31db95580537e187ddd8919c7ea675935bfc8dc46c48f->leave($__internal_bc1a3cba82b096ff81c31db95580537e187ddd8919c7ea675935bfc8dc46c48f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d5b064cde6694c428addc0cdb97492151848e329b1cda857b701b151c3fc2be1 = $this->env->getExtension("native_profiler");
        $__internal_d5b064cde6694c428addc0cdb97492151848e329b1cda857b701b151c3fc2be1->enter($__internal_d5b064cde6694c428addc0cdb97492151848e329b1cda857b701b151c3fc2be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d5b064cde6694c428addc0cdb97492151848e329b1cda857b701b151c3fc2be1->leave($__internal_d5b064cde6694c428addc0cdb97492151848e329b1cda857b701b151c3fc2be1_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_716fa86c9e7af7e64acf0c45b4106e29135ecf13d8760f4f2f7fe415e65222e0 = $this->env->getExtension("native_profiler");
        $__internal_716fa86c9e7af7e64acf0c45b4106e29135ecf13d8760f4f2f7fe415e65222e0->enter($__internal_716fa86c9e7af7e64acf0c45b4106e29135ecf13d8760f4f2f7fe415e65222e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_716fa86c9e7af7e64acf0c45b4106e29135ecf13d8760f4f2f7fe415e65222e0->leave($__internal_716fa86c9e7af7e64acf0c45b4106e29135ecf13d8760f4f2f7fe415e65222e0_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b5bdfcd9c355c69cc45875c7c5b8125b1f80f138b0feaa54f187de69c91eab58 = $this->env->getExtension("native_profiler");
        $__internal_b5bdfcd9c355c69cc45875c7c5b8125b1f80f138b0feaa54f187de69c91eab58->enter($__internal_b5bdfcd9c355c69cc45875c7c5b8125b1f80f138b0feaa54f187de69c91eab58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b5bdfcd9c355c69cc45875c7c5b8125b1f80f138b0feaa54f187de69c91eab58->leave($__internal_b5bdfcd9c355c69cc45875c7c5b8125b1f80f138b0feaa54f187de69c91eab58_prof);

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
