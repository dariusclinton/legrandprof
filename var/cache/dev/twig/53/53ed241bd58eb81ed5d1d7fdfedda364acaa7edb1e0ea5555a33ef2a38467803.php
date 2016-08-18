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
        $__internal_2a53cb408253a8ee52324e3ea96f0f6592b981bfefb10d31c1f3873462fa5312 = $this->env->getExtension("native_profiler");
        $__internal_2a53cb408253a8ee52324e3ea96f0f6592b981bfefb10d31c1f3873462fa5312->enter($__internal_2a53cb408253a8ee52324e3ea96f0f6592b981bfefb10d31c1f3873462fa5312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_2a53cb408253a8ee52324e3ea96f0f6592b981bfefb10d31c1f3873462fa5312->leave($__internal_2a53cb408253a8ee52324e3ea96f0f6592b981bfefb10d31c1f3873462fa5312_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_059cd29da7db2296f851a1725699513a9a5fd5358de93ca8a400a1ac2c0acb8d = $this->env->getExtension("native_profiler");
        $__internal_059cd29da7db2296f851a1725699513a9a5fd5358de93ca8a400a1ac2c0acb8d->enter($__internal_059cd29da7db2296f851a1725699513a9a5fd5358de93ca8a400a1ac2c0acb8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_059cd29da7db2296f851a1725699513a9a5fd5358de93ca8a400a1ac2c0acb8d->leave($__internal_059cd29da7db2296f851a1725699513a9a5fd5358de93ca8a400a1ac2c0acb8d_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0b144383f4c8a9c7a9a574bf93bd528c336212fa79f4b97d537c897214a99289 = $this->env->getExtension("native_profiler");
        $__internal_0b144383f4c8a9c7a9a574bf93bd528c336212fa79f4b97d537c897214a99289->enter($__internal_0b144383f4c8a9c7a9a574bf93bd528c336212fa79f4b97d537c897214a99289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_0b144383f4c8a9c7a9a574bf93bd528c336212fa79f4b97d537c897214a99289->leave($__internal_0b144383f4c8a9c7a9a574bf93bd528c336212fa79f4b97d537c897214a99289_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_307bb61a8031929657e644faadc667c3298ca2649ff8afd132bd34faabd01d70 = $this->env->getExtension("native_profiler");
        $__internal_307bb61a8031929657e644faadc667c3298ca2649ff8afd132bd34faabd01d70->enter($__internal_307bb61a8031929657e644faadc667c3298ca2649ff8afd132bd34faabd01d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_307bb61a8031929657e644faadc667c3298ca2649ff8afd132bd34faabd01d70->leave($__internal_307bb61a8031929657e644faadc667c3298ca2649ff8afd132bd34faabd01d70_prof);

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
