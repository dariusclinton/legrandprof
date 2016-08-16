<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_3d2574fcb41d093ffb89a54df4fe379566191610c21ee683b823d8d3c8f96f9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_5bc5238f3248e2615c6a96f858599718dd50aeb217748f04da9b30df87a8dac6 = $this->env->getExtension("native_profiler");
        $__internal_5bc5238f3248e2615c6a96f858599718dd50aeb217748f04da9b30df87a8dac6->enter($__internal_5bc5238f3248e2615c6a96f858599718dd50aeb217748f04da9b30df87a8dac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bc5238f3248e2615c6a96f858599718dd50aeb217748f04da9b30df87a8dac6->leave($__internal_5bc5238f3248e2615c6a96f858599718dd50aeb217748f04da9b30df87a8dac6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_42317c74a8e4546685616fe153069a6d320405b30f558f96b77c9d2362607382 = $this->env->getExtension("native_profiler");
        $__internal_42317c74a8e4546685616fe153069a6d320405b30f558f96b77c9d2362607382->enter($__internal_42317c74a8e4546685616fe153069a6d320405b30f558f96b77c9d2362607382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_42317c74a8e4546685616fe153069a6d320405b30f558f96b77c9d2362607382->leave($__internal_42317c74a8e4546685616fe153069a6d320405b30f558f96b77c9d2362607382_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
