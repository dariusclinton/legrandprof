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
        $__internal_8831886b6ba6401f31cfe422746f800e8c59f5a66b7122d0b9805df8def1b7aa = $this->env->getExtension("native_profiler");
        $__internal_8831886b6ba6401f31cfe422746f800e8c59f5a66b7122d0b9805df8def1b7aa->enter($__internal_8831886b6ba6401f31cfe422746f800e8c59f5a66b7122d0b9805df8def1b7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8831886b6ba6401f31cfe422746f800e8c59f5a66b7122d0b9805df8def1b7aa->leave($__internal_8831886b6ba6401f31cfe422746f800e8c59f5a66b7122d0b9805df8def1b7aa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d9f02d14f4edcf153117f9ffff5db3f5eef32bc1a4eb66ae891ee1b63b53f80a = $this->env->getExtension("native_profiler");
        $__internal_d9f02d14f4edcf153117f9ffff5db3f5eef32bc1a4eb66ae891ee1b63b53f80a->enter($__internal_d9f02d14f4edcf153117f9ffff5db3f5eef32bc1a4eb66ae891ee1b63b53f80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_d9f02d14f4edcf153117f9ffff5db3f5eef32bc1a4eb66ae891ee1b63b53f80a->leave($__internal_d9f02d14f4edcf153117f9ffff5db3f5eef32bc1a4eb66ae891ee1b63b53f80a_prof);

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
