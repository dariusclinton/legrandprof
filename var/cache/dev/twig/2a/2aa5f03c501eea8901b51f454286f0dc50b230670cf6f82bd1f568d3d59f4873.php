<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_4d7378bbf6b1ae594a260ee0ca57afbaea467696fdaf24151374392056a69f63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_208194820f34b22d6cc3f0ec78cf0a7279cc7f5cd9d4201d32b1926cf3e8d949 = $this->env->getExtension("native_profiler");
        $__internal_208194820f34b22d6cc3f0ec78cf0a7279cc7f5cd9d4201d32b1926cf3e8d949->enter($__internal_208194820f34b22d6cc3f0ec78cf0a7279cc7f5cd9d4201d32b1926cf3e8d949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_208194820f34b22d6cc3f0ec78cf0a7279cc7f5cd9d4201d32b1926cf3e8d949->leave($__internal_208194820f34b22d6cc3f0ec78cf0a7279cc7f5cd9d4201d32b1926cf3e8d949_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d9932c3958b6589f8a6cecb1577a8fb136546c9344f381d65b40e3cc5dfd6be9 = $this->env->getExtension("native_profiler");
        $__internal_d9932c3958b6589f8a6cecb1577a8fb136546c9344f381d65b40e3cc5dfd6be9->enter($__internal_d9932c3958b6589f8a6cecb1577a8fb136546c9344f381d65b40e3cc5dfd6be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_d9932c3958b6589f8a6cecb1577a8fb136546c9344f381d65b40e3cc5dfd6be9->leave($__internal_d9932c3958b6589f8a6cecb1577a8fb136546c9344f381d65b40e3cc5dfd6be9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
