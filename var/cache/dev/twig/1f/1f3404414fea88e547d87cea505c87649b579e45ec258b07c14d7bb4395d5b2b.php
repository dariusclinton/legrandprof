<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_dbd5d53f0cc3680a412195cd06fb3539dffb4db7a587f89e1e87b780209aa671 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_e8b4d1a90e9eee274012d6d3c7e9495b873f9a3feb4d2a4e049272dafb112d09 = $this->env->getExtension("native_profiler");
        $__internal_e8b4d1a90e9eee274012d6d3c7e9495b873f9a3feb4d2a4e049272dafb112d09->enter($__internal_e8b4d1a90e9eee274012d6d3c7e9495b873f9a3feb4d2a4e049272dafb112d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8b4d1a90e9eee274012d6d3c7e9495b873f9a3feb4d2a4e049272dafb112d09->leave($__internal_e8b4d1a90e9eee274012d6d3c7e9495b873f9a3feb4d2a4e049272dafb112d09_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c54879564fcd2b396248d89ab1df2f47fa8a85a9d077aefe3ce9da1881787866 = $this->env->getExtension("native_profiler");
        $__internal_c54879564fcd2b396248d89ab1df2f47fa8a85a9d077aefe3ce9da1881787866->enter($__internal_c54879564fcd2b396248d89ab1df2f47fa8a85a9d077aefe3ce9da1881787866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_c54879564fcd2b396248d89ab1df2f47fa8a85a9d077aefe3ce9da1881787866->leave($__internal_c54879564fcd2b396248d89ab1df2f47fa8a85a9d077aefe3ce9da1881787866_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
