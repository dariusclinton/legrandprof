<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_93659deeabdab52df81158fdad1a11a2e0484dcef4f91c75406af85b4f10ddb3 extends Twig_Template
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
        $__internal_a438bada9f7df61b9b2be9402908d4997c04eccb00605c726bf72fe4a94e5390 = $this->env->getExtension("native_profiler");
        $__internal_a438bada9f7df61b9b2be9402908d4997c04eccb00605c726bf72fe4a94e5390->enter($__internal_a438bada9f7df61b9b2be9402908d4997c04eccb00605c726bf72fe4a94e5390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a438bada9f7df61b9b2be9402908d4997c04eccb00605c726bf72fe4a94e5390->leave($__internal_a438bada9f7df61b9b2be9402908d4997c04eccb00605c726bf72fe4a94e5390_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bb1222b9a02dbb465c617a97ef3ccd3c339aeabbaadcfc2835f87a95121eddd8 = $this->env->getExtension("native_profiler");
        $__internal_bb1222b9a02dbb465c617a97ef3ccd3c339aeabbaadcfc2835f87a95121eddd8->enter($__internal_bb1222b9a02dbb465c617a97ef3ccd3c339aeabbaadcfc2835f87a95121eddd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_bb1222b9a02dbb465c617a97ef3ccd3c339aeabbaadcfc2835f87a95121eddd8->leave($__internal_bb1222b9a02dbb465c617a97ef3ccd3c339aeabbaadcfc2835f87a95121eddd8_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0d05bb9b6ea98f26e2234e0d8ed9371b90fd86c1abf29235309d058ebffa9fff = $this->env->getExtension("native_profiler");
        $__internal_0d05bb9b6ea98f26e2234e0d8ed9371b90fd86c1abf29235309d058ebffa9fff->enter($__internal_0d05bb9b6ea98f26e2234e0d8ed9371b90fd86c1abf29235309d058ebffa9fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0d05bb9b6ea98f26e2234e0d8ed9371b90fd86c1abf29235309d058ebffa9fff->leave($__internal_0d05bb9b6ea98f26e2234e0d8ed9371b90fd86c1abf29235309d058ebffa9fff_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d28660a2576ec0351e6659cdbc793e319731e9d975a2c593b6bba7131f864717 = $this->env->getExtension("native_profiler");
        $__internal_d28660a2576ec0351e6659cdbc793e319731e9d975a2c593b6bba7131f864717->enter($__internal_d28660a2576ec0351e6659cdbc793e319731e9d975a2c593b6bba7131f864717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d28660a2576ec0351e6659cdbc793e319731e9d975a2c593b6bba7131f864717->leave($__internal_d28660a2576ec0351e6659cdbc793e319731e9d975a2c593b6bba7131f864717_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
