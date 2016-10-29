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
        $__internal_becff44157bb5c21b707eeae1fbacacbb7ad34c03955f5efd1bd7b7d18fac275 = $this->env->getExtension("native_profiler");
        $__internal_becff44157bb5c21b707eeae1fbacacbb7ad34c03955f5efd1bd7b7d18fac275->enter($__internal_becff44157bb5c21b707eeae1fbacacbb7ad34c03955f5efd1bd7b7d18fac275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_becff44157bb5c21b707eeae1fbacacbb7ad34c03955f5efd1bd7b7d18fac275->leave($__internal_becff44157bb5c21b707eeae1fbacacbb7ad34c03955f5efd1bd7b7d18fac275_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_96fd07e3c538b8153793212945c809796c75bc9de9258d1b6ca6e772cdce76cc = $this->env->getExtension("native_profiler");
        $__internal_96fd07e3c538b8153793212945c809796c75bc9de9258d1b6ca6e772cdce76cc->enter($__internal_96fd07e3c538b8153793212945c809796c75bc9de9258d1b6ca6e772cdce76cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_96fd07e3c538b8153793212945c809796c75bc9de9258d1b6ca6e772cdce76cc->leave($__internal_96fd07e3c538b8153793212945c809796c75bc9de9258d1b6ca6e772cdce76cc_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b808e0cc82def64918fafb54464c1d70f716adcd712151aadddc7102a0403b92 = $this->env->getExtension("native_profiler");
        $__internal_b808e0cc82def64918fafb54464c1d70f716adcd712151aadddc7102a0403b92->enter($__internal_b808e0cc82def64918fafb54464c1d70f716adcd712151aadddc7102a0403b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b808e0cc82def64918fafb54464c1d70f716adcd712151aadddc7102a0403b92->leave($__internal_b808e0cc82def64918fafb54464c1d70f716adcd712151aadddc7102a0403b92_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7756acd339f5776f9723e9096c0ea9b8ee6bd25db30dbdb1b48ebb24706cdaef = $this->env->getExtension("native_profiler");
        $__internal_7756acd339f5776f9723e9096c0ea9b8ee6bd25db30dbdb1b48ebb24706cdaef->enter($__internal_7756acd339f5776f9723e9096c0ea9b8ee6bd25db30dbdb1b48ebb24706cdaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7756acd339f5776f9723e9096c0ea9b8ee6bd25db30dbdb1b48ebb24706cdaef->leave($__internal_7756acd339f5776f9723e9096c0ea9b8ee6bd25db30dbdb1b48ebb24706cdaef_prof);

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
