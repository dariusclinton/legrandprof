<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_db14e56c91cba01ca8113b481797ac28913369168c358aeb920a6f3c5c96339e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_1e2491aa8f616b88a57472bd08f83c1a279b6e3a0b02605bf015cfa6cac8bbc0 = $this->env->getExtension("native_profiler");
        $__internal_1e2491aa8f616b88a57472bd08f83c1a279b6e3a0b02605bf015cfa6cac8bbc0->enter($__internal_1e2491aa8f616b88a57472bd08f83c1a279b6e3a0b02605bf015cfa6cac8bbc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e2491aa8f616b88a57472bd08f83c1a279b6e3a0b02605bf015cfa6cac8bbc0->leave($__internal_1e2491aa8f616b88a57472bd08f83c1a279b6e3a0b02605bf015cfa6cac8bbc0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fd2d60bdb56f40be68f42bfcc6ed515e88f468b37c284f4b70a7525a5d80dee3 = $this->env->getExtension("native_profiler");
        $__internal_fd2d60bdb56f40be68f42bfcc6ed515e88f468b37c284f4b70a7525a5d80dee3->enter($__internal_fd2d60bdb56f40be68f42bfcc6ed515e88f468b37c284f4b70a7525a5d80dee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_fd2d60bdb56f40be68f42bfcc6ed515e88f468b37c284f4b70a7525a5d80dee3->leave($__internal_fd2d60bdb56f40be68f42bfcc6ed515e88f468b37c284f4b70a7525a5d80dee3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
