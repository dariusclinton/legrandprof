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
        $__internal_54408024bcfe82079f78c0ef5f3b649c5f60ab7b15ccab4106c0a1155f662f92 = $this->env->getExtension("native_profiler");
        $__internal_54408024bcfe82079f78c0ef5f3b649c5f60ab7b15ccab4106c0a1155f662f92->enter($__internal_54408024bcfe82079f78c0ef5f3b649c5f60ab7b15ccab4106c0a1155f662f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54408024bcfe82079f78c0ef5f3b649c5f60ab7b15ccab4106c0a1155f662f92->leave($__internal_54408024bcfe82079f78c0ef5f3b649c5f60ab7b15ccab4106c0a1155f662f92_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6735606be87c011443316a4a1ec43cc94e2aa2bee5b200afb46e0f4f255ba8de = $this->env->getExtension("native_profiler");
        $__internal_6735606be87c011443316a4a1ec43cc94e2aa2bee5b200afb46e0f4f255ba8de->enter($__internal_6735606be87c011443316a4a1ec43cc94e2aa2bee5b200afb46e0f4f255ba8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_6735606be87c011443316a4a1ec43cc94e2aa2bee5b200afb46e0f4f255ba8de->leave($__internal_6735606be87c011443316a4a1ec43cc94e2aa2bee5b200afb46e0f4f255ba8de_prof);

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
