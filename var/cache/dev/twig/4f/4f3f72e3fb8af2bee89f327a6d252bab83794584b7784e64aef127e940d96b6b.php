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
        $__internal_5d46fdb2ce1e4c1f692b6819a3ee49bdb6807bb9c14784b01e627d2b2e1a6d03 = $this->env->getExtension("native_profiler");
        $__internal_5d46fdb2ce1e4c1f692b6819a3ee49bdb6807bb9c14784b01e627d2b2e1a6d03->enter($__internal_5d46fdb2ce1e4c1f692b6819a3ee49bdb6807bb9c14784b01e627d2b2e1a6d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d46fdb2ce1e4c1f692b6819a3ee49bdb6807bb9c14784b01e627d2b2e1a6d03->leave($__internal_5d46fdb2ce1e4c1f692b6819a3ee49bdb6807bb9c14784b01e627d2b2e1a6d03_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a45b20491d24a95109012d7265ef89917d977bd1d4265b8f27f5b0ff02e7af67 = $this->env->getExtension("native_profiler");
        $__internal_a45b20491d24a95109012d7265ef89917d977bd1d4265b8f27f5b0ff02e7af67->enter($__internal_a45b20491d24a95109012d7265ef89917d977bd1d4265b8f27f5b0ff02e7af67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_a45b20491d24a95109012d7265ef89917d977bd1d4265b8f27f5b0ff02e7af67->leave($__internal_a45b20491d24a95109012d7265ef89917d977bd1d4265b8f27f5b0ff02e7af67_prof);

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
