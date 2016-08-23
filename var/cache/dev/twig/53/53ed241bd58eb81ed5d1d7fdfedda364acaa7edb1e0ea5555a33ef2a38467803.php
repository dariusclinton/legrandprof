<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_5157624dd1fed23d585bc0aa41f4c2ac82430c0814efc019f571a5c5094b1db1 extends Twig_Template
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
        $__internal_d63fe80ec9e62ca348f14bd52af0c57ffb0e84fd43803230440644c7dddb3b52 = $this->env->getExtension("native_profiler");
        $__internal_d63fe80ec9e62ca348f14bd52af0c57ffb0e84fd43803230440644c7dddb3b52->enter($__internal_d63fe80ec9e62ca348f14bd52af0c57ffb0e84fd43803230440644c7dddb3b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_d63fe80ec9e62ca348f14bd52af0c57ffb0e84fd43803230440644c7dddb3b52->leave($__internal_d63fe80ec9e62ca348f14bd52af0c57ffb0e84fd43803230440644c7dddb3b52_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_13ca87bb0c8d77c2c981ef688d3bd5cfd0d5d5d5c8e999b54750b7ea252ffc5f = $this->env->getExtension("native_profiler");
        $__internal_13ca87bb0c8d77c2c981ef688d3bd5cfd0d5d5d5c8e999b54750b7ea252ffc5f->enter($__internal_13ca87bb0c8d77c2c981ef688d3bd5cfd0d5d5d5c8e999b54750b7ea252ffc5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_13ca87bb0c8d77c2c981ef688d3bd5cfd0d5d5d5c8e999b54750b7ea252ffc5f->leave($__internal_13ca87bb0c8d77c2c981ef688d3bd5cfd0d5d5d5c8e999b54750b7ea252ffc5f_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_25feac43a035d90bb4ba4a0c229df6419e7b47b63a3b8c39c212326d16909eae = $this->env->getExtension("native_profiler");
        $__internal_25feac43a035d90bb4ba4a0c229df6419e7b47b63a3b8c39c212326d16909eae->enter($__internal_25feac43a035d90bb4ba4a0c229df6419e7b47b63a3b8c39c212326d16909eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_25feac43a035d90bb4ba4a0c229df6419e7b47b63a3b8c39c212326d16909eae->leave($__internal_25feac43a035d90bb4ba4a0c229df6419e7b47b63a3b8c39c212326d16909eae_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_53e5bf9d66d80c660e35418029f48cbfe1d8f62603a8837fed10fa9861764cd0 = $this->env->getExtension("native_profiler");
        $__internal_53e5bf9d66d80c660e35418029f48cbfe1d8f62603a8837fed10fa9861764cd0->enter($__internal_53e5bf9d66d80c660e35418029f48cbfe1d8f62603a8837fed10fa9861764cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_53e5bf9d66d80c660e35418029f48cbfe1d8f62603a8837fed10fa9861764cd0->leave($__internal_53e5bf9d66d80c660e35418029f48cbfe1d8f62603a8837fed10fa9861764cd0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
