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
        $__internal_9a25d03e8d0657ec04129146a5dd3b6acf7f0b98b8fdafd22bf1e189eca27d0f = $this->env->getExtension("native_profiler");
        $__internal_9a25d03e8d0657ec04129146a5dd3b6acf7f0b98b8fdafd22bf1e189eca27d0f->enter($__internal_9a25d03e8d0657ec04129146a5dd3b6acf7f0b98b8fdafd22bf1e189eca27d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a25d03e8d0657ec04129146a5dd3b6acf7f0b98b8fdafd22bf1e189eca27d0f->leave($__internal_9a25d03e8d0657ec04129146a5dd3b6acf7f0b98b8fdafd22bf1e189eca27d0f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4337a305c939c54713f291cab84562a3a89ddb520fa3951bdb8c5251d7c3ca17 = $this->env->getExtension("native_profiler");
        $__internal_4337a305c939c54713f291cab84562a3a89ddb520fa3951bdb8c5251d7c3ca17->enter($__internal_4337a305c939c54713f291cab84562a3a89ddb520fa3951bdb8c5251d7c3ca17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_4337a305c939c54713f291cab84562a3a89ddb520fa3951bdb8c5251d7c3ca17->leave($__internal_4337a305c939c54713f291cab84562a3a89ddb520fa3951bdb8c5251d7c3ca17_prof);

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
