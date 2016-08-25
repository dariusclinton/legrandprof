<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_e3b6f24e444bf886ec53293b4a63b53f11bd74ebb2cd59edae68a3b385d93fd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_816337feadf3256566f4b6d832224383591cd3e3deca65bc45f24643ec553baf = $this->env->getExtension("native_profiler");
        $__internal_816337feadf3256566f4b6d832224383591cd3e3deca65bc45f24643ec553baf->enter($__internal_816337feadf3256566f4b6d832224383591cd3e3deca65bc45f24643ec553baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_816337feadf3256566f4b6d832224383591cd3e3deca65bc45f24643ec553baf->leave($__internal_816337feadf3256566f4b6d832224383591cd3e3deca65bc45f24643ec553baf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_712c24aeedd8598e761dc9ffcc51f506a9e154f23b80715922e72605f3fd3412 = $this->env->getExtension("native_profiler");
        $__internal_712c24aeedd8598e761dc9ffcc51f506a9e154f23b80715922e72605f3fd3412->enter($__internal_712c24aeedd8598e761dc9ffcc51f506a9e154f23b80715922e72605f3fd3412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_712c24aeedd8598e761dc9ffcc51f506a9e154f23b80715922e72605f3fd3412->leave($__internal_712c24aeedd8598e761dc9ffcc51f506a9e154f23b80715922e72605f3fd3412_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
