<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_addc6a791de2974e7aa145d72799d3422f9b4b4248c4631977d654914e2cae32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_9c065847e013103c93c842c604b9af118a2dedf55b13660450e89ae893535281 = $this->env->getExtension("native_profiler");
        $__internal_9c065847e013103c93c842c604b9af118a2dedf55b13660450e89ae893535281->enter($__internal_9c065847e013103c93c842c604b9af118a2dedf55b13660450e89ae893535281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c065847e013103c93c842c604b9af118a2dedf55b13660450e89ae893535281->leave($__internal_9c065847e013103c93c842c604b9af118a2dedf55b13660450e89ae893535281_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1a17006ecfa1bfcfb0cfef04f2a55572bf737e767564e2ad2d877b29d7b68ca4 = $this->env->getExtension("native_profiler");
        $__internal_1a17006ecfa1bfcfb0cfef04f2a55572bf737e767564e2ad2d877b29d7b68ca4->enter($__internal_1a17006ecfa1bfcfb0cfef04f2a55572bf737e767564e2ad2d877b29d7b68ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_1a17006ecfa1bfcfb0cfef04f2a55572bf737e767564e2ad2d877b29d7b68ca4->leave($__internal_1a17006ecfa1bfcfb0cfef04f2a55572bf737e767564e2ad2d877b29d7b68ca4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
