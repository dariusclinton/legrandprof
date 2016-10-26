<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_4384c7ad6765fe7b2bf28a451a3e9acac2947795bfe51cc66ddcc7e1b7c81739 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_36a4a8ae00bccceb7967475df071602f0fe3e8a918448af820bbc80a466940fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36a4a8ae00bccceb7967475df071602f0fe3e8a918448af820bbc80a466940fc->enter($__internal_36a4a8ae00bccceb7967475df071602f0fe3e8a918448af820bbc80a466940fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36a4a8ae00bccceb7967475df071602f0fe3e8a918448af820bbc80a466940fc->leave($__internal_36a4a8ae00bccceb7967475df071602f0fe3e8a918448af820bbc80a466940fc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d75ccc9f772f8850131b566e865fd19494aa7852d5687f2fa6b7479f6bd133b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d75ccc9f772f8850131b566e865fd19494aa7852d5687f2fa6b7479f6bd133b6->enter($__internal_d75ccc9f772f8850131b566e865fd19494aa7852d5687f2fa6b7479f6bd133b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_d75ccc9f772f8850131b566e865fd19494aa7852d5687f2fa6b7479f6bd133b6->leave($__internal_d75ccc9f772f8850131b566e865fd19494aa7852d5687f2fa6b7479f6bd133b6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
