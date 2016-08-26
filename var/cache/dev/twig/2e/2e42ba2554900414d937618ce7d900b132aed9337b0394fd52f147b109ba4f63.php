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
        $__internal_bab1c819922b125e4d1fce754b0b80181c5d7d3ba65a2f45554bbeda6cfd564c = $this->env->getExtension("native_profiler");
        $__internal_bab1c819922b125e4d1fce754b0b80181c5d7d3ba65a2f45554bbeda6cfd564c->enter($__internal_bab1c819922b125e4d1fce754b0b80181c5d7d3ba65a2f45554bbeda6cfd564c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_bab1c819922b125e4d1fce754b0b80181c5d7d3ba65a2f45554bbeda6cfd564c->leave($__internal_bab1c819922b125e4d1fce754b0b80181c5d7d3ba65a2f45554bbeda6cfd564c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b88b6ccde82e24069c7c02da5f9df9abb17d33649ca871bb96e98cc664af4308 = $this->env->getExtension("native_profiler");
        $__internal_b88b6ccde82e24069c7c02da5f9df9abb17d33649ca871bb96e98cc664af4308->enter($__internal_b88b6ccde82e24069c7c02da5f9df9abb17d33649ca871bb96e98cc664af4308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_b88b6ccde82e24069c7c02da5f9df9abb17d33649ca871bb96e98cc664af4308->leave($__internal_b88b6ccde82e24069c7c02da5f9df9abb17d33649ca871bb96e98cc664af4308_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_39e8cf1544d37329c27f10da499dbbdc477639f9247da61584dad03cfab4cd77 = $this->env->getExtension("native_profiler");
        $__internal_39e8cf1544d37329c27f10da499dbbdc477639f9247da61584dad03cfab4cd77->enter($__internal_39e8cf1544d37329c27f10da499dbbdc477639f9247da61584dad03cfab4cd77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_39e8cf1544d37329c27f10da499dbbdc477639f9247da61584dad03cfab4cd77->leave($__internal_39e8cf1544d37329c27f10da499dbbdc477639f9247da61584dad03cfab4cd77_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d7900a38b1e604ff137c6dad9cf55f930334173f0fbf0c387a40e0145ca1c401 = $this->env->getExtension("native_profiler");
        $__internal_d7900a38b1e604ff137c6dad9cf55f930334173f0fbf0c387a40e0145ca1c401->enter($__internal_d7900a38b1e604ff137c6dad9cf55f930334173f0fbf0c387a40e0145ca1c401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d7900a38b1e604ff137c6dad9cf55f930334173f0fbf0c387a40e0145ca1c401->leave($__internal_d7900a38b1e604ff137c6dad9cf55f930334173f0fbf0c387a40e0145ca1c401_prof);

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
