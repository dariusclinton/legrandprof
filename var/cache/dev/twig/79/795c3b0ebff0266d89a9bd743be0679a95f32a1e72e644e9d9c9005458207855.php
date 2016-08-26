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
        $__internal_5c475cf0ca375be00d5aa5453bd9b6898118234863527693491551bbd201e6aa = $this->env->getExtension("native_profiler");
        $__internal_5c475cf0ca375be00d5aa5453bd9b6898118234863527693491551bbd201e6aa->enter($__internal_5c475cf0ca375be00d5aa5453bd9b6898118234863527693491551bbd201e6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c475cf0ca375be00d5aa5453bd9b6898118234863527693491551bbd201e6aa->leave($__internal_5c475cf0ca375be00d5aa5453bd9b6898118234863527693491551bbd201e6aa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cd2e6e85b5c3f1619aac34301c497c8f59819b838c7780611fa4be7f4ec93550 = $this->env->getExtension("native_profiler");
        $__internal_cd2e6e85b5c3f1619aac34301c497c8f59819b838c7780611fa4be7f4ec93550->enter($__internal_cd2e6e85b5c3f1619aac34301c497c8f59819b838c7780611fa4be7f4ec93550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_cd2e6e85b5c3f1619aac34301c497c8f59819b838c7780611fa4be7f4ec93550->leave($__internal_cd2e6e85b5c3f1619aac34301c497c8f59819b838c7780611fa4be7f4ec93550_prof);

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
