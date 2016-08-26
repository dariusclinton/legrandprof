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
        $__internal_9153e4fa8de2291d6983fe41e43071c5671363b16ac97f8080dc95bbe31a1fae = $this->env->getExtension("native_profiler");
        $__internal_9153e4fa8de2291d6983fe41e43071c5671363b16ac97f8080dc95bbe31a1fae->enter($__internal_9153e4fa8de2291d6983fe41e43071c5671363b16ac97f8080dc95bbe31a1fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9153e4fa8de2291d6983fe41e43071c5671363b16ac97f8080dc95bbe31a1fae->leave($__internal_9153e4fa8de2291d6983fe41e43071c5671363b16ac97f8080dc95bbe31a1fae_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4ce3001b69a8e60ad5efa692d03af31138dbf2dd9bbb1f1c7140d20dede7979b = $this->env->getExtension("native_profiler");
        $__internal_4ce3001b69a8e60ad5efa692d03af31138dbf2dd9bbb1f1c7140d20dede7979b->enter($__internal_4ce3001b69a8e60ad5efa692d03af31138dbf2dd9bbb1f1c7140d20dede7979b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_4ce3001b69a8e60ad5efa692d03af31138dbf2dd9bbb1f1c7140d20dede7979b->leave($__internal_4ce3001b69a8e60ad5efa692d03af31138dbf2dd9bbb1f1c7140d20dede7979b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f08bec2d8ee7d29e7c296a9cd4c03680ded20c939150b8bc9253e7704d32920f = $this->env->getExtension("native_profiler");
        $__internal_f08bec2d8ee7d29e7c296a9cd4c03680ded20c939150b8bc9253e7704d32920f->enter($__internal_f08bec2d8ee7d29e7c296a9cd4c03680ded20c939150b8bc9253e7704d32920f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f08bec2d8ee7d29e7c296a9cd4c03680ded20c939150b8bc9253e7704d32920f->leave($__internal_f08bec2d8ee7d29e7c296a9cd4c03680ded20c939150b8bc9253e7704d32920f_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_743c65f4b004ff1b4b130a0edfca445f5223bde13edf339ad144bb831e4b7726 = $this->env->getExtension("native_profiler");
        $__internal_743c65f4b004ff1b4b130a0edfca445f5223bde13edf339ad144bb831e4b7726->enter($__internal_743c65f4b004ff1b4b130a0edfca445f5223bde13edf339ad144bb831e4b7726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_743c65f4b004ff1b4b130a0edfca445f5223bde13edf339ad144bb831e4b7726->leave($__internal_743c65f4b004ff1b4b130a0edfca445f5223bde13edf339ad144bb831e4b7726_prof);

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
