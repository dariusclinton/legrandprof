<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_a68c2b58d2abb85a6ac70f5fda3b1ec34cd0ed57b34ee6d7df1118ef3eca3954 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_fce3ec7bed3ca651c3ab23b79f01f0d32961988391b969755146fcb70bff4fb0 = $this->env->getExtension("native_profiler");
        $__internal_fce3ec7bed3ca651c3ab23b79f01f0d32961988391b969755146fcb70bff4fb0->enter($__internal_fce3ec7bed3ca651c3ab23b79f01f0d32961988391b969755146fcb70bff4fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fce3ec7bed3ca651c3ab23b79f01f0d32961988391b969755146fcb70bff4fb0->leave($__internal_fce3ec7bed3ca651c3ab23b79f01f0d32961988391b969755146fcb70bff4fb0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9f372aa878d2c53fab112c814efc1e5d46eb0c607cb003a8010657b055d9cdf0 = $this->env->getExtension("native_profiler");
        $__internal_9f372aa878d2c53fab112c814efc1e5d46eb0c607cb003a8010657b055d9cdf0->enter($__internal_9f372aa878d2c53fab112c814efc1e5d46eb0c607cb003a8010657b055d9cdf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_9f372aa878d2c53fab112c814efc1e5d46eb0c607cb003a8010657b055d9cdf0->leave($__internal_9f372aa878d2c53fab112c814efc1e5d46eb0c607cb003a8010657b055d9cdf0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
