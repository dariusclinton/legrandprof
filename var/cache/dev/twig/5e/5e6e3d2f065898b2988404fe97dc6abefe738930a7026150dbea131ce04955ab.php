<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_65bf60ec878b87bf7aa5bd6fc1e5adfda07d0a44e500f8e95091af386b0d1be4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_6817f461c8eb31da0f2608134de1e017aab11bbb03852ea0b06ee2de317390c9 = $this->env->getExtension("native_profiler");
        $__internal_6817f461c8eb31da0f2608134de1e017aab11bbb03852ea0b06ee2de317390c9->enter($__internal_6817f461c8eb31da0f2608134de1e017aab11bbb03852ea0b06ee2de317390c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6817f461c8eb31da0f2608134de1e017aab11bbb03852ea0b06ee2de317390c9->leave($__internal_6817f461c8eb31da0f2608134de1e017aab11bbb03852ea0b06ee2de317390c9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bee554277460394f6c68624a0a3441d3b6e46282fa19eec280f0e4f0015c6620 = $this->env->getExtension("native_profiler");
        $__internal_bee554277460394f6c68624a0a3441d3b6e46282fa19eec280f0e4f0015c6620->enter($__internal_bee554277460394f6c68624a0a3441d3b6e46282fa19eec280f0e4f0015c6620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_bee554277460394f6c68624a0a3441d3b6e46282fa19eec280f0e4f0015c6620->leave($__internal_bee554277460394f6c68624a0a3441d3b6e46282fa19eec280f0e4f0015c6620_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
