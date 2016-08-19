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
        $__internal_172b3e1e36824ce0db137ae3c1b93009240be1365d42c448db560c70b328ef94 = $this->env->getExtension("native_profiler");
        $__internal_172b3e1e36824ce0db137ae3c1b93009240be1365d42c448db560c70b328ef94->enter($__internal_172b3e1e36824ce0db137ae3c1b93009240be1365d42c448db560c70b328ef94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_172b3e1e36824ce0db137ae3c1b93009240be1365d42c448db560c70b328ef94->leave($__internal_172b3e1e36824ce0db137ae3c1b93009240be1365d42c448db560c70b328ef94_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_adc085f5d1da31d0923a685642ca0f253253527cdf1d9c3fdb266e24cdfa39e6 = $this->env->getExtension("native_profiler");
        $__internal_adc085f5d1da31d0923a685642ca0f253253527cdf1d9c3fdb266e24cdfa39e6->enter($__internal_adc085f5d1da31d0923a685642ca0f253253527cdf1d9c3fdb266e24cdfa39e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_adc085f5d1da31d0923a685642ca0f253253527cdf1d9c3fdb266e24cdfa39e6->leave($__internal_adc085f5d1da31d0923a685642ca0f253253527cdf1d9c3fdb266e24cdfa39e6_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0c75a9440dae81916f86d810a1c2c0859b7e6015f70940e6a793d7cc58d718ef = $this->env->getExtension("native_profiler");
        $__internal_0c75a9440dae81916f86d810a1c2c0859b7e6015f70940e6a793d7cc58d718ef->enter($__internal_0c75a9440dae81916f86d810a1c2c0859b7e6015f70940e6a793d7cc58d718ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_0c75a9440dae81916f86d810a1c2c0859b7e6015f70940e6a793d7cc58d718ef->leave($__internal_0c75a9440dae81916f86d810a1c2c0859b7e6015f70940e6a793d7cc58d718ef_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1cd86b6d26a5440257f51a48983eb07c8a70dab8882fd277ebfe7958f042d19e = $this->env->getExtension("native_profiler");
        $__internal_1cd86b6d26a5440257f51a48983eb07c8a70dab8882fd277ebfe7958f042d19e->enter($__internal_1cd86b6d26a5440257f51a48983eb07c8a70dab8882fd277ebfe7958f042d19e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1cd86b6d26a5440257f51a48983eb07c8a70dab8882fd277ebfe7958f042d19e->leave($__internal_1cd86b6d26a5440257f51a48983eb07c8a70dab8882fd277ebfe7958f042d19e_prof);

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
