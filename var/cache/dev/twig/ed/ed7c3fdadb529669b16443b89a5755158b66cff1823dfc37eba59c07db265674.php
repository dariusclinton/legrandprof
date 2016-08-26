<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_be1e132bae8340ed2a0182bfd29fdc26ce89f6f4aa09f54257e84ea80981a725 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_143bc2627a56ee2fdb2bea7dc1ee030ffc9fd722437eb4340fb1ad26ddb3d0d5 = $this->env->getExtension("native_profiler");
        $__internal_143bc2627a56ee2fdb2bea7dc1ee030ffc9fd722437eb4340fb1ad26ddb3d0d5->enter($__internal_143bc2627a56ee2fdb2bea7dc1ee030ffc9fd722437eb4340fb1ad26ddb3d0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_143bc2627a56ee2fdb2bea7dc1ee030ffc9fd722437eb4340fb1ad26ddb3d0d5->leave($__internal_143bc2627a56ee2fdb2bea7dc1ee030ffc9fd722437eb4340fb1ad26ddb3d0d5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f18b6167f365477dc1b50a1bb6a31ea3ddcaae34fb1e9be184dd9b1fc9269dcd = $this->env->getExtension("native_profiler");
        $__internal_f18b6167f365477dc1b50a1bb6a31ea3ddcaae34fb1e9be184dd9b1fc9269dcd->enter($__internal_f18b6167f365477dc1b50a1bb6a31ea3ddcaae34fb1e9be184dd9b1fc9269dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_f18b6167f365477dc1b50a1bb6a31ea3ddcaae34fb1e9be184dd9b1fc9269dcd->leave($__internal_f18b6167f365477dc1b50a1bb6a31ea3ddcaae34fb1e9be184dd9b1fc9269dcd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
