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
        $__internal_a2024a8282595e46d69f09015341a36b72aa806a673eab6f996e65e23f82724c = $this->env->getExtension("native_profiler");
        $__internal_a2024a8282595e46d69f09015341a36b72aa806a673eab6f996e65e23f82724c->enter($__internal_a2024a8282595e46d69f09015341a36b72aa806a673eab6f996e65e23f82724c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2024a8282595e46d69f09015341a36b72aa806a673eab6f996e65e23f82724c->leave($__internal_a2024a8282595e46d69f09015341a36b72aa806a673eab6f996e65e23f82724c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eda66776349994e02a18ace36d0117d7ddd46d51591d1a00c3f2c7528e9cf7df = $this->env->getExtension("native_profiler");
        $__internal_eda66776349994e02a18ace36d0117d7ddd46d51591d1a00c3f2c7528e9cf7df->enter($__internal_eda66776349994e02a18ace36d0117d7ddd46d51591d1a00c3f2c7528e9cf7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_eda66776349994e02a18ace36d0117d7ddd46d51591d1a00c3f2c7528e9cf7df->leave($__internal_eda66776349994e02a18ace36d0117d7ddd46d51591d1a00c3f2c7528e9cf7df_prof);

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
