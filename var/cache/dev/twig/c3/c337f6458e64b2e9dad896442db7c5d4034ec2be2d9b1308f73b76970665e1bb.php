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
        $__internal_48f963cb465a75671d2acbeb2da60816b71465fe1a5884af3252b3de67109ec4 = $this->env->getExtension("native_profiler");
        $__internal_48f963cb465a75671d2acbeb2da60816b71465fe1a5884af3252b3de67109ec4->enter($__internal_48f963cb465a75671d2acbeb2da60816b71465fe1a5884af3252b3de67109ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48f963cb465a75671d2acbeb2da60816b71465fe1a5884af3252b3de67109ec4->leave($__internal_48f963cb465a75671d2acbeb2da60816b71465fe1a5884af3252b3de67109ec4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b1a95ca4e602b3eb8f5bf5c8d5261215c604add799d17f10babcfb70eee31cd6 = $this->env->getExtension("native_profiler");
        $__internal_b1a95ca4e602b3eb8f5bf5c8d5261215c604add799d17f10babcfb70eee31cd6->enter($__internal_b1a95ca4e602b3eb8f5bf5c8d5261215c604add799d17f10babcfb70eee31cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_b1a95ca4e602b3eb8f5bf5c8d5261215c604add799d17f10babcfb70eee31cd6->leave($__internal_b1a95ca4e602b3eb8f5bf5c8d5261215c604add799d17f10babcfb70eee31cd6_prof);

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
