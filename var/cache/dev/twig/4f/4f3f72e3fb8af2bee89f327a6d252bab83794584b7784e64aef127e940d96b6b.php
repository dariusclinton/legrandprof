<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_86a935adb1bdc7f5667babde57bac0c8d0799aa6e744917caae4b9314b8784ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_d9eadee2b5321b200eeac677dba605988f2570e2438542d3a6d90b24bcc522ec = $this->env->getExtension("native_profiler");
        $__internal_d9eadee2b5321b200eeac677dba605988f2570e2438542d3a6d90b24bcc522ec->enter($__internal_d9eadee2b5321b200eeac677dba605988f2570e2438542d3a6d90b24bcc522ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9eadee2b5321b200eeac677dba605988f2570e2438542d3a6d90b24bcc522ec->leave($__internal_d9eadee2b5321b200eeac677dba605988f2570e2438542d3a6d90b24bcc522ec_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0992f7b4464a983c9a69b3f761af11ab97a21326999658dc67202b6e2b09023b = $this->env->getExtension("native_profiler");
        $__internal_0992f7b4464a983c9a69b3f761af11ab97a21326999658dc67202b6e2b09023b->enter($__internal_0992f7b4464a983c9a69b3f761af11ab97a21326999658dc67202b6e2b09023b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_0992f7b4464a983c9a69b3f761af11ab97a21326999658dc67202b6e2b09023b->leave($__internal_0992f7b4464a983c9a69b3f761af11ab97a21326999658dc67202b6e2b09023b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
