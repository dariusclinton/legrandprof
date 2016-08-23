<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_57a580726f6f38382b614b6cee9b7d20d12470429cc0ae9d2ecf1aac06549105 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_56d28459d75dac3cac3cf660341f973abd00f03844f9a48cea3d1e2f245cc69e = $this->env->getExtension("native_profiler");
        $__internal_56d28459d75dac3cac3cf660341f973abd00f03844f9a48cea3d1e2f245cc69e->enter($__internal_56d28459d75dac3cac3cf660341f973abd00f03844f9a48cea3d1e2f245cc69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56d28459d75dac3cac3cf660341f973abd00f03844f9a48cea3d1e2f245cc69e->leave($__internal_56d28459d75dac3cac3cf660341f973abd00f03844f9a48cea3d1e2f245cc69e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aba5eccb776267bc22f614b7914e53b0fbc887061ed0aba68b9031b9d4f9ce52 = $this->env->getExtension("native_profiler");
        $__internal_aba5eccb776267bc22f614b7914e53b0fbc887061ed0aba68b9031b9d4f9ce52->enter($__internal_aba5eccb776267bc22f614b7914e53b0fbc887061ed0aba68b9031b9d4f9ce52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_aba5eccb776267bc22f614b7914e53b0fbc887061ed0aba68b9031b9d4f9ce52->leave($__internal_aba5eccb776267bc22f614b7914e53b0fbc887061ed0aba68b9031b9d4f9ce52_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
