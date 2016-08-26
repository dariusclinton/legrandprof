<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_f3026d447259f0b4887f80ed7a1c1504af723ce4df8b857e6d798b7566e2fe25 extends Twig_Template
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
        $__internal_ddb322d57cf6375743bdd4079783dc64e6cd55f0141f4ca7de2f4a4b97d73d49 = $this->env->getExtension("native_profiler");
        $__internal_ddb322d57cf6375743bdd4079783dc64e6cd55f0141f4ca7de2f4a4b97d73d49->enter($__internal_ddb322d57cf6375743bdd4079783dc64e6cd55f0141f4ca7de2f4a4b97d73d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ddb322d57cf6375743bdd4079783dc64e6cd55f0141f4ca7de2f4a4b97d73d49->leave($__internal_ddb322d57cf6375743bdd4079783dc64e6cd55f0141f4ca7de2f4a4b97d73d49_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_68bf60ffa29429e651a9114c03e86567b6e0e097c4d9435a8d7157681f96c08e = $this->env->getExtension("native_profiler");
        $__internal_68bf60ffa29429e651a9114c03e86567b6e0e097c4d9435a8d7157681f96c08e->enter($__internal_68bf60ffa29429e651a9114c03e86567b6e0e097c4d9435a8d7157681f96c08e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_68bf60ffa29429e651a9114c03e86567b6e0e097c4d9435a8d7157681f96c08e->leave($__internal_68bf60ffa29429e651a9114c03e86567b6e0e097c4d9435a8d7157681f96c08e_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_13733f919605d579a76536c8339ba66d817a8418683e69d245dedd19b33f5b79 = $this->env->getExtension("native_profiler");
        $__internal_13733f919605d579a76536c8339ba66d817a8418683e69d245dedd19b33f5b79->enter($__internal_13733f919605d579a76536c8339ba66d817a8418683e69d245dedd19b33f5b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_13733f919605d579a76536c8339ba66d817a8418683e69d245dedd19b33f5b79->leave($__internal_13733f919605d579a76536c8339ba66d817a8418683e69d245dedd19b33f5b79_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b27549d0dbea1a1949d368ab46c86e2d3499d0c86846c0df04e61ca2c5eab39e = $this->env->getExtension("native_profiler");
        $__internal_b27549d0dbea1a1949d368ab46c86e2d3499d0c86846c0df04e61ca2c5eab39e->enter($__internal_b27549d0dbea1a1949d368ab46c86e2d3499d0c86846c0df04e61ca2c5eab39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b27549d0dbea1a1949d368ab46c86e2d3499d0c86846c0df04e61ca2c5eab39e->leave($__internal_b27549d0dbea1a1949d368ab46c86e2d3499d0c86846c0df04e61ca2c5eab39e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
