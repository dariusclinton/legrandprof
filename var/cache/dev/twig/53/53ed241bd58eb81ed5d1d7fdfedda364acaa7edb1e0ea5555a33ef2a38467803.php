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
        $__internal_e9949dc781f0d4f75eb3972042b4205c91971fd6ec109b1e64f6c85b2505079b = $this->env->getExtension("native_profiler");
        $__internal_e9949dc781f0d4f75eb3972042b4205c91971fd6ec109b1e64f6c85b2505079b->enter($__internal_e9949dc781f0d4f75eb3972042b4205c91971fd6ec109b1e64f6c85b2505079b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_e9949dc781f0d4f75eb3972042b4205c91971fd6ec109b1e64f6c85b2505079b->leave($__internal_e9949dc781f0d4f75eb3972042b4205c91971fd6ec109b1e64f6c85b2505079b_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_51495a41387bbbfb53d09043893b2aeac01360523dfcc88a72a9d89e7e70e858 = $this->env->getExtension("native_profiler");
        $__internal_51495a41387bbbfb53d09043893b2aeac01360523dfcc88a72a9d89e7e70e858->enter($__internal_51495a41387bbbfb53d09043893b2aeac01360523dfcc88a72a9d89e7e70e858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_51495a41387bbbfb53d09043893b2aeac01360523dfcc88a72a9d89e7e70e858->leave($__internal_51495a41387bbbfb53d09043893b2aeac01360523dfcc88a72a9d89e7e70e858_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_425f226ac48a66887c1bcdc110fe75cab9fe9287b52542c875c8e3d1d76c581c = $this->env->getExtension("native_profiler");
        $__internal_425f226ac48a66887c1bcdc110fe75cab9fe9287b52542c875c8e3d1d76c581c->enter($__internal_425f226ac48a66887c1bcdc110fe75cab9fe9287b52542c875c8e3d1d76c581c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_425f226ac48a66887c1bcdc110fe75cab9fe9287b52542c875c8e3d1d76c581c->leave($__internal_425f226ac48a66887c1bcdc110fe75cab9fe9287b52542c875c8e3d1d76c581c_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8dbf2f9f07cc14fc764fdfcb3850bfe52c808b3dc1891deb365671bcc4192bf7 = $this->env->getExtension("native_profiler");
        $__internal_8dbf2f9f07cc14fc764fdfcb3850bfe52c808b3dc1891deb365671bcc4192bf7->enter($__internal_8dbf2f9f07cc14fc764fdfcb3850bfe52c808b3dc1891deb365671bcc4192bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8dbf2f9f07cc14fc764fdfcb3850bfe52c808b3dc1891deb365671bcc4192bf7->leave($__internal_8dbf2f9f07cc14fc764fdfcb3850bfe52c808b3dc1891deb365671bcc4192bf7_prof);

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
