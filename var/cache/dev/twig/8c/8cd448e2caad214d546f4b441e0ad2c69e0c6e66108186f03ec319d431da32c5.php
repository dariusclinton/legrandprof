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
        $__internal_82d4007c5423dffb0434c960a3ae424b61ce0044e1a8581295c4bea5a9435463 = $this->env->getExtension("native_profiler");
        $__internal_82d4007c5423dffb0434c960a3ae424b61ce0044e1a8581295c4bea5a9435463->enter($__internal_82d4007c5423dffb0434c960a3ae424b61ce0044e1a8581295c4bea5a9435463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82d4007c5423dffb0434c960a3ae424b61ce0044e1a8581295c4bea5a9435463->leave($__internal_82d4007c5423dffb0434c960a3ae424b61ce0044e1a8581295c4bea5a9435463_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c9a3b623e92ae8550407dd66ba4d9c775d785354e3ba2a86fa527da05e1d7ae9 = $this->env->getExtension("native_profiler");
        $__internal_c9a3b623e92ae8550407dd66ba4d9c775d785354e3ba2a86fa527da05e1d7ae9->enter($__internal_c9a3b623e92ae8550407dd66ba4d9c775d785354e3ba2a86fa527da05e1d7ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_c9a3b623e92ae8550407dd66ba4d9c775d785354e3ba2a86fa527da05e1d7ae9->leave($__internal_c9a3b623e92ae8550407dd66ba4d9c775d785354e3ba2a86fa527da05e1d7ae9_prof);

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
