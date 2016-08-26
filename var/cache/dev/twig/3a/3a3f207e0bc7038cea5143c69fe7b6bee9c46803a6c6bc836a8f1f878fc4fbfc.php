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
        $__internal_a3fc9e0f116869ca9d249126e25f2703b33d3e8c0f48137278e6ac08b5f64932 = $this->env->getExtension("native_profiler");
        $__internal_a3fc9e0f116869ca9d249126e25f2703b33d3e8c0f48137278e6ac08b5f64932->enter($__internal_a3fc9e0f116869ca9d249126e25f2703b33d3e8c0f48137278e6ac08b5f64932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/email.txt.twig"));

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
        
        $__internal_a3fc9e0f116869ca9d249126e25f2703b33d3e8c0f48137278e6ac08b5f64932->leave($__internal_a3fc9e0f116869ca9d249126e25f2703b33d3e8c0f48137278e6ac08b5f64932_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2a25079128e4ac76b8149174b69ee13720f814c20854b262f6586cab00134d56 = $this->env->getExtension("native_profiler");
        $__internal_2a25079128e4ac76b8149174b69ee13720f814c20854b262f6586cab00134d56->enter($__internal_2a25079128e4ac76b8149174b69ee13720f814c20854b262f6586cab00134d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_2a25079128e4ac76b8149174b69ee13720f814c20854b262f6586cab00134d56->leave($__internal_2a25079128e4ac76b8149174b69ee13720f814c20854b262f6586cab00134d56_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4b73bf8d32ebbf8af9941741e127af9461c097467c91d6598f8193f248f024e9 = $this->env->getExtension("native_profiler");
        $__internal_4b73bf8d32ebbf8af9941741e127af9461c097467c91d6598f8193f248f024e9->enter($__internal_4b73bf8d32ebbf8af9941741e127af9461c097467c91d6598f8193f248f024e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_4b73bf8d32ebbf8af9941741e127af9461c097467c91d6598f8193f248f024e9->leave($__internal_4b73bf8d32ebbf8af9941741e127af9461c097467c91d6598f8193f248f024e9_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_80180be3040fabfad3c69324209ead4d06e81b87da52fc6747ac093b81744c1d = $this->env->getExtension("native_profiler");
        $__internal_80180be3040fabfad3c69324209ead4d06e81b87da52fc6747ac093b81744c1d->enter($__internal_80180be3040fabfad3c69324209ead4d06e81b87da52fc6747ac093b81744c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_80180be3040fabfad3c69324209ead4d06e81b87da52fc6747ac093b81744c1d->leave($__internal_80180be3040fabfad3c69324209ead4d06e81b87da52fc6747ac093b81744c1d_prof);

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
