<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_a68c2b58d2abb85a6ac70f5fda3b1ec34cd0ed57b34ee6d7df1118ef3eca3954 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_1a9cb65ee46e363376e7facd3b32b34adc9a968f3b7e2848a6a42711565521be = $this->env->getExtension("native_profiler");
        $__internal_1a9cb65ee46e363376e7facd3b32b34adc9a968f3b7e2848a6a42711565521be->enter($__internal_1a9cb65ee46e363376e7facd3b32b34adc9a968f3b7e2848a6a42711565521be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a9cb65ee46e363376e7facd3b32b34adc9a968f3b7e2848a6a42711565521be->leave($__internal_1a9cb65ee46e363376e7facd3b32b34adc9a968f3b7e2848a6a42711565521be_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bf254726b5d7d3f595ccc7c4187db059a89172250ab6e91736fc1c3790c52674 = $this->env->getExtension("native_profiler");
        $__internal_bf254726b5d7d3f595ccc7c4187db059a89172250ab6e91736fc1c3790c52674->enter($__internal_bf254726b5d7d3f595ccc7c4187db059a89172250ab6e91736fc1c3790c52674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_bf254726b5d7d3f595ccc7c4187db059a89172250ab6e91736fc1c3790c52674->leave($__internal_bf254726b5d7d3f595ccc7c4187db059a89172250ab6e91736fc1c3790c52674_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
