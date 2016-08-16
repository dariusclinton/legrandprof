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
        $__internal_dcea4e42eea1c2dbf5038722aab41241592f26ab6256e367060846e23be84a90 = $this->env->getExtension("native_profiler");
        $__internal_dcea4e42eea1c2dbf5038722aab41241592f26ab6256e367060846e23be84a90->enter($__internal_dcea4e42eea1c2dbf5038722aab41241592f26ab6256e367060846e23be84a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcea4e42eea1c2dbf5038722aab41241592f26ab6256e367060846e23be84a90->leave($__internal_dcea4e42eea1c2dbf5038722aab41241592f26ab6256e367060846e23be84a90_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bff71b88645b0f93a9897e0922aaa0971d66871151709843a77e698dc9cf667b = $this->env->getExtension("native_profiler");
        $__internal_bff71b88645b0f93a9897e0922aaa0971d66871151709843a77e698dc9cf667b->enter($__internal_bff71b88645b0f93a9897e0922aaa0971d66871151709843a77e698dc9cf667b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_bff71b88645b0f93a9897e0922aaa0971d66871151709843a77e698dc9cf667b->leave($__internal_bff71b88645b0f93a9897e0922aaa0971d66871151709843a77e698dc9cf667b_prof);

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
