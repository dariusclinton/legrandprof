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
        $__internal_f2406a0ebe23ac429776fd4973b830c66b367bc4d202429b32e7a583db6da512 = $this->env->getExtension("native_profiler");
        $__internal_f2406a0ebe23ac429776fd4973b830c66b367bc4d202429b32e7a583db6da512->enter($__internal_f2406a0ebe23ac429776fd4973b830c66b367bc4d202429b32e7a583db6da512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f2406a0ebe23ac429776fd4973b830c66b367bc4d202429b32e7a583db6da512->leave($__internal_f2406a0ebe23ac429776fd4973b830c66b367bc4d202429b32e7a583db6da512_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_559ae00e17db283ff76f4a90647852a68c4081a0b8fd9cf0635c9ee1e1c92f98 = $this->env->getExtension("native_profiler");
        $__internal_559ae00e17db283ff76f4a90647852a68c4081a0b8fd9cf0635c9ee1e1c92f98->enter($__internal_559ae00e17db283ff76f4a90647852a68c4081a0b8fd9cf0635c9ee1e1c92f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_559ae00e17db283ff76f4a90647852a68c4081a0b8fd9cf0635c9ee1e1c92f98->leave($__internal_559ae00e17db283ff76f4a90647852a68c4081a0b8fd9cf0635c9ee1e1c92f98_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3e991c04c54fee66177d2da007501000038a8b9f2e9e7de881e3d848e9a2f324 = $this->env->getExtension("native_profiler");
        $__internal_3e991c04c54fee66177d2da007501000038a8b9f2e9e7de881e3d848e9a2f324->enter($__internal_3e991c04c54fee66177d2da007501000038a8b9f2e9e7de881e3d848e9a2f324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3e991c04c54fee66177d2da007501000038a8b9f2e9e7de881e3d848e9a2f324->leave($__internal_3e991c04c54fee66177d2da007501000038a8b9f2e9e7de881e3d848e9a2f324_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d4c1fffd4c6a45f8e3d428d6750d519721c912ca0eeb95820fd5d2a866d0d466 = $this->env->getExtension("native_profiler");
        $__internal_d4c1fffd4c6a45f8e3d428d6750d519721c912ca0eeb95820fd5d2a866d0d466->enter($__internal_d4c1fffd4c6a45f8e3d428d6750d519721c912ca0eeb95820fd5d2a866d0d466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d4c1fffd4c6a45f8e3d428d6750d519721c912ca0eeb95820fd5d2a866d0d466->leave($__internal_d4c1fffd4c6a45f8e3d428d6750d519721c912ca0eeb95820fd5d2a866d0d466_prof);

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
