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
        $__internal_dd4febd9f953ba855c6d865eb153e287817b6141f3cdf8c8cee9bdf7d0c97e34 = $this->env->getExtension("native_profiler");
        $__internal_dd4febd9f953ba855c6d865eb153e287817b6141f3cdf8c8cee9bdf7d0c97e34->enter($__internal_dd4febd9f953ba855c6d865eb153e287817b6141f3cdf8c8cee9bdf7d0c97e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_dd4febd9f953ba855c6d865eb153e287817b6141f3cdf8c8cee9bdf7d0c97e34->leave($__internal_dd4febd9f953ba855c6d865eb153e287817b6141f3cdf8c8cee9bdf7d0c97e34_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a331741f391832c5a15ee5ebbf5f0e00b893a715adfb5e7cd046ef47c101b06b = $this->env->getExtension("native_profiler");
        $__internal_a331741f391832c5a15ee5ebbf5f0e00b893a715adfb5e7cd046ef47c101b06b->enter($__internal_a331741f391832c5a15ee5ebbf5f0e00b893a715adfb5e7cd046ef47c101b06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a331741f391832c5a15ee5ebbf5f0e00b893a715adfb5e7cd046ef47c101b06b->leave($__internal_a331741f391832c5a15ee5ebbf5f0e00b893a715adfb5e7cd046ef47c101b06b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_cf604e0257df2bef65cb3ef893c804574df05d692a2b37e5e0b20afe707045f2 = $this->env->getExtension("native_profiler");
        $__internal_cf604e0257df2bef65cb3ef893c804574df05d692a2b37e5e0b20afe707045f2->enter($__internal_cf604e0257df2bef65cb3ef893c804574df05d692a2b37e5e0b20afe707045f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_cf604e0257df2bef65cb3ef893c804574df05d692a2b37e5e0b20afe707045f2->leave($__internal_cf604e0257df2bef65cb3ef893c804574df05d692a2b37e5e0b20afe707045f2_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_eb28aea053a0613a07efc2983febc283e392613b3c34788b9a28d1ced9a2fd59 = $this->env->getExtension("native_profiler");
        $__internal_eb28aea053a0613a07efc2983febc283e392613b3c34788b9a28d1ced9a2fd59->enter($__internal_eb28aea053a0613a07efc2983febc283e392613b3c34788b9a28d1ced9a2fd59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_eb28aea053a0613a07efc2983febc283e392613b3c34788b9a28d1ced9a2fd59->leave($__internal_eb28aea053a0613a07efc2983febc283e392613b3c34788b9a28d1ced9a2fd59_prof);

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
