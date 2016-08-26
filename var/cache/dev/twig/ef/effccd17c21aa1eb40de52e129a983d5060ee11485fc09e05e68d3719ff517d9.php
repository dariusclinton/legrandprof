<?php

/* LGPCoreBundle::layout.html.twig */
class __TwigTemplate_d8476ffaff311cac05480954028647d69a878986b7f77f43ea02fe43d90920dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "LGPCoreBundle::layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_790c0315e668415405a9d215299af2d5728ac62a40028a6a67a446fa0df014d7 = $this->env->getExtension("native_profiler");
        $__internal_790c0315e668415405a9d215299af2d5728ac62a40028a6a67a446fa0df014d7->enter($__internal_790c0315e668415405a9d215299af2d5728ac62a40028a6a67a446fa0df014d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_790c0315e668415405a9d215299af2d5728ac62a40028a6a67a446fa0df014d7->leave($__internal_790c0315e668415405a9d215299af2d5728ac62a40028a6a67a446fa0df014d7_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_fdfaefa941f26546ea265cd7aa17b86b72e43f733e46ea3ac58e373bd105fc5b = $this->env->getExtension("native_profiler");
        $__internal_fdfaefa941f26546ea265cd7aa17b86b72e43f733e46ea3ac58e373bd105fc5b->enter($__internal_fdfaefa941f26546ea265cd7aa17b86b72e43f733e46ea3ac58e373bd105fc5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_fdfaefa941f26546ea265cd7aa17b86b72e43f733e46ea3ac58e373bd105fc5b->leave($__internal_fdfaefa941f26546ea265cd7aa17b86b72e43f733e46ea3ac58e373bd105fc5b_prof);

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
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
