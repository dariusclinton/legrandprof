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
        $__internal_d7e9b9962a7e4fdad149ce77d8eca444244d409dc43aeb0458e7e4bed8435420 = $this->env->getExtension("native_profiler");
        $__internal_d7e9b9962a7e4fdad149ce77d8eca444244d409dc43aeb0458e7e4bed8435420->enter($__internal_d7e9b9962a7e4fdad149ce77d8eca444244d409dc43aeb0458e7e4bed8435420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d7e9b9962a7e4fdad149ce77d8eca444244d409dc43aeb0458e7e4bed8435420->leave($__internal_d7e9b9962a7e4fdad149ce77d8eca444244d409dc43aeb0458e7e4bed8435420_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_91f43cf83c65c82ace87dff741dff5bce6c70efb22a4181d84f539db79aad6ff = $this->env->getExtension("native_profiler");
        $__internal_91f43cf83c65c82ace87dff741dff5bce6c70efb22a4181d84f539db79aad6ff->enter($__internal_91f43cf83c65c82ace87dff741dff5bce6c70efb22a4181d84f539db79aad6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_91f43cf83c65c82ace87dff741dff5bce6c70efb22a4181d84f539db79aad6ff->leave($__internal_91f43cf83c65c82ace87dff741dff5bce6c70efb22a4181d84f539db79aad6ff_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a2e3a13fb05938503a92ee08eff56ba23deffbc14aa879d61f0c1b1d605f0b64 = $this->env->getExtension("native_profiler");
        $__internal_a2e3a13fb05938503a92ee08eff56ba23deffbc14aa879d61f0c1b1d605f0b64->enter($__internal_a2e3a13fb05938503a92ee08eff56ba23deffbc14aa879d61f0c1b1d605f0b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a2e3a13fb05938503a92ee08eff56ba23deffbc14aa879d61f0c1b1d605f0b64->leave($__internal_a2e3a13fb05938503a92ee08eff56ba23deffbc14aa879d61f0c1b1d605f0b64_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_394455c9bcc473a069d2167e7c3978518b6cc45732cf9567455b11ba4c2394b5 = $this->env->getExtension("native_profiler");
        $__internal_394455c9bcc473a069d2167e7c3978518b6cc45732cf9567455b11ba4c2394b5->enter($__internal_394455c9bcc473a069d2167e7c3978518b6cc45732cf9567455b11ba4c2394b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_394455c9bcc473a069d2167e7c3978518b6cc45732cf9567455b11ba4c2394b5->leave($__internal_394455c9bcc473a069d2167e7c3978518b6cc45732cf9567455b11ba4c2394b5_prof);

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
