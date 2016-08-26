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
        $__internal_0955d074fac79a001eafb24171fe7b2b482345a397415f18031f5fd56beed493 = $this->env->getExtension("native_profiler");
        $__internal_0955d074fac79a001eafb24171fe7b2b482345a397415f18031f5fd56beed493->enter($__internal_0955d074fac79a001eafb24171fe7b2b482345a397415f18031f5fd56beed493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0955d074fac79a001eafb24171fe7b2b482345a397415f18031f5fd56beed493->leave($__internal_0955d074fac79a001eafb24171fe7b2b482345a397415f18031f5fd56beed493_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4965e86f508adbbbc1edb5d99d69aab971773937b201af064f827209b7f8f6eb = $this->env->getExtension("native_profiler");
        $__internal_4965e86f508adbbbc1edb5d99d69aab971773937b201af064f827209b7f8f6eb->enter($__internal_4965e86f508adbbbc1edb5d99d69aab971773937b201af064f827209b7f8f6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4965e86f508adbbbc1edb5d99d69aab971773937b201af064f827209b7f8f6eb->leave($__internal_4965e86f508adbbbc1edb5d99d69aab971773937b201af064f827209b7f8f6eb_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b2c950d35c1ac5fb6c611de63f613e631a0176609e2c8f50862bc2f6ca73bebb = $this->env->getExtension("native_profiler");
        $__internal_b2c950d35c1ac5fb6c611de63f613e631a0176609e2c8f50862bc2f6ca73bebb->enter($__internal_b2c950d35c1ac5fb6c611de63f613e631a0176609e2c8f50862bc2f6ca73bebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b2c950d35c1ac5fb6c611de63f613e631a0176609e2c8f50862bc2f6ca73bebb->leave($__internal_b2c950d35c1ac5fb6c611de63f613e631a0176609e2c8f50862bc2f6ca73bebb_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3ec4e6cd844583659a935efc96a794119febfe4ffc8792289b6a59fe6a503fd8 = $this->env->getExtension("native_profiler");
        $__internal_3ec4e6cd844583659a935efc96a794119febfe4ffc8792289b6a59fe6a503fd8->enter($__internal_3ec4e6cd844583659a935efc96a794119febfe4ffc8792289b6a59fe6a503fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3ec4e6cd844583659a935efc96a794119febfe4ffc8792289b6a59fe6a503fd8->leave($__internal_3ec4e6cd844583659a935efc96a794119febfe4ffc8792289b6a59fe6a503fd8_prof);

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
