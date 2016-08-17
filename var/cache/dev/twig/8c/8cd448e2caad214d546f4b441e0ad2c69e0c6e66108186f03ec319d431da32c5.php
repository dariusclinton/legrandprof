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
        $__internal_2f6469ad9e9324fcf78e82f3b2f2f8004af403376d16692b28410b2b5b700f8b = $this->env->getExtension("native_profiler");
        $__internal_2f6469ad9e9324fcf78e82f3b2f2f8004af403376d16692b28410b2b5b700f8b->enter($__internal_2f6469ad9e9324fcf78e82f3b2f2f8004af403376d16692b28410b2b5b700f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f6469ad9e9324fcf78e82f3b2f2f8004af403376d16692b28410b2b5b700f8b->leave($__internal_2f6469ad9e9324fcf78e82f3b2f2f8004af403376d16692b28410b2b5b700f8b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_97856dfa384c17389cb9281d23ab38c8d0504685a86fc09f29c76937a53c7981 = $this->env->getExtension("native_profiler");
        $__internal_97856dfa384c17389cb9281d23ab38c8d0504685a86fc09f29c76937a53c7981->enter($__internal_97856dfa384c17389cb9281d23ab38c8d0504685a86fc09f29c76937a53c7981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_97856dfa384c17389cb9281d23ab38c8d0504685a86fc09f29c76937a53c7981->leave($__internal_97856dfa384c17389cb9281d23ab38c8d0504685a86fc09f29c76937a53c7981_prof);

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
