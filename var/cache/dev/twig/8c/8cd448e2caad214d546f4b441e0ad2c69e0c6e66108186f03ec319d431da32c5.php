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
        $__internal_183eecee0c3dadd6817efd79761e1af37ab37a21a8c0e1ad3323cc658fbe81c4 = $this->env->getExtension("native_profiler");
        $__internal_183eecee0c3dadd6817efd79761e1af37ab37a21a8c0e1ad3323cc658fbe81c4->enter($__internal_183eecee0c3dadd6817efd79761e1af37ab37a21a8c0e1ad3323cc658fbe81c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_183eecee0c3dadd6817efd79761e1af37ab37a21a8c0e1ad3323cc658fbe81c4->leave($__internal_183eecee0c3dadd6817efd79761e1af37ab37a21a8c0e1ad3323cc658fbe81c4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b7e5a5156b9e5621fe0fa1aabc52051eaacd6b36288e274103a60baf55642e8c = $this->env->getExtension("native_profiler");
        $__internal_b7e5a5156b9e5621fe0fa1aabc52051eaacd6b36288e274103a60baf55642e8c->enter($__internal_b7e5a5156b9e5621fe0fa1aabc52051eaacd6b36288e274103a60baf55642e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_b7e5a5156b9e5621fe0fa1aabc52051eaacd6b36288e274103a60baf55642e8c->leave($__internal_b7e5a5156b9e5621fe0fa1aabc52051eaacd6b36288e274103a60baf55642e8c_prof);

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
