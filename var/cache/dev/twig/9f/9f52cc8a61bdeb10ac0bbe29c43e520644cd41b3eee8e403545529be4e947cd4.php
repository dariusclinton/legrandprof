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
        $__internal_7c39674997c8914c165baf7fa10597e45043390e19bbc4e2cb3805894f28a6cf = $this->env->getExtension("native_profiler");
        $__internal_7c39674997c8914c165baf7fa10597e45043390e19bbc4e2cb3805894f28a6cf->enter($__internal_7c39674997c8914c165baf7fa10597e45043390e19bbc4e2cb3805894f28a6cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c39674997c8914c165baf7fa10597e45043390e19bbc4e2cb3805894f28a6cf->leave($__internal_7c39674997c8914c165baf7fa10597e45043390e19bbc4e2cb3805894f28a6cf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fdd947cef04c88b57bc5b83a93408e3b3eef206253d0a90925477d8b6d6a5270 = $this->env->getExtension("native_profiler");
        $__internal_fdd947cef04c88b57bc5b83a93408e3b3eef206253d0a90925477d8b6d6a5270->enter($__internal_fdd947cef04c88b57bc5b83a93408e3b3eef206253d0a90925477d8b6d6a5270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_fdd947cef04c88b57bc5b83a93408e3b3eef206253d0a90925477d8b6d6a5270->leave($__internal_fdd947cef04c88b57bc5b83a93408e3b3eef206253d0a90925477d8b6d6a5270_prof);

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
