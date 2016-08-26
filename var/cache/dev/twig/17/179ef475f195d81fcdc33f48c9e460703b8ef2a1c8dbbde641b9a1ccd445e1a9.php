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
        $__internal_55b5d883388795b05b653a671e5e4208b08b250b008b25eabda060d114cedb0e = $this->env->getExtension("native_profiler");
        $__internal_55b5d883388795b05b653a671e5e4208b08b250b008b25eabda060d114cedb0e->enter($__internal_55b5d883388795b05b653a671e5e4208b08b250b008b25eabda060d114cedb0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_55b5d883388795b05b653a671e5e4208b08b250b008b25eabda060d114cedb0e->leave($__internal_55b5d883388795b05b653a671e5e4208b08b250b008b25eabda060d114cedb0e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a477901b8a891fd9e1673cd2c48c9e5749b256529d222055798092d2e7e919b1 = $this->env->getExtension("native_profiler");
        $__internal_a477901b8a891fd9e1673cd2c48c9e5749b256529d222055798092d2e7e919b1->enter($__internal_a477901b8a891fd9e1673cd2c48c9e5749b256529d222055798092d2e7e919b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a477901b8a891fd9e1673cd2c48c9e5749b256529d222055798092d2e7e919b1->leave($__internal_a477901b8a891fd9e1673cd2c48c9e5749b256529d222055798092d2e7e919b1_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_10f5e40ff2feb0558a59168b864f547e3463321d8779eb69650100461be31ad0 = $this->env->getExtension("native_profiler");
        $__internal_10f5e40ff2feb0558a59168b864f547e3463321d8779eb69650100461be31ad0->enter($__internal_10f5e40ff2feb0558a59168b864f547e3463321d8779eb69650100461be31ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_10f5e40ff2feb0558a59168b864f547e3463321d8779eb69650100461be31ad0->leave($__internal_10f5e40ff2feb0558a59168b864f547e3463321d8779eb69650100461be31ad0_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e1b47411357d9781c0e3c1cce6470bf4b5acb2d39c3f3d4ca8eb6023f6e5c56f = $this->env->getExtension("native_profiler");
        $__internal_e1b47411357d9781c0e3c1cce6470bf4b5acb2d39c3f3d4ca8eb6023f6e5c56f->enter($__internal_e1b47411357d9781c0e3c1cce6470bf4b5acb2d39c3f3d4ca8eb6023f6e5c56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e1b47411357d9781c0e3c1cce6470bf4b5acb2d39c3f3d4ca8eb6023f6e5c56f->leave($__internal_e1b47411357d9781c0e3c1cce6470bf4b5acb2d39c3f3d4ca8eb6023f6e5c56f_prof);

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
