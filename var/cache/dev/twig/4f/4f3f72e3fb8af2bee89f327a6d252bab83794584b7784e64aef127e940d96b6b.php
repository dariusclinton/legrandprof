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
        $__internal_4cc1c4d24dd288426e7415d5e71399945fd4301862491ef6c73d6433635ee380 = $this->env->getExtension("native_profiler");
        $__internal_4cc1c4d24dd288426e7415d5e71399945fd4301862491ef6c73d6433635ee380->enter($__internal_4cc1c4d24dd288426e7415d5e71399945fd4301862491ef6c73d6433635ee380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cc1c4d24dd288426e7415d5e71399945fd4301862491ef6c73d6433635ee380->leave($__internal_4cc1c4d24dd288426e7415d5e71399945fd4301862491ef6c73d6433635ee380_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aaae24afd9e723be0fd1700ab0713fc23e056eae3d112dcb7d109b531e0e55ae = $this->env->getExtension("native_profiler");
        $__internal_aaae24afd9e723be0fd1700ab0713fc23e056eae3d112dcb7d109b531e0e55ae->enter($__internal_aaae24afd9e723be0fd1700ab0713fc23e056eae3d112dcb7d109b531e0e55ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_aaae24afd9e723be0fd1700ab0713fc23e056eae3d112dcb7d109b531e0e55ae->leave($__internal_aaae24afd9e723be0fd1700ab0713fc23e056eae3d112dcb7d109b531e0e55ae_prof);

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
