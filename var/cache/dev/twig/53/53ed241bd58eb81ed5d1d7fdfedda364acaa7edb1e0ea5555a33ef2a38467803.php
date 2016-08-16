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
        $__internal_6d9faf024e8e9d0a18f6d441bbcd041ccde95ab6943314deaa018333e48a3b7d = $this->env->getExtension("native_profiler");
        $__internal_6d9faf024e8e9d0a18f6d441bbcd041ccde95ab6943314deaa018333e48a3b7d->enter($__internal_6d9faf024e8e9d0a18f6d441bbcd041ccde95ab6943314deaa018333e48a3b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_6d9faf024e8e9d0a18f6d441bbcd041ccde95ab6943314deaa018333e48a3b7d->leave($__internal_6d9faf024e8e9d0a18f6d441bbcd041ccde95ab6943314deaa018333e48a3b7d_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8e050402e10de80add7961641f32d2085c14c9e9f9d78d77cbae4a32650a5ba8 = $this->env->getExtension("native_profiler");
        $__internal_8e050402e10de80add7961641f32d2085c14c9e9f9d78d77cbae4a32650a5ba8->enter($__internal_8e050402e10de80add7961641f32d2085c14c9e9f9d78d77cbae4a32650a5ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_8e050402e10de80add7961641f32d2085c14c9e9f9d78d77cbae4a32650a5ba8->leave($__internal_8e050402e10de80add7961641f32d2085c14c9e9f9d78d77cbae4a32650a5ba8_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_cab43f1f69fef3dcb78976f3085eb902cd0aefbf3c06a7bacdcd040fd27ecad7 = $this->env->getExtension("native_profiler");
        $__internal_cab43f1f69fef3dcb78976f3085eb902cd0aefbf3c06a7bacdcd040fd27ecad7->enter($__internal_cab43f1f69fef3dcb78976f3085eb902cd0aefbf3c06a7bacdcd040fd27ecad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_cab43f1f69fef3dcb78976f3085eb902cd0aefbf3c06a7bacdcd040fd27ecad7->leave($__internal_cab43f1f69fef3dcb78976f3085eb902cd0aefbf3c06a7bacdcd040fd27ecad7_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_dc648fec4ead827b4c3aea8275db09d5832df94a9bb61ff1c309bb0050446769 = $this->env->getExtension("native_profiler");
        $__internal_dc648fec4ead827b4c3aea8275db09d5832df94a9bb61ff1c309bb0050446769->enter($__internal_dc648fec4ead827b4c3aea8275db09d5832df94a9bb61ff1c309bb0050446769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_dc648fec4ead827b4c3aea8275db09d5832df94a9bb61ff1c309bb0050446769->leave($__internal_dc648fec4ead827b4c3aea8275db09d5832df94a9bb61ff1c309bb0050446769_prof);

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
