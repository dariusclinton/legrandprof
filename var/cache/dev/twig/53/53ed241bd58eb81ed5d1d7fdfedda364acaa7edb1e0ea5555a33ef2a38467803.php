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
        $__internal_d41ae83ce5497f7261b322dc9bcc7b44e5e56d25162ce07f1c9baed8e1a164aa = $this->env->getExtension("native_profiler");
        $__internal_d41ae83ce5497f7261b322dc9bcc7b44e5e56d25162ce07f1c9baed8e1a164aa->enter($__internal_d41ae83ce5497f7261b322dc9bcc7b44e5e56d25162ce07f1c9baed8e1a164aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_d41ae83ce5497f7261b322dc9bcc7b44e5e56d25162ce07f1c9baed8e1a164aa->leave($__internal_d41ae83ce5497f7261b322dc9bcc7b44e5e56d25162ce07f1c9baed8e1a164aa_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_de97dde82e5b738cda81ab289c10e1ee02335d3e932e55c9e84a2ec424264468 = $this->env->getExtension("native_profiler");
        $__internal_de97dde82e5b738cda81ab289c10e1ee02335d3e932e55c9e84a2ec424264468->enter($__internal_de97dde82e5b738cda81ab289c10e1ee02335d3e932e55c9e84a2ec424264468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_de97dde82e5b738cda81ab289c10e1ee02335d3e932e55c9e84a2ec424264468->leave($__internal_de97dde82e5b738cda81ab289c10e1ee02335d3e932e55c9e84a2ec424264468_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_205b99a2b8e27e6bf873743d79bff16b27628537d26c4ddd3e2f5a4a9965b755 = $this->env->getExtension("native_profiler");
        $__internal_205b99a2b8e27e6bf873743d79bff16b27628537d26c4ddd3e2f5a4a9965b755->enter($__internal_205b99a2b8e27e6bf873743d79bff16b27628537d26c4ddd3e2f5a4a9965b755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_205b99a2b8e27e6bf873743d79bff16b27628537d26c4ddd3e2f5a4a9965b755->leave($__internal_205b99a2b8e27e6bf873743d79bff16b27628537d26c4ddd3e2f5a4a9965b755_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1cee05cf13b71ee8364a8a7dd5e5492c97a067f2fd008f8c8c9d8ab8fb2ed6ce = $this->env->getExtension("native_profiler");
        $__internal_1cee05cf13b71ee8364a8a7dd5e5492c97a067f2fd008f8c8c9d8ab8fb2ed6ce->enter($__internal_1cee05cf13b71ee8364a8a7dd5e5492c97a067f2fd008f8c8c9d8ab8fb2ed6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1cee05cf13b71ee8364a8a7dd5e5492c97a067f2fd008f8c8c9d8ab8fb2ed6ce->leave($__internal_1cee05cf13b71ee8364a8a7dd5e5492c97a067f2fd008f8c8c9d8ab8fb2ed6ce_prof);

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
