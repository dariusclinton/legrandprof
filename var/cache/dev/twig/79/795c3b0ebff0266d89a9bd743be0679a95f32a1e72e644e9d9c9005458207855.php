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
        $__internal_4bfffdd65d3a9e88c8ac58306103f7365fc991017ef2aab93d52d22efcee1382 = $this->env->getExtension("native_profiler");
        $__internal_4bfffdd65d3a9e88c8ac58306103f7365fc991017ef2aab93d52d22efcee1382->enter($__internal_4bfffdd65d3a9e88c8ac58306103f7365fc991017ef2aab93d52d22efcee1382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bfffdd65d3a9e88c8ac58306103f7365fc991017ef2aab93d52d22efcee1382->leave($__internal_4bfffdd65d3a9e88c8ac58306103f7365fc991017ef2aab93d52d22efcee1382_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b22aa7705358fb91299682865626e0dc742d99d360c9999d8452dd03a8ab7d59 = $this->env->getExtension("native_profiler");
        $__internal_b22aa7705358fb91299682865626e0dc742d99d360c9999d8452dd03a8ab7d59->enter($__internal_b22aa7705358fb91299682865626e0dc742d99d360c9999d8452dd03a8ab7d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_b22aa7705358fb91299682865626e0dc742d99d360c9999d8452dd03a8ab7d59->leave($__internal_b22aa7705358fb91299682865626e0dc742d99d360c9999d8452dd03a8ab7d59_prof);

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
