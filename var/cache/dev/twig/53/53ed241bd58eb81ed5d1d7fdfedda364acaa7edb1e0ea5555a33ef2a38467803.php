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
        $__internal_bbe9caab0f0d2283c6b485d1269d9a93cef1a9588c8523355d883d9ed2d04db0 = $this->env->getExtension("native_profiler");
        $__internal_bbe9caab0f0d2283c6b485d1269d9a93cef1a9588c8523355d883d9ed2d04db0->enter($__internal_bbe9caab0f0d2283c6b485d1269d9a93cef1a9588c8523355d883d9ed2d04db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_bbe9caab0f0d2283c6b485d1269d9a93cef1a9588c8523355d883d9ed2d04db0->leave($__internal_bbe9caab0f0d2283c6b485d1269d9a93cef1a9588c8523355d883d9ed2d04db0_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5a8f1cea78d26584e9fad7cb3800dd156679ac57babda1dab8427ba2d4070500 = $this->env->getExtension("native_profiler");
        $__internal_5a8f1cea78d26584e9fad7cb3800dd156679ac57babda1dab8427ba2d4070500->enter($__internal_5a8f1cea78d26584e9fad7cb3800dd156679ac57babda1dab8427ba2d4070500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_5a8f1cea78d26584e9fad7cb3800dd156679ac57babda1dab8427ba2d4070500->leave($__internal_5a8f1cea78d26584e9fad7cb3800dd156679ac57babda1dab8427ba2d4070500_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9ff17e21c9b13414eab9c41af85fb15b2862a18ae72147975b41dc1a70372104 = $this->env->getExtension("native_profiler");
        $__internal_9ff17e21c9b13414eab9c41af85fb15b2862a18ae72147975b41dc1a70372104->enter($__internal_9ff17e21c9b13414eab9c41af85fb15b2862a18ae72147975b41dc1a70372104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_9ff17e21c9b13414eab9c41af85fb15b2862a18ae72147975b41dc1a70372104->leave($__internal_9ff17e21c9b13414eab9c41af85fb15b2862a18ae72147975b41dc1a70372104_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c2d272034152d99b1944c525ca90394a5ddc208ed1cd129aa78883fd6705f741 = $this->env->getExtension("native_profiler");
        $__internal_c2d272034152d99b1944c525ca90394a5ddc208ed1cd129aa78883fd6705f741->enter($__internal_c2d272034152d99b1944c525ca90394a5ddc208ed1cd129aa78883fd6705f741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c2d272034152d99b1944c525ca90394a5ddc208ed1cd129aa78883fd6705f741->leave($__internal_c2d272034152d99b1944c525ca90394a5ddc208ed1cd129aa78883fd6705f741_prof);

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
