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
        $__internal_96c8d9393e6c55dbcbf3733bce45c12b0f4fca43687fb553652312cb917b2e1a = $this->env->getExtension("native_profiler");
        $__internal_96c8d9393e6c55dbcbf3733bce45c12b0f4fca43687fb553652312cb917b2e1a->enter($__internal_96c8d9393e6c55dbcbf3733bce45c12b0f4fca43687fb553652312cb917b2e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_96c8d9393e6c55dbcbf3733bce45c12b0f4fca43687fb553652312cb917b2e1a->leave($__internal_96c8d9393e6c55dbcbf3733bce45c12b0f4fca43687fb553652312cb917b2e1a_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e559516b830af68a1ee162d276edcdc60d8f423eeef099412e110fa6e7bc9d0d = $this->env->getExtension("native_profiler");
        $__internal_e559516b830af68a1ee162d276edcdc60d8f423eeef099412e110fa6e7bc9d0d->enter($__internal_e559516b830af68a1ee162d276edcdc60d8f423eeef099412e110fa6e7bc9d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_e559516b830af68a1ee162d276edcdc60d8f423eeef099412e110fa6e7bc9d0d->leave($__internal_e559516b830af68a1ee162d276edcdc60d8f423eeef099412e110fa6e7bc9d0d_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_bc1e2b2b1f02e337068c54ff33f1bd00be5296159e3118d6de01c4415e2529f9 = $this->env->getExtension("native_profiler");
        $__internal_bc1e2b2b1f02e337068c54ff33f1bd00be5296159e3118d6de01c4415e2529f9->enter($__internal_bc1e2b2b1f02e337068c54ff33f1bd00be5296159e3118d6de01c4415e2529f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_bc1e2b2b1f02e337068c54ff33f1bd00be5296159e3118d6de01c4415e2529f9->leave($__internal_bc1e2b2b1f02e337068c54ff33f1bd00be5296159e3118d6de01c4415e2529f9_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_38d651ede49875ccbf1d0b45870468af8014f76fd6747bc80b95d8d9d4b270da = $this->env->getExtension("native_profiler");
        $__internal_38d651ede49875ccbf1d0b45870468af8014f76fd6747bc80b95d8d9d4b270da->enter($__internal_38d651ede49875ccbf1d0b45870468af8014f76fd6747bc80b95d8d9d4b270da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_38d651ede49875ccbf1d0b45870468af8014f76fd6747bc80b95d8d9d4b270da->leave($__internal_38d651ede49875ccbf1d0b45870468af8014f76fd6747bc80b95d8d9d4b270da_prof);

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
