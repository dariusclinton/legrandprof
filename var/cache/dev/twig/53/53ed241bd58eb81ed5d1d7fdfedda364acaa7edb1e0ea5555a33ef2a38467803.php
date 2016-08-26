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
        $__internal_97966707daf8333f4592d02583dcae43dc66d8388752d90815e571c1e896476c = $this->env->getExtension("native_profiler");
        $__internal_97966707daf8333f4592d02583dcae43dc66d8388752d90815e571c1e896476c->enter($__internal_97966707daf8333f4592d02583dcae43dc66d8388752d90815e571c1e896476c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_97966707daf8333f4592d02583dcae43dc66d8388752d90815e571c1e896476c->leave($__internal_97966707daf8333f4592d02583dcae43dc66d8388752d90815e571c1e896476c_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_790fe82393a73f9dff009c21dde85154d9f6e6e808ee4c6921b7c83850f58df1 = $this->env->getExtension("native_profiler");
        $__internal_790fe82393a73f9dff009c21dde85154d9f6e6e808ee4c6921b7c83850f58df1->enter($__internal_790fe82393a73f9dff009c21dde85154d9f6e6e808ee4c6921b7c83850f58df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_790fe82393a73f9dff009c21dde85154d9f6e6e808ee4c6921b7c83850f58df1->leave($__internal_790fe82393a73f9dff009c21dde85154d9f6e6e808ee4c6921b7c83850f58df1_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_06dddcd710a89de982b628250f925755c396a69f497c8485454e0670b3c3a67e = $this->env->getExtension("native_profiler");
        $__internal_06dddcd710a89de982b628250f925755c396a69f497c8485454e0670b3c3a67e->enter($__internal_06dddcd710a89de982b628250f925755c396a69f497c8485454e0670b3c3a67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_06dddcd710a89de982b628250f925755c396a69f497c8485454e0670b3c3a67e->leave($__internal_06dddcd710a89de982b628250f925755c396a69f497c8485454e0670b3c3a67e_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3f344b2bc451de3f6be07c0a8aa5715158ac87769caf9337de23399daa43fca1 = $this->env->getExtension("native_profiler");
        $__internal_3f344b2bc451de3f6be07c0a8aa5715158ac87769caf9337de23399daa43fca1->enter($__internal_3f344b2bc451de3f6be07c0a8aa5715158ac87769caf9337de23399daa43fca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3f344b2bc451de3f6be07c0a8aa5715158ac87769caf9337de23399daa43fca1->leave($__internal_3f344b2bc451de3f6be07c0a8aa5715158ac87769caf9337de23399daa43fca1_prof);

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
