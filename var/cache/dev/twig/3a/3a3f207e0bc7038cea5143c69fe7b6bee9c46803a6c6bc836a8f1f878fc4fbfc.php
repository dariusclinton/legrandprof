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
        $__internal_9a2f03243a6038c62f9f3566a4d0990edf17b8af9c4960b14e3d2ce671251217 = $this->env->getExtension("native_profiler");
        $__internal_9a2f03243a6038c62f9f3566a4d0990edf17b8af9c4960b14e3d2ce671251217->enter($__internal_9a2f03243a6038c62f9f3566a4d0990edf17b8af9c4960b14e3d2ce671251217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/email.txt.twig"));

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
        
        $__internal_9a2f03243a6038c62f9f3566a4d0990edf17b8af9c4960b14e3d2ce671251217->leave($__internal_9a2f03243a6038c62f9f3566a4d0990edf17b8af9c4960b14e3d2ce671251217_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9658d1fb5cd05310ac0596b3a9904f08d2b8e43f32bad9e812beb76356193454 = $this->env->getExtension("native_profiler");
        $__internal_9658d1fb5cd05310ac0596b3a9904f08d2b8e43f32bad9e812beb76356193454->enter($__internal_9658d1fb5cd05310ac0596b3a9904f08d2b8e43f32bad9e812beb76356193454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_9658d1fb5cd05310ac0596b3a9904f08d2b8e43f32bad9e812beb76356193454->leave($__internal_9658d1fb5cd05310ac0596b3a9904f08d2b8e43f32bad9e812beb76356193454_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3cd24f64236f6acd793446741ccfc6242b81926133c34a064d9bfe8e2fab0a89 = $this->env->getExtension("native_profiler");
        $__internal_3cd24f64236f6acd793446741ccfc6242b81926133c34a064d9bfe8e2fab0a89->enter($__internal_3cd24f64236f6acd793446741ccfc6242b81926133c34a064d9bfe8e2fab0a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_3cd24f64236f6acd793446741ccfc6242b81926133c34a064d9bfe8e2fab0a89->leave($__internal_3cd24f64236f6acd793446741ccfc6242b81926133c34a064d9bfe8e2fab0a89_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_85affbe33a4d859feca071fe8ea509aa268ae589e8b75156428dcf62f381dff1 = $this->env->getExtension("native_profiler");
        $__internal_85affbe33a4d859feca071fe8ea509aa268ae589e8b75156428dcf62f381dff1->enter($__internal_85affbe33a4d859feca071fe8ea509aa268ae589e8b75156428dcf62f381dff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_85affbe33a4d859feca071fe8ea509aa268ae589e8b75156428dcf62f381dff1->leave($__internal_85affbe33a4d859feca071fe8ea509aa268ae589e8b75156428dcf62f381dff1_prof);

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
