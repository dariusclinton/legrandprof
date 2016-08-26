<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_f3026d447259f0b4887f80ed7a1c1504af723ce4df8b857e6d798b7566e2fe25 extends Twig_Template
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
        $__internal_9b72268c7731485fca3c2342ba557cc9719d8e77c91a44bf2afadfba70cac3e8 = $this->env->getExtension("native_profiler");
        $__internal_9b72268c7731485fca3c2342ba557cc9719d8e77c91a44bf2afadfba70cac3e8->enter($__internal_9b72268c7731485fca3c2342ba557cc9719d8e77c91a44bf2afadfba70cac3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9b72268c7731485fca3c2342ba557cc9719d8e77c91a44bf2afadfba70cac3e8->leave($__internal_9b72268c7731485fca3c2342ba557cc9719d8e77c91a44bf2afadfba70cac3e8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_cadf106b9c408f98b87cf123ea383cd493acaaca1e2c25435e6f9af872f852b0 = $this->env->getExtension("native_profiler");
        $__internal_cadf106b9c408f98b87cf123ea383cd493acaaca1e2c25435e6f9af872f852b0->enter($__internal_cadf106b9c408f98b87cf123ea383cd493acaaca1e2c25435e6f9af872f852b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_cadf106b9c408f98b87cf123ea383cd493acaaca1e2c25435e6f9af872f852b0->leave($__internal_cadf106b9c408f98b87cf123ea383cd493acaaca1e2c25435e6f9af872f852b0_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_65a0142af7e319bd701bc55fe29d91ff321dbc1a9b0d1bd6fbc22841101de709 = $this->env->getExtension("native_profiler");
        $__internal_65a0142af7e319bd701bc55fe29d91ff321dbc1a9b0d1bd6fbc22841101de709->enter($__internal_65a0142af7e319bd701bc55fe29d91ff321dbc1a9b0d1bd6fbc22841101de709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_65a0142af7e319bd701bc55fe29d91ff321dbc1a9b0d1bd6fbc22841101de709->leave($__internal_65a0142af7e319bd701bc55fe29d91ff321dbc1a9b0d1bd6fbc22841101de709_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7a2298979d1b9bb3b7ebf89d37e62e52e9610bf42d3eadc72e924eb47cebc1dc = $this->env->getExtension("native_profiler");
        $__internal_7a2298979d1b9bb3b7ebf89d37e62e52e9610bf42d3eadc72e924eb47cebc1dc->enter($__internal_7a2298979d1b9bb3b7ebf89d37e62e52e9610bf42d3eadc72e924eb47cebc1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7a2298979d1b9bb3b7ebf89d37e62e52e9610bf42d3eadc72e924eb47cebc1dc->leave($__internal_7a2298979d1b9bb3b7ebf89d37e62e52e9610bf42d3eadc72e924eb47cebc1dc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
