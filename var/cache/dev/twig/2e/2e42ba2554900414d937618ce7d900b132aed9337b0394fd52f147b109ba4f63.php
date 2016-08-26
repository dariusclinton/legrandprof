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
        $__internal_67a9896a9d6c02696e3dbae8880ef38c84f2afc42cf4730f061eaa6bd4e9d1c6 = $this->env->getExtension("native_profiler");
        $__internal_67a9896a9d6c02696e3dbae8880ef38c84f2afc42cf4730f061eaa6bd4e9d1c6->enter($__internal_67a9896a9d6c02696e3dbae8880ef38c84f2afc42cf4730f061eaa6bd4e9d1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_67a9896a9d6c02696e3dbae8880ef38c84f2afc42cf4730f061eaa6bd4e9d1c6->leave($__internal_67a9896a9d6c02696e3dbae8880ef38c84f2afc42cf4730f061eaa6bd4e9d1c6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1b785a99acc5f664ed6cdca230cd601ce2a7d15a367bd35d07c46f988907f09c = $this->env->getExtension("native_profiler");
        $__internal_1b785a99acc5f664ed6cdca230cd601ce2a7d15a367bd35d07c46f988907f09c->enter($__internal_1b785a99acc5f664ed6cdca230cd601ce2a7d15a367bd35d07c46f988907f09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_1b785a99acc5f664ed6cdca230cd601ce2a7d15a367bd35d07c46f988907f09c->leave($__internal_1b785a99acc5f664ed6cdca230cd601ce2a7d15a367bd35d07c46f988907f09c_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6ad2d47e8eeb8ebc350d75cce89926febe26928f11f001d0aaf211cba83c605b = $this->env->getExtension("native_profiler");
        $__internal_6ad2d47e8eeb8ebc350d75cce89926febe26928f11f001d0aaf211cba83c605b->enter($__internal_6ad2d47e8eeb8ebc350d75cce89926febe26928f11f001d0aaf211cba83c605b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6ad2d47e8eeb8ebc350d75cce89926febe26928f11f001d0aaf211cba83c605b->leave($__internal_6ad2d47e8eeb8ebc350d75cce89926febe26928f11f001d0aaf211cba83c605b_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_72294058b1961887cbe4d851808744e2618a3619071dd3006d3ea75cbeae9898 = $this->env->getExtension("native_profiler");
        $__internal_72294058b1961887cbe4d851808744e2618a3619071dd3006d3ea75cbeae9898->enter($__internal_72294058b1961887cbe4d851808744e2618a3619071dd3006d3ea75cbeae9898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_72294058b1961887cbe4d851808744e2618a3619071dd3006d3ea75cbeae9898->leave($__internal_72294058b1961887cbe4d851808744e2618a3619071dd3006d3ea75cbeae9898_prof);

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
