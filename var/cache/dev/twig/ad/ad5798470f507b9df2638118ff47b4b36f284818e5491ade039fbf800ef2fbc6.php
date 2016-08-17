<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_ec52b5077b7639cdefe61788cacbf62c3f44462d53284020fa171ffdab3e79ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_912500d35af27d2d9087afb012eba97afc98790389dfcb26c24dae57d698eafe = $this->env->getExtension("native_profiler");
        $__internal_912500d35af27d2d9087afb012eba97afc98790389dfcb26c24dae57d698eafe->enter($__internal_912500d35af27d2d9087afb012eba97afc98790389dfcb26c24dae57d698eafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_912500d35af27d2d9087afb012eba97afc98790389dfcb26c24dae57d698eafe->leave($__internal_912500d35af27d2d9087afb012eba97afc98790389dfcb26c24dae57d698eafe_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8ec7a09eb1b10f8cf86287b0dc99dd6f33d353f4b8bed05ba530beb7805f1841 = $this->env->getExtension("native_profiler");
        $__internal_8ec7a09eb1b10f8cf86287b0dc99dd6f33d353f4b8bed05ba530beb7805f1841->enter($__internal_8ec7a09eb1b10f8cf86287b0dc99dd6f33d353f4b8bed05ba530beb7805f1841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8ec7a09eb1b10f8cf86287b0dc99dd6f33d353f4b8bed05ba530beb7805f1841->leave($__internal_8ec7a09eb1b10f8cf86287b0dc99dd6f33d353f4b8bed05ba530beb7805f1841_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
