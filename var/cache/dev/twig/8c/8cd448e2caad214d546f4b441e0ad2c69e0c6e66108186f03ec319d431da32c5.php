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
        $__internal_fc2dd16fe06e1f5a10e42e612c533b55a52ae19d7793af9abb340784455562bc = $this->env->getExtension("native_profiler");
        $__internal_fc2dd16fe06e1f5a10e42e612c533b55a52ae19d7793af9abb340784455562bc->enter($__internal_fc2dd16fe06e1f5a10e42e612c533b55a52ae19d7793af9abb340784455562bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc2dd16fe06e1f5a10e42e612c533b55a52ae19d7793af9abb340784455562bc->leave($__internal_fc2dd16fe06e1f5a10e42e612c533b55a52ae19d7793af9abb340784455562bc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7a7533e78ed6affe3eac835390431b424217970ba341d31198a261ed1f4bb48e = $this->env->getExtension("native_profiler");
        $__internal_7a7533e78ed6affe3eac835390431b424217970ba341d31198a261ed1f4bb48e->enter($__internal_7a7533e78ed6affe3eac835390431b424217970ba341d31198a261ed1f4bb48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_7a7533e78ed6affe3eac835390431b424217970ba341d31198a261ed1f4bb48e->leave($__internal_7a7533e78ed6affe3eac835390431b424217970ba341d31198a261ed1f4bb48e_prof);

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
