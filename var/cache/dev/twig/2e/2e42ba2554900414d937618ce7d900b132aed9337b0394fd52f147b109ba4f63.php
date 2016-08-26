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
        $__internal_9a4215e946e7840826b411cb255fe91014ed905d832f7a5d197979e1533591b4 = $this->env->getExtension("native_profiler");
        $__internal_9a4215e946e7840826b411cb255fe91014ed905d832f7a5d197979e1533591b4->enter($__internal_9a4215e946e7840826b411cb255fe91014ed905d832f7a5d197979e1533591b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9a4215e946e7840826b411cb255fe91014ed905d832f7a5d197979e1533591b4->leave($__internal_9a4215e946e7840826b411cb255fe91014ed905d832f7a5d197979e1533591b4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_09e92238cb62bdbcb54835bb93a52cccaccaee7ac55aab67229b3063366d2238 = $this->env->getExtension("native_profiler");
        $__internal_09e92238cb62bdbcb54835bb93a52cccaccaee7ac55aab67229b3063366d2238->enter($__internal_09e92238cb62bdbcb54835bb93a52cccaccaee7ac55aab67229b3063366d2238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_09e92238cb62bdbcb54835bb93a52cccaccaee7ac55aab67229b3063366d2238->leave($__internal_09e92238cb62bdbcb54835bb93a52cccaccaee7ac55aab67229b3063366d2238_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_453a785ccbb91146f8dac80df9426f95cff89515a437959c2f0e6288a8ef110c = $this->env->getExtension("native_profiler");
        $__internal_453a785ccbb91146f8dac80df9426f95cff89515a437959c2f0e6288a8ef110c->enter($__internal_453a785ccbb91146f8dac80df9426f95cff89515a437959c2f0e6288a8ef110c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_453a785ccbb91146f8dac80df9426f95cff89515a437959c2f0e6288a8ef110c->leave($__internal_453a785ccbb91146f8dac80df9426f95cff89515a437959c2f0e6288a8ef110c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5797576b039d0af1e0f5fea3ccabc2a3affcc6b45bfaac16364ab4771c15bea1 = $this->env->getExtension("native_profiler");
        $__internal_5797576b039d0af1e0f5fea3ccabc2a3affcc6b45bfaac16364ab4771c15bea1->enter($__internal_5797576b039d0af1e0f5fea3ccabc2a3affcc6b45bfaac16364ab4771c15bea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5797576b039d0af1e0f5fea3ccabc2a3affcc6b45bfaac16364ab4771c15bea1->leave($__internal_5797576b039d0af1e0f5fea3ccabc2a3affcc6b45bfaac16364ab4771c15bea1_prof);

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
