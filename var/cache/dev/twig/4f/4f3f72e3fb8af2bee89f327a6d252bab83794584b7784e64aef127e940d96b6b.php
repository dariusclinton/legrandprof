<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_86a935adb1bdc7f5667babde57bac0c8d0799aa6e744917caae4b9314b8784ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_86b4fe129b13fdafa423302a45a79a791307ef3926f5519c5b5a6d6cea18a7fd = $this->env->getExtension("native_profiler");
        $__internal_86b4fe129b13fdafa423302a45a79a791307ef3926f5519c5b5a6d6cea18a7fd->enter($__internal_86b4fe129b13fdafa423302a45a79a791307ef3926f5519c5b5a6d6cea18a7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86b4fe129b13fdafa423302a45a79a791307ef3926f5519c5b5a6d6cea18a7fd->leave($__internal_86b4fe129b13fdafa423302a45a79a791307ef3926f5519c5b5a6d6cea18a7fd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c4350ae418bbc1a8f3d5f7179901de09461bd218bec399ba6c6a93d68898a388 = $this->env->getExtension("native_profiler");
        $__internal_c4350ae418bbc1a8f3d5f7179901de09461bd218bec399ba6c6a93d68898a388->enter($__internal_c4350ae418bbc1a8f3d5f7179901de09461bd218bec399ba6c6a93d68898a388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_c4350ae418bbc1a8f3d5f7179901de09461bd218bec399ba6c6a93d68898a388->leave($__internal_c4350ae418bbc1a8f3d5f7179901de09461bd218bec399ba6c6a93d68898a388_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
