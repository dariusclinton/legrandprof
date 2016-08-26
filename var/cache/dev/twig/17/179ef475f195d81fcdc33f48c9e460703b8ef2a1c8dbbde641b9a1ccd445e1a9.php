<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_d307a7e90ca6c1741aa1061b2c0fe55a6a6a6aea980e344f340b875383ebb623 extends Twig_Template
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
        $__internal_ab8a0ac58486bdef3125b05e82875617da44c12c5866ce9df05ecd531cb9460a = $this->env->getExtension("native_profiler");
        $__internal_ab8a0ac58486bdef3125b05e82875617da44c12c5866ce9df05ecd531cb9460a->enter($__internal_ab8a0ac58486bdef3125b05e82875617da44c12c5866ce9df05ecd531cb9460a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ab8a0ac58486bdef3125b05e82875617da44c12c5866ce9df05ecd531cb9460a->leave($__internal_ab8a0ac58486bdef3125b05e82875617da44c12c5866ce9df05ecd531cb9460a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_444211165c0edbe514f9c163a61806fedc127e16b8d8a7ff44c1ccc2f596ee54 = $this->env->getExtension("native_profiler");
        $__internal_444211165c0edbe514f9c163a61806fedc127e16b8d8a7ff44c1ccc2f596ee54->enter($__internal_444211165c0edbe514f9c163a61806fedc127e16b8d8a7ff44c1ccc2f596ee54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_444211165c0edbe514f9c163a61806fedc127e16b8d8a7ff44c1ccc2f596ee54->leave($__internal_444211165c0edbe514f9c163a61806fedc127e16b8d8a7ff44c1ccc2f596ee54_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_091916c9d34b7b2048cddb4a7e01f342ee06df41c6a64173fabe3ec252bb761c = $this->env->getExtension("native_profiler");
        $__internal_091916c9d34b7b2048cddb4a7e01f342ee06df41c6a64173fabe3ec252bb761c->enter($__internal_091916c9d34b7b2048cddb4a7e01f342ee06df41c6a64173fabe3ec252bb761c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_091916c9d34b7b2048cddb4a7e01f342ee06df41c6a64173fabe3ec252bb761c->leave($__internal_091916c9d34b7b2048cddb4a7e01f342ee06df41c6a64173fabe3ec252bb761c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f2ed0a2a72975ff95a43a28ac42c18b5d5a522b2d6e6468a3ca51612f38cd62c = $this->env->getExtension("native_profiler");
        $__internal_f2ed0a2a72975ff95a43a28ac42c18b5d5a522b2d6e6468a3ca51612f38cd62c->enter($__internal_f2ed0a2a72975ff95a43a28ac42c18b5d5a522b2d6e6468a3ca51612f38cd62c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f2ed0a2a72975ff95a43a28ac42c18b5d5a522b2d6e6468a3ca51612f38cd62c->leave($__internal_f2ed0a2a72975ff95a43a28ac42c18b5d5a522b2d6e6468a3ca51612f38cd62c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
