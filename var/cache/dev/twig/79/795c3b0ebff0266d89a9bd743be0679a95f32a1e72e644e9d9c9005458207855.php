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
        $__internal_942ae97255dcfa9dbe8236584d6ee6f70fd93a67f5b0657a9143efd1f9474b83 = $this->env->getExtension("native_profiler");
        $__internal_942ae97255dcfa9dbe8236584d6ee6f70fd93a67f5b0657a9143efd1f9474b83->enter($__internal_942ae97255dcfa9dbe8236584d6ee6f70fd93a67f5b0657a9143efd1f9474b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_942ae97255dcfa9dbe8236584d6ee6f70fd93a67f5b0657a9143efd1f9474b83->leave($__internal_942ae97255dcfa9dbe8236584d6ee6f70fd93a67f5b0657a9143efd1f9474b83_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e933da92b127b29fbd3ab212ddd82b2bb346564733727a995d0c1703c2b982c9 = $this->env->getExtension("native_profiler");
        $__internal_e933da92b127b29fbd3ab212ddd82b2bb346564733727a995d0c1703c2b982c9->enter($__internal_e933da92b127b29fbd3ab212ddd82b2bb346564733727a995d0c1703c2b982c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_e933da92b127b29fbd3ab212ddd82b2bb346564733727a995d0c1703c2b982c9->leave($__internal_e933da92b127b29fbd3ab212ddd82b2bb346564733727a995d0c1703c2b982c9_prof);

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
