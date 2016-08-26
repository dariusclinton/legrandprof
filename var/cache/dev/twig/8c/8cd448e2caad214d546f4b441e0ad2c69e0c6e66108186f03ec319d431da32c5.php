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
        $__internal_6950572f386ce211c3292af5b7f7f3aa306b0ef9104c06d5531079af4958cd25 = $this->env->getExtension("native_profiler");
        $__internal_6950572f386ce211c3292af5b7f7f3aa306b0ef9104c06d5531079af4958cd25->enter($__internal_6950572f386ce211c3292af5b7f7f3aa306b0ef9104c06d5531079af4958cd25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6950572f386ce211c3292af5b7f7f3aa306b0ef9104c06d5531079af4958cd25->leave($__internal_6950572f386ce211c3292af5b7f7f3aa306b0ef9104c06d5531079af4958cd25_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_393f88e3a0d30b85103b7a0c5eddd0dc277a74bfb4ee895c35b9650d9ac0260b = $this->env->getExtension("native_profiler");
        $__internal_393f88e3a0d30b85103b7a0c5eddd0dc277a74bfb4ee895c35b9650d9ac0260b->enter($__internal_393f88e3a0d30b85103b7a0c5eddd0dc277a74bfb4ee895c35b9650d9ac0260b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_393f88e3a0d30b85103b7a0c5eddd0dc277a74bfb4ee895c35b9650d9ac0260b->leave($__internal_393f88e3a0d30b85103b7a0c5eddd0dc277a74bfb4ee895c35b9650d9ac0260b_prof);

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
