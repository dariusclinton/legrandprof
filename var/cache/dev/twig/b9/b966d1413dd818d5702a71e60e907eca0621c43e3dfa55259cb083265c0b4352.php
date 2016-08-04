<?php

/* LGPCoreBundle::layout.html.twig */
class __TwigTemplate_76424bd045e9bf1a54203252e1f6641525ea7cb92f51655ae854943cac288d79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "LGPCoreBundle::layout.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62acbd4a24a15e68d8dd589794013f37dba92a71698b5be8cdc6affe5141d85d = $this->env->getExtension("native_profiler");
        $__internal_62acbd4a24a15e68d8dd589794013f37dba92a71698b5be8cdc6affe5141d85d->enter($__internal_62acbd4a24a15e68d8dd589794013f37dba92a71698b5be8cdc6affe5141d85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62acbd4a24a15e68d8dd589794013f37dba92a71698b5be8cdc6affe5141d85d->leave($__internal_62acbd4a24a15e68d8dd589794013f37dba92a71698b5be8cdc6affe5141d85d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d261180a8aae92d5a42744ff19b25f9ddce97715ca3b507b55e556a0dd46338 = $this->env->getExtension("native_profiler");
        $__internal_9d261180a8aae92d5a42744ff19b25f9ddce97715ca3b507b55e556a0dd46338->enter($__internal_9d261180a8aae92d5a42744ff19b25f9ddce97715ca3b507b55e556a0dd46338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9d261180a8aae92d5a42744ff19b25f9ddce97715ca3b507b55e556a0dd46338->leave($__internal_9d261180a8aae92d5a42744ff19b25f9ddce97715ca3b507b55e556a0dd46338_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3548ca97a6fea5670a718622642ddfc71de6d52b3600261f2b8b1fba56d00a5 = $this->env->getExtension("native_profiler");
        $__internal_a3548ca97a6fea5670a718622642ddfc71de6d52b3600261f2b8b1fba56d00a5->enter($__internal_a3548ca97a6fea5670a718622642ddfc71de6d52b3600261f2b8b1fba56d00a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    
    
 
";
        
        $__internal_a3548ca97a6fea5670a718622642ddfc71de6d52b3600261f2b8b1fba56d00a5->leave($__internal_a3548ca97a6fea5670a718622642ddfc71de6d52b3600261f2b8b1fba56d00a5_prof);

    }

    public function getTemplateName()
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     */
/*     */
/*  */
/* {% endblock %}*/
