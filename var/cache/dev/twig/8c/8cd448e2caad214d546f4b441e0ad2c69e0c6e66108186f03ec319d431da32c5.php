<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_6369f1369e51652c1c016d94248a533bbf82ee1e71a4a0517d2e3bb33a5975a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_c8b883c5011d8aff95f27fc5fc4f1f3dcecb4ee52a17211a6edb936491ca7aa8 = $this->env->getExtension("native_profiler");
        $__internal_c8b883c5011d8aff95f27fc5fc4f1f3dcecb4ee52a17211a6edb936491ca7aa8->enter($__internal_c8b883c5011d8aff95f27fc5fc4f1f3dcecb4ee52a17211a6edb936491ca7aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8b883c5011d8aff95f27fc5fc4f1f3dcecb4ee52a17211a6edb936491ca7aa8->leave($__internal_c8b883c5011d8aff95f27fc5fc4f1f3dcecb4ee52a17211a6edb936491ca7aa8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_90810ca1b3a41644e009206aa62ad0c867bc0ffa19010b783630d299191ceaca = $this->env->getExtension("native_profiler");
        $__internal_90810ca1b3a41644e009206aa62ad0c867bc0ffa19010b783630d299191ceaca->enter($__internal_90810ca1b3a41644e009206aa62ad0c867bc0ffa19010b783630d299191ceaca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_90810ca1b3a41644e009206aa62ad0c867bc0ffa19010b783630d299191ceaca->leave($__internal_90810ca1b3a41644e009206aa62ad0c867bc0ffa19010b783630d299191ceaca_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
