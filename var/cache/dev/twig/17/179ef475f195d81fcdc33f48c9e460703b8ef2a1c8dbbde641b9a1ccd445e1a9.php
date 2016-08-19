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
        $__internal_574d08fa1192da55a5afbbc1f2c857026dd5a7e745f0d5438cbfedef1b52f1b8 = $this->env->getExtension("native_profiler");
        $__internal_574d08fa1192da55a5afbbc1f2c857026dd5a7e745f0d5438cbfedef1b52f1b8->enter($__internal_574d08fa1192da55a5afbbc1f2c857026dd5a7e745f0d5438cbfedef1b52f1b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_574d08fa1192da55a5afbbc1f2c857026dd5a7e745f0d5438cbfedef1b52f1b8->leave($__internal_574d08fa1192da55a5afbbc1f2c857026dd5a7e745f0d5438cbfedef1b52f1b8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_cf973686e134310ab48d201c6781915475c680b68343a43d810dbb6fcb5139c2 = $this->env->getExtension("native_profiler");
        $__internal_cf973686e134310ab48d201c6781915475c680b68343a43d810dbb6fcb5139c2->enter($__internal_cf973686e134310ab48d201c6781915475c680b68343a43d810dbb6fcb5139c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_cf973686e134310ab48d201c6781915475c680b68343a43d810dbb6fcb5139c2->leave($__internal_cf973686e134310ab48d201c6781915475c680b68343a43d810dbb6fcb5139c2_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_391a43f760b83f64ad88020e28e8a4035b683e6573e4659e5de6eff81bebc4e9 = $this->env->getExtension("native_profiler");
        $__internal_391a43f760b83f64ad88020e28e8a4035b683e6573e4659e5de6eff81bebc4e9->enter($__internal_391a43f760b83f64ad88020e28e8a4035b683e6573e4659e5de6eff81bebc4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_391a43f760b83f64ad88020e28e8a4035b683e6573e4659e5de6eff81bebc4e9->leave($__internal_391a43f760b83f64ad88020e28e8a4035b683e6573e4659e5de6eff81bebc4e9_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_675d15e1797b665c9bdcdaf3953796e9f7e39fcceb0d2c57253d4efe8162f66f = $this->env->getExtension("native_profiler");
        $__internal_675d15e1797b665c9bdcdaf3953796e9f7e39fcceb0d2c57253d4efe8162f66f->enter($__internal_675d15e1797b665c9bdcdaf3953796e9f7e39fcceb0d2c57253d4efe8162f66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_675d15e1797b665c9bdcdaf3953796e9f7e39fcceb0d2c57253d4efe8162f66f->leave($__internal_675d15e1797b665c9bdcdaf3953796e9f7e39fcceb0d2c57253d4efe8162f66f_prof);

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
