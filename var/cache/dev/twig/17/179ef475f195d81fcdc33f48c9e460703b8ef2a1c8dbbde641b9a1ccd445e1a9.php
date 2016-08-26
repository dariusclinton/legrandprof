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
        $__internal_2d3344df3f2b89dc9e7fbf8102608fca0b2c8adf3f7cee72f763a63903464b20 = $this->env->getExtension("native_profiler");
        $__internal_2d3344df3f2b89dc9e7fbf8102608fca0b2c8adf3f7cee72f763a63903464b20->enter($__internal_2d3344df3f2b89dc9e7fbf8102608fca0b2c8adf3f7cee72f763a63903464b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2d3344df3f2b89dc9e7fbf8102608fca0b2c8adf3f7cee72f763a63903464b20->leave($__internal_2d3344df3f2b89dc9e7fbf8102608fca0b2c8adf3f7cee72f763a63903464b20_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2bd5c5fea9449fbf2cdd802b1272d0df89805f99d419d30c5daadda4434e3282 = $this->env->getExtension("native_profiler");
        $__internal_2bd5c5fea9449fbf2cdd802b1272d0df89805f99d419d30c5daadda4434e3282->enter($__internal_2bd5c5fea9449fbf2cdd802b1272d0df89805f99d419d30c5daadda4434e3282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2bd5c5fea9449fbf2cdd802b1272d0df89805f99d419d30c5daadda4434e3282->leave($__internal_2bd5c5fea9449fbf2cdd802b1272d0df89805f99d419d30c5daadda4434e3282_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_bb8bc5353e1d1e5cc2db8c22c1f0a5ec4786e6586f3d8cb938b25311c11690fc = $this->env->getExtension("native_profiler");
        $__internal_bb8bc5353e1d1e5cc2db8c22c1f0a5ec4786e6586f3d8cb938b25311c11690fc->enter($__internal_bb8bc5353e1d1e5cc2db8c22c1f0a5ec4786e6586f3d8cb938b25311c11690fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bb8bc5353e1d1e5cc2db8c22c1f0a5ec4786e6586f3d8cb938b25311c11690fc->leave($__internal_bb8bc5353e1d1e5cc2db8c22c1f0a5ec4786e6586f3d8cb938b25311c11690fc_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_72b3192560d74a61006a85f433dffa6a58ab527242781c532e928d352b6d26ec = $this->env->getExtension("native_profiler");
        $__internal_72b3192560d74a61006a85f433dffa6a58ab527242781c532e928d352b6d26ec->enter($__internal_72b3192560d74a61006a85f433dffa6a58ab527242781c532e928d352b6d26ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_72b3192560d74a61006a85f433dffa6a58ab527242781c532e928d352b6d26ec->leave($__internal_72b3192560d74a61006a85f433dffa6a58ab527242781c532e928d352b6d26ec_prof);

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
