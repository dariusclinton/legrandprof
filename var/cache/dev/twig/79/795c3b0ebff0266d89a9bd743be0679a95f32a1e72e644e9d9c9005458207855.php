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
        $__internal_9f642e6ef040e177e4b401009dd5cfb40edea0b21a12ed7205a5ed0148ddcec6 = $this->env->getExtension("native_profiler");
        $__internal_9f642e6ef040e177e4b401009dd5cfb40edea0b21a12ed7205a5ed0148ddcec6->enter($__internal_9f642e6ef040e177e4b401009dd5cfb40edea0b21a12ed7205a5ed0148ddcec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f642e6ef040e177e4b401009dd5cfb40edea0b21a12ed7205a5ed0148ddcec6->leave($__internal_9f642e6ef040e177e4b401009dd5cfb40edea0b21a12ed7205a5ed0148ddcec6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_845ec467557894514690a73643a52ce11c84c0e2630e24a7593162982656e535 = $this->env->getExtension("native_profiler");
        $__internal_845ec467557894514690a73643a52ce11c84c0e2630e24a7593162982656e535->enter($__internal_845ec467557894514690a73643a52ce11c84c0e2630e24a7593162982656e535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_845ec467557894514690a73643a52ce11c84c0e2630e24a7593162982656e535->leave($__internal_845ec467557894514690a73643a52ce11c84c0e2630e24a7593162982656e535_prof);

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
