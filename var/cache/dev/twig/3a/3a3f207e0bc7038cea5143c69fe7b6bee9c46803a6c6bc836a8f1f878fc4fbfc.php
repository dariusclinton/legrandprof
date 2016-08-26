<?php

/* @LGPUser/Registration/email.txt.twig */
class __TwigTemplate_8242e01ba1c1797f041ea9d9850b29640c1c88d11811d64101634708f1d10f78 extends Twig_Template
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
        $__internal_95f7c0e6453d20a6486acc647cf90fe0ccd8e5af5597e554a70cfa0f1ddd5a94 = $this->env->getExtension("native_profiler");
        $__internal_95f7c0e6453d20a6486acc647cf90fe0ccd8e5af5597e554a70cfa0f1ddd5a94->enter($__internal_95f7c0e6453d20a6486acc647cf90fe0ccd8e5af5597e554a70cfa0f1ddd5a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/email.txt.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('subject', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('body_text', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_95f7c0e6453d20a6486acc647cf90fe0ccd8e5af5597e554a70cfa0f1ddd5a94->leave($__internal_95f7c0e6453d20a6486acc647cf90fe0ccd8e5af5597e554a70cfa0f1ddd5a94_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5345837a4ffd4e52833c33e6d22bd565077335f6cd84298d5e1eb3136c2d2348 = $this->env->getExtension("native_profiler");
        $__internal_5345837a4ffd4e52833c33e6d22bd565077335f6cd84298d5e1eb3136c2d2348->enter($__internal_5345837a4ffd4e52833c33e6d22bd565077335f6cd84298d5e1eb3136c2d2348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_5345837a4ffd4e52833c33e6d22bd565077335f6cd84298d5e1eb3136c2d2348->leave($__internal_5345837a4ffd4e52833c33e6d22bd565077335f6cd84298d5e1eb3136c2d2348_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_fc91c9ada8f2465810d99f27b0729499bafa4b6f61207abcbbd0439f671a417a = $this->env->getExtension("native_profiler");
        $__internal_fc91c9ada8f2465810d99f27b0729499bafa4b6f61207abcbbd0439f671a417a->enter($__internal_fc91c9ada8f2465810d99f27b0729499bafa4b6f61207abcbbd0439f671a417a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_fc91c9ada8f2465810d99f27b0729499bafa4b6f61207abcbbd0439f671a417a->leave($__internal_fc91c9ada8f2465810d99f27b0729499bafa4b6f61207abcbbd0439f671a417a_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a7417f86f708698ccef2186d58efb581c07466f7bc68b12e4d7b45bd3ee1e856 = $this->env->getExtension("native_profiler");
        $__internal_a7417f86f708698ccef2186d58efb581c07466f7bc68b12e4d7b45bd3ee1e856->enter($__internal_a7417f86f708698ccef2186d58efb581c07466f7bc68b12e4d7b45bd3ee1e856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a7417f86f708698ccef2186d58efb581c07466f7bc68b12e4d7b45bd3ee1e856->leave($__internal_a7417f86f708698ccef2186d58efb581c07466f7bc68b12e4d7b45bd3ee1e856_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  71 => 11,  69 => 10,  63 => 9,  53 => 5,  51 => 4,  45 => 3,  38 => 15,  35 => 14,  33 => 9,  30 => 8,  28 => 3,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block subject %}*/
/*   {% autoescape false %}*/
/*   {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/*   {% endautoescape %}*/
/* {% endblock %}*/
/* */
/* {% block body_text %}*/
/*   {% autoescape false %}*/
/*   {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/*   {% endautoescape %}*/
/* {% endblock %}*/
/* */
/* {% block body_html %}{% endblock %}*/
/* */
