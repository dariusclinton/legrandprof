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
        $__internal_755846da98340e88ccb2e4a66e0875826b3d86be1b5540e2014f6a810eb993f4 = $this->env->getExtension("native_profiler");
        $__internal_755846da98340e88ccb2e4a66e0875826b3d86be1b5540e2014f6a810eb993f4->enter($__internal_755846da98340e88ccb2e4a66e0875826b3d86be1b5540e2014f6a810eb993f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_755846da98340e88ccb2e4a66e0875826b3d86be1b5540e2014f6a810eb993f4->leave($__internal_755846da98340e88ccb2e4a66e0875826b3d86be1b5540e2014f6a810eb993f4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c3ca0d614bbba45dd9387caeec3a8d470da27291dc0a006d4aa1048a432c91a = $this->env->getExtension("native_profiler");
        $__internal_9c3ca0d614bbba45dd9387caeec3a8d470da27291dc0a006d4aa1048a432c91a->enter($__internal_9c3ca0d614bbba45dd9387caeec3a8d470da27291dc0a006d4aa1048a432c91a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_9c3ca0d614bbba45dd9387caeec3a8d470da27291dc0a006d4aa1048a432c91a->leave($__internal_9c3ca0d614bbba45dd9387caeec3a8d470da27291dc0a006d4aa1048a432c91a_prof);

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
