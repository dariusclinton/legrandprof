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
        $__internal_c3965f784f3d96cd01bbba2392ada61f3ee61c36e5c4c3917547a32ae11ae556 = $this->env->getExtension("native_profiler");
        $__internal_c3965f784f3d96cd01bbba2392ada61f3ee61c36e5c4c3917547a32ae11ae556->enter($__internal_c3965f784f3d96cd01bbba2392ada61f3ee61c36e5c4c3917547a32ae11ae556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c3965f784f3d96cd01bbba2392ada61f3ee61c36e5c4c3917547a32ae11ae556->leave($__internal_c3965f784f3d96cd01bbba2392ada61f3ee61c36e5c4c3917547a32ae11ae556_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_113572155258725cb5b40b67332df77f2bb7868b6e49d9ce09e2a66330dbb23d = $this->env->getExtension("native_profiler");
        $__internal_113572155258725cb5b40b67332df77f2bb7868b6e49d9ce09e2a66330dbb23d->enter($__internal_113572155258725cb5b40b67332df77f2bb7868b6e49d9ce09e2a66330dbb23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_113572155258725cb5b40b67332df77f2bb7868b6e49d9ce09e2a66330dbb23d->leave($__internal_113572155258725cb5b40b67332df77f2bb7868b6e49d9ce09e2a66330dbb23d_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9c17a32e3c39a0d910665306b210410fc774683898ed81cde9820eeb9966f86b = $this->env->getExtension("native_profiler");
        $__internal_9c17a32e3c39a0d910665306b210410fc774683898ed81cde9820eeb9966f86b->enter($__internal_9c17a32e3c39a0d910665306b210410fc774683898ed81cde9820eeb9966f86b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9c17a32e3c39a0d910665306b210410fc774683898ed81cde9820eeb9966f86b->leave($__internal_9c17a32e3c39a0d910665306b210410fc774683898ed81cde9820eeb9966f86b_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7f41716ed0b545b9c3ea154190eb61e563d830d25efc617d63b7057b0fb8a32a = $this->env->getExtension("native_profiler");
        $__internal_7f41716ed0b545b9c3ea154190eb61e563d830d25efc617d63b7057b0fb8a32a->enter($__internal_7f41716ed0b545b9c3ea154190eb61e563d830d25efc617d63b7057b0fb8a32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7f41716ed0b545b9c3ea154190eb61e563d830d25efc617d63b7057b0fb8a32a->leave($__internal_7f41716ed0b545b9c3ea154190eb61e563d830d25efc617d63b7057b0fb8a32a_prof);

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
