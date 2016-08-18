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
        $__internal_41f4ff0cbc1e9fe3b91894801593efff7f45531d6300cb5e7bfeb67bf9157105 = $this->env->getExtension("native_profiler");
        $__internal_41f4ff0cbc1e9fe3b91894801593efff7f45531d6300cb5e7bfeb67bf9157105->enter($__internal_41f4ff0cbc1e9fe3b91894801593efff7f45531d6300cb5e7bfeb67bf9157105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41f4ff0cbc1e9fe3b91894801593efff7f45531d6300cb5e7bfeb67bf9157105->leave($__internal_41f4ff0cbc1e9fe3b91894801593efff7f45531d6300cb5e7bfeb67bf9157105_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_902d449251723cd50ef675357d4194eb1429d128d2d6b6ff8a0ffc2dc3d67f42 = $this->env->getExtension("native_profiler");
        $__internal_902d449251723cd50ef675357d4194eb1429d128d2d6b6ff8a0ffc2dc3d67f42->enter($__internal_902d449251723cd50ef675357d4194eb1429d128d2d6b6ff8a0ffc2dc3d67f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_902d449251723cd50ef675357d4194eb1429d128d2d6b6ff8a0ffc2dc3d67f42->leave($__internal_902d449251723cd50ef675357d4194eb1429d128d2d6b6ff8a0ffc2dc3d67f42_prof);

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
