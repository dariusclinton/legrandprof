<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_225c0888c8d9bd7f5f76296f77ed0a56a0831e7eb5b1398311b8df0a873451e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_57bbb23941cc969bbed7a6efd355182de05f384471d082838a4cf94b6cb1830e = $this->env->getExtension("native_profiler");
        $__internal_57bbb23941cc969bbed7a6efd355182de05f384471d082838a4cf94b6cb1830e->enter($__internal_57bbb23941cc969bbed7a6efd355182de05f384471d082838a4cf94b6cb1830e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57bbb23941cc969bbed7a6efd355182de05f384471d082838a4cf94b6cb1830e->leave($__internal_57bbb23941cc969bbed7a6efd355182de05f384471d082838a4cf94b6cb1830e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_07e8b5518a8fb52e05bc5045ad177d2edf5264c22fcc0cd5906019d043acd4d4 = $this->env->getExtension("native_profiler");
        $__internal_07e8b5518a8fb52e05bc5045ad177d2edf5264c22fcc0cd5906019d043acd4d4->enter($__internal_07e8b5518a8fb52e05bc5045ad177d2edf5264c22fcc0cd5906019d043acd4d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_07e8b5518a8fb52e05bc5045ad177d2edf5264c22fcc0cd5906019d043acd4d4->leave($__internal_07e8b5518a8fb52e05bc5045ad177d2edf5264c22fcc0cd5906019d043acd4d4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
