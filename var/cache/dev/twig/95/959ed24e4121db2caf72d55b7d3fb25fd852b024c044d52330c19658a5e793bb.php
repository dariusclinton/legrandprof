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
        $__internal_f8f3a61e226349329ab1ed51e064312bfc858290066da542ecf665d21b65d189 = $this->env->getExtension("native_profiler");
        $__internal_f8f3a61e226349329ab1ed51e064312bfc858290066da542ecf665d21b65d189->enter($__internal_f8f3a61e226349329ab1ed51e064312bfc858290066da542ecf665d21b65d189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f8f3a61e226349329ab1ed51e064312bfc858290066da542ecf665d21b65d189->leave($__internal_f8f3a61e226349329ab1ed51e064312bfc858290066da542ecf665d21b65d189_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f27e3231b764fa5f41cc041f5e7eb1dfed8591e6efe517379e242094415d8b93 = $this->env->getExtension("native_profiler");
        $__internal_f27e3231b764fa5f41cc041f5e7eb1dfed8591e6efe517379e242094415d8b93->enter($__internal_f27e3231b764fa5f41cc041f5e7eb1dfed8591e6efe517379e242094415d8b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_f27e3231b764fa5f41cc041f5e7eb1dfed8591e6efe517379e242094415d8b93->leave($__internal_f27e3231b764fa5f41cc041f5e7eb1dfed8591e6efe517379e242094415d8b93_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1a510d3a6202cdc0ee2642124c775c9d7663083b9ad6a5758061c7b891f9bbc3 = $this->env->getExtension("native_profiler");
        $__internal_1a510d3a6202cdc0ee2642124c775c9d7663083b9ad6a5758061c7b891f9bbc3->enter($__internal_1a510d3a6202cdc0ee2642124c775c9d7663083b9ad6a5758061c7b891f9bbc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1a510d3a6202cdc0ee2642124c775c9d7663083b9ad6a5758061c7b891f9bbc3->leave($__internal_1a510d3a6202cdc0ee2642124c775c9d7663083b9ad6a5758061c7b891f9bbc3_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_102b5fab74b5a292c2031fe3e9eefa296501761a00b54365541508a0b1f96179 = $this->env->getExtension("native_profiler");
        $__internal_102b5fab74b5a292c2031fe3e9eefa296501761a00b54365541508a0b1f96179->enter($__internal_102b5fab74b5a292c2031fe3e9eefa296501761a00b54365541508a0b1f96179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_102b5fab74b5a292c2031fe3e9eefa296501761a00b54365541508a0b1f96179->leave($__internal_102b5fab74b5a292c2031fe3e9eefa296501761a00b54365541508a0b1f96179_prof);

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
