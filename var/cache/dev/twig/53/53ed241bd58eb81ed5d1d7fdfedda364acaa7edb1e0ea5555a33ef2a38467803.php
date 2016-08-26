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
        $__internal_922fcabf99b94f62f11e49e93028eec860122d3184813f473aa74cae63f15ad0 = $this->env->getExtension("native_profiler");
        $__internal_922fcabf99b94f62f11e49e93028eec860122d3184813f473aa74cae63f15ad0->enter($__internal_922fcabf99b94f62f11e49e93028eec860122d3184813f473aa74cae63f15ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_922fcabf99b94f62f11e49e93028eec860122d3184813f473aa74cae63f15ad0->leave($__internal_922fcabf99b94f62f11e49e93028eec860122d3184813f473aa74cae63f15ad0_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d211a9d129a612b47001361fd38dd38c5ac9abb0c94f585fde72dad57e302c7c = $this->env->getExtension("native_profiler");
        $__internal_d211a9d129a612b47001361fd38dd38c5ac9abb0c94f585fde72dad57e302c7c->enter($__internal_d211a9d129a612b47001361fd38dd38c5ac9abb0c94f585fde72dad57e302c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_d211a9d129a612b47001361fd38dd38c5ac9abb0c94f585fde72dad57e302c7c->leave($__internal_d211a9d129a612b47001361fd38dd38c5ac9abb0c94f585fde72dad57e302c7c_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_37b3d204b121197c32ebce128f9f58ee06a8760d54b29d6bda2e1a48bb79bc0b = $this->env->getExtension("native_profiler");
        $__internal_37b3d204b121197c32ebce128f9f58ee06a8760d54b29d6bda2e1a48bb79bc0b->enter($__internal_37b3d204b121197c32ebce128f9f58ee06a8760d54b29d6bda2e1a48bb79bc0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_37b3d204b121197c32ebce128f9f58ee06a8760d54b29d6bda2e1a48bb79bc0b->leave($__internal_37b3d204b121197c32ebce128f9f58ee06a8760d54b29d6bda2e1a48bb79bc0b_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_24710c2d3d7ad7c9e8226df3bb9ed66c1042fd106ff3fc277c2a7a7431be60ae = $this->env->getExtension("native_profiler");
        $__internal_24710c2d3d7ad7c9e8226df3bb9ed66c1042fd106ff3fc277c2a7a7431be60ae->enter($__internal_24710c2d3d7ad7c9e8226df3bb9ed66c1042fd106ff3fc277c2a7a7431be60ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_24710c2d3d7ad7c9e8226df3bb9ed66c1042fd106ff3fc277c2a7a7431be60ae->leave($__internal_24710c2d3d7ad7c9e8226df3bb9ed66c1042fd106ff3fc277c2a7a7431be60ae_prof);

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
