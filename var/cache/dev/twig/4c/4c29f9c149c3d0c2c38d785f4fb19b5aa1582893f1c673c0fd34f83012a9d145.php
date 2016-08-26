<?php

/* @LGPUser/Registration/register.html.twig */
class __TwigTemplate_7fee79d169dc4609d180808d7c2a6cdfc7cb7aed15a819309c1b79c098c137b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@LGPUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05443df6034c8d4db799ce994be13efd0b0bd9ac9244b0abc76a08edbf648e6f = $this->env->getExtension("native_profiler");
        $__internal_05443df6034c8d4db799ce994be13efd0b0bd9ac9244b0abc76a08edbf648e6f->enter($__internal_05443df6034c8d4db799ce994be13efd0b0bd9ac9244b0abc76a08edbf648e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05443df6034c8d4db799ce994be13efd0b0bd9ac9244b0abc76a08edbf648e6f->leave($__internal_05443df6034c8d4db799ce994be13efd0b0bd9ac9244b0abc76a08edbf648e6f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_81b505175d76e863f53c10fd300655d538ebc27afbb7ec0a47716c15310b4cd6 = $this->env->getExtension("native_profiler");
        $__internal_81b505175d76e863f53c10fd300655d538ebc27afbb7ec0a47716c15310b4cd6->enter($__internal_81b505175d76e863f53c10fd300655d538ebc27afbb7ec0a47716c15310b4cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "  ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@LGPUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_81b505175d76e863f53c10fd300655d538ebc27afbb7ec0a47716c15310b4cd6->leave($__internal_81b505175d76e863f53c10fd300655d538ebc27afbb7ec0a47716c15310b4cd6_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*   {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
