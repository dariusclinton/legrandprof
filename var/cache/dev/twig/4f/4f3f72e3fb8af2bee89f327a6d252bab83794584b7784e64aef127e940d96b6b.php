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
        $__internal_362cf0cd105be3d7f057e60ae29d7aa64710a80b6384dc01137d7c118727eded = $this->env->getExtension("native_profiler");
        $__internal_362cf0cd105be3d7f057e60ae29d7aa64710a80b6384dc01137d7c118727eded->enter($__internal_362cf0cd105be3d7f057e60ae29d7aa64710a80b6384dc01137d7c118727eded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_362cf0cd105be3d7f057e60ae29d7aa64710a80b6384dc01137d7c118727eded->leave($__internal_362cf0cd105be3d7f057e60ae29d7aa64710a80b6384dc01137d7c118727eded_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_945a97ae3517722778d7d602d38702bfa87975d941480253882fb3a936f56a27 = $this->env->getExtension("native_profiler");
        $__internal_945a97ae3517722778d7d602d38702bfa87975d941480253882fb3a936f56a27->enter($__internal_945a97ae3517722778d7d602d38702bfa87975d941480253882fb3a936f56a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_945a97ae3517722778d7d602d38702bfa87975d941480253882fb3a936f56a27->leave($__internal_945a97ae3517722778d7d602d38702bfa87975d941480253882fb3a936f56a27_prof);

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
