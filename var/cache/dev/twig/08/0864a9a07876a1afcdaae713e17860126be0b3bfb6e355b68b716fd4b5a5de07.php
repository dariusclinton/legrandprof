<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_2e046a4820dea23c8f2d0ee89b7fdeca3fb30856beac520f86583e1fb04b2c90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_80df0edafe24ae79642a667bb165660b0ef2e2155b3df1ac9bcc1f0f1481d2b0 = $this->env->getExtension("native_profiler");
        $__internal_80df0edafe24ae79642a667bb165660b0ef2e2155b3df1ac9bcc1f0f1481d2b0->enter($__internal_80df0edafe24ae79642a667bb165660b0ef2e2155b3df1ac9bcc1f0f1481d2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80df0edafe24ae79642a667bb165660b0ef2e2155b3df1ac9bcc1f0f1481d2b0->leave($__internal_80df0edafe24ae79642a667bb165660b0ef2e2155b3df1ac9bcc1f0f1481d2b0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bed76a716a0f8f9b8cc43429c899bfd966ba7321da644eb5ed34116e855c04a0 = $this->env->getExtension("native_profiler");
        $__internal_bed76a716a0f8f9b8cc43429c899bfd966ba7321da644eb5ed34116e855c04a0->enter($__internal_bed76a716a0f8f9b8cc43429c899bfd966ba7321da644eb5ed34116e855c04a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_bed76a716a0f8f9b8cc43429c899bfd966ba7321da644eb5ed34116e855c04a0->leave($__internal_bed76a716a0f8f9b8cc43429c899bfd966ba7321da644eb5ed34116e855c04a0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
