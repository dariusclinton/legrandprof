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
        $__internal_6b27be5c78bad498ff9b3c68ff772b4d37347fd6478213fe01d2d401996d5622 = $this->env->getExtension("native_profiler");
        $__internal_6b27be5c78bad498ff9b3c68ff772b4d37347fd6478213fe01d2d401996d5622->enter($__internal_6b27be5c78bad498ff9b3c68ff772b4d37347fd6478213fe01d2d401996d5622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_6b27be5c78bad498ff9b3c68ff772b4d37347fd6478213fe01d2d401996d5622->leave($__internal_6b27be5c78bad498ff9b3c68ff772b4d37347fd6478213fe01d2d401996d5622_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7dcabff15eee25f06b733a4dea5f0fbf6bf51100e82c6f8f8422383b2d762f90 = $this->env->getExtension("native_profiler");
        $__internal_7dcabff15eee25f06b733a4dea5f0fbf6bf51100e82c6f8f8422383b2d762f90->enter($__internal_7dcabff15eee25f06b733a4dea5f0fbf6bf51100e82c6f8f8422383b2d762f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_7dcabff15eee25f06b733a4dea5f0fbf6bf51100e82c6f8f8422383b2d762f90->leave($__internal_7dcabff15eee25f06b733a4dea5f0fbf6bf51100e82c6f8f8422383b2d762f90_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_20fccc6adbb76296f7bd9d25e2fc32fa615858b5916960f235ec3f33e197a017 = $this->env->getExtension("native_profiler");
        $__internal_20fccc6adbb76296f7bd9d25e2fc32fa615858b5916960f235ec3f33e197a017->enter($__internal_20fccc6adbb76296f7bd9d25e2fc32fa615858b5916960f235ec3f33e197a017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_20fccc6adbb76296f7bd9d25e2fc32fa615858b5916960f235ec3f33e197a017->leave($__internal_20fccc6adbb76296f7bd9d25e2fc32fa615858b5916960f235ec3f33e197a017_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b717f9331ddfbdb350fc82837c77eaf7317a4104c920b972cd6b50e196638724 = $this->env->getExtension("native_profiler");
        $__internal_b717f9331ddfbdb350fc82837c77eaf7317a4104c920b972cd6b50e196638724->enter($__internal_b717f9331ddfbdb350fc82837c77eaf7317a4104c920b972cd6b50e196638724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b717f9331ddfbdb350fc82837c77eaf7317a4104c920b972cd6b50e196638724->leave($__internal_b717f9331ddfbdb350fc82837c77eaf7317a4104c920b972cd6b50e196638724_prof);

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
