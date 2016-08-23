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
        $__internal_498e31399a25c31297044d260082c82d5060ba24e3bbb178d68f2b1b6b69f675 = $this->env->getExtension("native_profiler");
        $__internal_498e31399a25c31297044d260082c82d5060ba24e3bbb178d68f2b1b6b69f675->enter($__internal_498e31399a25c31297044d260082c82d5060ba24e3bbb178d68f2b1b6b69f675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_498e31399a25c31297044d260082c82d5060ba24e3bbb178d68f2b1b6b69f675->leave($__internal_498e31399a25c31297044d260082c82d5060ba24e3bbb178d68f2b1b6b69f675_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a902057f0b41d9ed331d563566552effaadc4ed75fea01f8a5b3092a216aa497 = $this->env->getExtension("native_profiler");
        $__internal_a902057f0b41d9ed331d563566552effaadc4ed75fea01f8a5b3092a216aa497->enter($__internal_a902057f0b41d9ed331d563566552effaadc4ed75fea01f8a5b3092a216aa497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a902057f0b41d9ed331d563566552effaadc4ed75fea01f8a5b3092a216aa497->leave($__internal_a902057f0b41d9ed331d563566552effaadc4ed75fea01f8a5b3092a216aa497_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7b70bf0761acb646f6d84eac0867fdc08bb0bd6da61de152a08d888b7a4687dd = $this->env->getExtension("native_profiler");
        $__internal_7b70bf0761acb646f6d84eac0867fdc08bb0bd6da61de152a08d888b7a4687dd->enter($__internal_7b70bf0761acb646f6d84eac0867fdc08bb0bd6da61de152a08d888b7a4687dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7b70bf0761acb646f6d84eac0867fdc08bb0bd6da61de152a08d888b7a4687dd->leave($__internal_7b70bf0761acb646f6d84eac0867fdc08bb0bd6da61de152a08d888b7a4687dd_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_eaf6e13c632d448cc0dea7b7ae21df60ac137faf7697775300a80e316642e8fa = $this->env->getExtension("native_profiler");
        $__internal_eaf6e13c632d448cc0dea7b7ae21df60ac137faf7697775300a80e316642e8fa->enter($__internal_eaf6e13c632d448cc0dea7b7ae21df60ac137faf7697775300a80e316642e8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_eaf6e13c632d448cc0dea7b7ae21df60ac137faf7697775300a80e316642e8fa->leave($__internal_eaf6e13c632d448cc0dea7b7ae21df60ac137faf7697775300a80e316642e8fa_prof);

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
