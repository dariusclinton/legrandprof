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
        $__internal_8058412050591a6cd4e7a5cf901fa5c66535570aef7e2f756c4b620397605f39 = $this->env->getExtension("native_profiler");
        $__internal_8058412050591a6cd4e7a5cf901fa5c66535570aef7e2f756c4b620397605f39->enter($__internal_8058412050591a6cd4e7a5cf901fa5c66535570aef7e2f756c4b620397605f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8058412050591a6cd4e7a5cf901fa5c66535570aef7e2f756c4b620397605f39->leave($__internal_8058412050591a6cd4e7a5cf901fa5c66535570aef7e2f756c4b620397605f39_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_017409356ad60e6184d6d644fd188eda062010f0707bbd344049cb4e3bdc9c22 = $this->env->getExtension("native_profiler");
        $__internal_017409356ad60e6184d6d644fd188eda062010f0707bbd344049cb4e3bdc9c22->enter($__internal_017409356ad60e6184d6d644fd188eda062010f0707bbd344049cb4e3bdc9c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_017409356ad60e6184d6d644fd188eda062010f0707bbd344049cb4e3bdc9c22->leave($__internal_017409356ad60e6184d6d644fd188eda062010f0707bbd344049cb4e3bdc9c22_prof);

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
