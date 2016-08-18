<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_93659deeabdab52df81158fdad1a11a2e0484dcef4f91c75406af85b4f10ddb3 extends Twig_Template
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
        $__internal_4e5153ee3cbc9d3512f4f9fac353928e6fb704e4f59c02f50ad79967f9401586 = $this->env->getExtension("native_profiler");
        $__internal_4e5153ee3cbc9d3512f4f9fac353928e6fb704e4f59c02f50ad79967f9401586->enter($__internal_4e5153ee3cbc9d3512f4f9fac353928e6fb704e4f59c02f50ad79967f9401586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4e5153ee3cbc9d3512f4f9fac353928e6fb704e4f59c02f50ad79967f9401586->leave($__internal_4e5153ee3cbc9d3512f4f9fac353928e6fb704e4f59c02f50ad79967f9401586_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3e9227eea221bcde12e7fd409261febc488a0fab05e4dbff34c7de5f6405eb02 = $this->env->getExtension("native_profiler");
        $__internal_3e9227eea221bcde12e7fd409261febc488a0fab05e4dbff34c7de5f6405eb02->enter($__internal_3e9227eea221bcde12e7fd409261febc488a0fab05e4dbff34c7de5f6405eb02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_3e9227eea221bcde12e7fd409261febc488a0fab05e4dbff34c7de5f6405eb02->leave($__internal_3e9227eea221bcde12e7fd409261febc488a0fab05e4dbff34c7de5f6405eb02_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_72e9f45dae5391c2bb01e28d9f83b68d50f5264374a476e105fcdcf198d13c7a = $this->env->getExtension("native_profiler");
        $__internal_72e9f45dae5391c2bb01e28d9f83b68d50f5264374a476e105fcdcf198d13c7a->enter($__internal_72e9f45dae5391c2bb01e28d9f83b68d50f5264374a476e105fcdcf198d13c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_72e9f45dae5391c2bb01e28d9f83b68d50f5264374a476e105fcdcf198d13c7a->leave($__internal_72e9f45dae5391c2bb01e28d9f83b68d50f5264374a476e105fcdcf198d13c7a_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f60b9c2b04beebada9da38726e8c96adc9d4e745cb2a9356478d49b4dca8be79 = $this->env->getExtension("native_profiler");
        $__internal_f60b9c2b04beebada9da38726e8c96adc9d4e745cb2a9356478d49b4dca8be79->enter($__internal_f60b9c2b04beebada9da38726e8c96adc9d4e745cb2a9356478d49b4dca8be79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f60b9c2b04beebada9da38726e8c96adc9d4e745cb2a9356478d49b4dca8be79->leave($__internal_f60b9c2b04beebada9da38726e8c96adc9d4e745cb2a9356478d49b4dca8be79_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
