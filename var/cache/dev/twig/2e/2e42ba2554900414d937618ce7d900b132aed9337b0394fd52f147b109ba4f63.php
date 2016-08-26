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
        $__internal_da7d954cee67eb8679a1d0c858b2cc41d892ba455291988d70379b3dd7f8da5d = $this->env->getExtension("native_profiler");
        $__internal_da7d954cee67eb8679a1d0c858b2cc41d892ba455291988d70379b3dd7f8da5d->enter($__internal_da7d954cee67eb8679a1d0c858b2cc41d892ba455291988d70379b3dd7f8da5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_da7d954cee67eb8679a1d0c858b2cc41d892ba455291988d70379b3dd7f8da5d->leave($__internal_da7d954cee67eb8679a1d0c858b2cc41d892ba455291988d70379b3dd7f8da5d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0ae5e00464266936581814abee77aece541dc2d904d54bf0ddb19f9a9f1d29b2 = $this->env->getExtension("native_profiler");
        $__internal_0ae5e00464266936581814abee77aece541dc2d904d54bf0ddb19f9a9f1d29b2->enter($__internal_0ae5e00464266936581814abee77aece541dc2d904d54bf0ddb19f9a9f1d29b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_0ae5e00464266936581814abee77aece541dc2d904d54bf0ddb19f9a9f1d29b2->leave($__internal_0ae5e00464266936581814abee77aece541dc2d904d54bf0ddb19f9a9f1d29b2_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_86dd268dbc87d3832b1c704c3cccc8915a14a74657eae664c7dac4a4868f8b5e = $this->env->getExtension("native_profiler");
        $__internal_86dd268dbc87d3832b1c704c3cccc8915a14a74657eae664c7dac4a4868f8b5e->enter($__internal_86dd268dbc87d3832b1c704c3cccc8915a14a74657eae664c7dac4a4868f8b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_86dd268dbc87d3832b1c704c3cccc8915a14a74657eae664c7dac4a4868f8b5e->leave($__internal_86dd268dbc87d3832b1c704c3cccc8915a14a74657eae664c7dac4a4868f8b5e_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b20fac468a685aa4c0b4ebff5884c986338f43f4d6f6a8cae9a140db3b715254 = $this->env->getExtension("native_profiler");
        $__internal_b20fac468a685aa4c0b4ebff5884c986338f43f4d6f6a8cae9a140db3b715254->enter($__internal_b20fac468a685aa4c0b4ebff5884c986338f43f4d6f6a8cae9a140db3b715254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b20fac468a685aa4c0b4ebff5884c986338f43f4d6f6a8cae9a140db3b715254->leave($__internal_b20fac468a685aa4c0b4ebff5884c986338f43f4d6f6a8cae9a140db3b715254_prof);

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
