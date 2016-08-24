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
        $__internal_891e1fedeb8610a727b35a8124cba9b4f1e4994a158f8b09a20691fa3f30093b = $this->env->getExtension("native_profiler");
        $__internal_891e1fedeb8610a727b35a8124cba9b4f1e4994a158f8b09a20691fa3f30093b->enter($__internal_891e1fedeb8610a727b35a8124cba9b4f1e4994a158f8b09a20691fa3f30093b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/email.txt.twig"));

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
        
        $__internal_891e1fedeb8610a727b35a8124cba9b4f1e4994a158f8b09a20691fa3f30093b->leave($__internal_891e1fedeb8610a727b35a8124cba9b4f1e4994a158f8b09a20691fa3f30093b_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b3c96780f10535e179b3f3b70d3aefae52daaa4abafbb8cfdfe935d286e64022 = $this->env->getExtension("native_profiler");
        $__internal_b3c96780f10535e179b3f3b70d3aefae52daaa4abafbb8cfdfe935d286e64022->enter($__internal_b3c96780f10535e179b3f3b70d3aefae52daaa4abafbb8cfdfe935d286e64022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_b3c96780f10535e179b3f3b70d3aefae52daaa4abafbb8cfdfe935d286e64022->leave($__internal_b3c96780f10535e179b3f3b70d3aefae52daaa4abafbb8cfdfe935d286e64022_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c8078cd2e0f35430f01f94b1d04c9dafada0bccffdcabf3271e81ee5e2626521 = $this->env->getExtension("native_profiler");
        $__internal_c8078cd2e0f35430f01f94b1d04c9dafada0bccffdcabf3271e81ee5e2626521->enter($__internal_c8078cd2e0f35430f01f94b1d04c9dafada0bccffdcabf3271e81ee5e2626521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_c8078cd2e0f35430f01f94b1d04c9dafada0bccffdcabf3271e81ee5e2626521->leave($__internal_c8078cd2e0f35430f01f94b1d04c9dafada0bccffdcabf3271e81ee5e2626521_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_731cfa42491aafc50f0e7f3b5e9bc6a820317547121ab0fae5c6b50a03f520e3 = $this->env->getExtension("native_profiler");
        $__internal_731cfa42491aafc50f0e7f3b5e9bc6a820317547121ab0fae5c6b50a03f520e3->enter($__internal_731cfa42491aafc50f0e7f3b5e9bc6a820317547121ab0fae5c6b50a03f520e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_731cfa42491aafc50f0e7f3b5e9bc6a820317547121ab0fae5c6b50a03f520e3->leave($__internal_731cfa42491aafc50f0e7f3b5e9bc6a820317547121ab0fae5c6b50a03f520e3_prof);

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
