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
        $__internal_dc981b54afb2ee01d743147984c81b302338bc68713fd617fea4575b29eb8acb = $this->env->getExtension("native_profiler");
        $__internal_dc981b54afb2ee01d743147984c81b302338bc68713fd617fea4575b29eb8acb->enter($__internal_dc981b54afb2ee01d743147984c81b302338bc68713fd617fea4575b29eb8acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_dc981b54afb2ee01d743147984c81b302338bc68713fd617fea4575b29eb8acb->leave($__internal_dc981b54afb2ee01d743147984c81b302338bc68713fd617fea4575b29eb8acb_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e1ea02f2b88c77a3fb16058efc983932b44508adc64fcbe417e4beedf54c1064 = $this->env->getExtension("native_profiler");
        $__internal_e1ea02f2b88c77a3fb16058efc983932b44508adc64fcbe417e4beedf54c1064->enter($__internal_e1ea02f2b88c77a3fb16058efc983932b44508adc64fcbe417e4beedf54c1064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_e1ea02f2b88c77a3fb16058efc983932b44508adc64fcbe417e4beedf54c1064->leave($__internal_e1ea02f2b88c77a3fb16058efc983932b44508adc64fcbe417e4beedf54c1064_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_efa34f81999f9065ed791da580b514f45fedbeeb6cf6936826225e988655f3a5 = $this->env->getExtension("native_profiler");
        $__internal_efa34f81999f9065ed791da580b514f45fedbeeb6cf6936826225e988655f3a5->enter($__internal_efa34f81999f9065ed791da580b514f45fedbeeb6cf6936826225e988655f3a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_efa34f81999f9065ed791da580b514f45fedbeeb6cf6936826225e988655f3a5->leave($__internal_efa34f81999f9065ed791da580b514f45fedbeeb6cf6936826225e988655f3a5_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e56c92792755bed6de3ca9121a178c7da908ccde179a989d81cd391b70a84595 = $this->env->getExtension("native_profiler");
        $__internal_e56c92792755bed6de3ca9121a178c7da908ccde179a989d81cd391b70a84595->enter($__internal_e56c92792755bed6de3ca9121a178c7da908ccde179a989d81cd391b70a84595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e56c92792755bed6de3ca9121a178c7da908ccde179a989d81cd391b70a84595->leave($__internal_e56c92792755bed6de3ca9121a178c7da908ccde179a989d81cd391b70a84595_prof);

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
