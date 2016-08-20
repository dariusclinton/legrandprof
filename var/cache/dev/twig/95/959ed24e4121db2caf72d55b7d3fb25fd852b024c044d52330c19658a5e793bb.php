<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_93659deeabdab52df81158fdad1a11a2e0484dcef4f91c75406af85b4f10ddb3 extends Twig_Template
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
        $__internal_c3cfe94dc73628b3ac8cfd60323b558e6a2893ac290543b725c6896bd8cb6cca = $this->env->getExtension("native_profiler");
        $__internal_c3cfe94dc73628b3ac8cfd60323b558e6a2893ac290543b725c6896bd8cb6cca->enter($__internal_c3cfe94dc73628b3ac8cfd60323b558e6a2893ac290543b725c6896bd8cb6cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c3cfe94dc73628b3ac8cfd60323b558e6a2893ac290543b725c6896bd8cb6cca->leave($__internal_c3cfe94dc73628b3ac8cfd60323b558e6a2893ac290543b725c6896bd8cb6cca_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e3ac90d1cd0ebea6627d242aa159c157935e4bb2a5b3bd9acdd0f913f6eee602 = $this->env->getExtension("native_profiler");
        $__internal_e3ac90d1cd0ebea6627d242aa159c157935e4bb2a5b3bd9acdd0f913f6eee602->enter($__internal_e3ac90d1cd0ebea6627d242aa159c157935e4bb2a5b3bd9acdd0f913f6eee602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_e3ac90d1cd0ebea6627d242aa159c157935e4bb2a5b3bd9acdd0f913f6eee602->leave($__internal_e3ac90d1cd0ebea6627d242aa159c157935e4bb2a5b3bd9acdd0f913f6eee602_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2644883d911cc8f65fe0f2fafc58df74a3a8e616aa93e790b707eb4f9fe7d584 = $this->env->getExtension("native_profiler");
        $__internal_2644883d911cc8f65fe0f2fafc58df74a3a8e616aa93e790b707eb4f9fe7d584->enter($__internal_2644883d911cc8f65fe0f2fafc58df74a3a8e616aa93e790b707eb4f9fe7d584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2644883d911cc8f65fe0f2fafc58df74a3a8e616aa93e790b707eb4f9fe7d584->leave($__internal_2644883d911cc8f65fe0f2fafc58df74a3a8e616aa93e790b707eb4f9fe7d584_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_03c719e48a5048780d0cec9eb70f86f28f4b75f0e2520389183684737600be91 = $this->env->getExtension("native_profiler");
        $__internal_03c719e48a5048780d0cec9eb70f86f28f4b75f0e2520389183684737600be91->enter($__internal_03c719e48a5048780d0cec9eb70f86f28f4b75f0e2520389183684737600be91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_03c719e48a5048780d0cec9eb70f86f28f4b75f0e2520389183684737600be91->leave($__internal_03c719e48a5048780d0cec9eb70f86f28f4b75f0e2520389183684737600be91_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
