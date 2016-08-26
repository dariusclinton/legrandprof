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
        $__internal_7a25dd3121b2c62188ef9f9cbaa8134e3fa9918634d13887476032e90c8c42b0 = $this->env->getExtension("native_profiler");
        $__internal_7a25dd3121b2c62188ef9f9cbaa8134e3fa9918634d13887476032e90c8c42b0->enter($__internal_7a25dd3121b2c62188ef9f9cbaa8134e3fa9918634d13887476032e90c8c42b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a25dd3121b2c62188ef9f9cbaa8134e3fa9918634d13887476032e90c8c42b0->leave($__internal_7a25dd3121b2c62188ef9f9cbaa8134e3fa9918634d13887476032e90c8c42b0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ffbe5d33167216f0ba3a432a7dff36b8da4439722f751ad7680473643a25736 = $this->env->getExtension("native_profiler");
        $__internal_2ffbe5d33167216f0ba3a432a7dff36b8da4439722f751ad7680473643a25736->enter($__internal_2ffbe5d33167216f0ba3a432a7dff36b8da4439722f751ad7680473643a25736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_2ffbe5d33167216f0ba3a432a7dff36b8da4439722f751ad7680473643a25736->leave($__internal_2ffbe5d33167216f0ba3a432a7dff36b8da4439722f751ad7680473643a25736_prof);

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
