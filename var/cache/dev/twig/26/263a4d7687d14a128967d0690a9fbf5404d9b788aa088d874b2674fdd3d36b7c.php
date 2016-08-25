<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_77561ebfd065ae127418de65663460602243aa631c602c07b6aacb8bf31583d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_7d00a2d35f000603d0ebba8a5eceda39bc449e0090d5176aeae305738fa912a4 = $this->env->getExtension("native_profiler");
        $__internal_7d00a2d35f000603d0ebba8a5eceda39bc449e0090d5176aeae305738fa912a4->enter($__internal_7d00a2d35f000603d0ebba8a5eceda39bc449e0090d5176aeae305738fa912a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d00a2d35f000603d0ebba8a5eceda39bc449e0090d5176aeae305738fa912a4->leave($__internal_7d00a2d35f000603d0ebba8a5eceda39bc449e0090d5176aeae305738fa912a4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_49d008c7b044f0acc1edc8f4572b5bc3f3a12943512dfaa3c491498b9ad5fe18 = $this->env->getExtension("native_profiler");
        $__internal_49d008c7b044f0acc1edc8f4572b5bc3f3a12943512dfaa3c491498b9ad5fe18->enter($__internal_49d008c7b044f0acc1edc8f4572b5bc3f3a12943512dfaa3c491498b9ad5fe18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_49d008c7b044f0acc1edc8f4572b5bc3f3a12943512dfaa3c491498b9ad5fe18->leave($__internal_49d008c7b044f0acc1edc8f4572b5bc3f3a12943512dfaa3c491498b9ad5fe18_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
