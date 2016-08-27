<?php

/* @LGPUser/Registration/email.txt.twig */
class __TwigTemplate_8242e01ba1c1797f041ea9d9850b29640c1c88d11811d64101634708f1d10f78 extends Twig_Template
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
        $__internal_242ab320b8b44979f03d3bb2ccc8a4d5f7bbcda32fd2e996736e2af311cbc5ac = $this->env->getExtension("native_profiler");
        $__internal_242ab320b8b44979f03d3bb2ccc8a4d5f7bbcda32fd2e996736e2af311cbc5ac->enter($__internal_242ab320b8b44979f03d3bb2ccc8a4d5f7bbcda32fd2e996736e2af311cbc5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/email.txt.twig"));

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
        
        $__internal_242ab320b8b44979f03d3bb2ccc8a4d5f7bbcda32fd2e996736e2af311cbc5ac->leave($__internal_242ab320b8b44979f03d3bb2ccc8a4d5f7bbcda32fd2e996736e2af311cbc5ac_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_dc95db7d1aafca4a6d69f402f40376876fc2fba8bb6fc50a93d249d87934de1f = $this->env->getExtension("native_profiler");
        $__internal_dc95db7d1aafca4a6d69f402f40376876fc2fba8bb6fc50a93d249d87934de1f->enter($__internal_dc95db7d1aafca4a6d69f402f40376876fc2fba8bb6fc50a93d249d87934de1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_dc95db7d1aafca4a6d69f402f40376876fc2fba8bb6fc50a93d249d87934de1f->leave($__internal_dc95db7d1aafca4a6d69f402f40376876fc2fba8bb6fc50a93d249d87934de1f_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0d30d63f6ed71fdbe671a094e572348ce7699f61c385aa14250bbea34e5daa0d = $this->env->getExtension("native_profiler");
        $__internal_0d30d63f6ed71fdbe671a094e572348ce7699f61c385aa14250bbea34e5daa0d->enter($__internal_0d30d63f6ed71fdbe671a094e572348ce7699f61c385aa14250bbea34e5daa0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_0d30d63f6ed71fdbe671a094e572348ce7699f61c385aa14250bbea34e5daa0d->leave($__internal_0d30d63f6ed71fdbe671a094e572348ce7699f61c385aa14250bbea34e5daa0d_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_fea003556be996a95f0495569b177612cfde2e7442de09c3ea7777fab7d1f1de = $this->env->getExtension("native_profiler");
        $__internal_fea003556be996a95f0495569b177612cfde2e7442de09c3ea7777fab7d1f1de->enter($__internal_fea003556be996a95f0495569b177612cfde2e7442de09c3ea7777fab7d1f1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_fea003556be996a95f0495569b177612cfde2e7442de09c3ea7777fab7d1f1de->leave($__internal_fea003556be996a95f0495569b177612cfde2e7442de09c3ea7777fab7d1f1de_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Registration/email.txt.twig";
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
