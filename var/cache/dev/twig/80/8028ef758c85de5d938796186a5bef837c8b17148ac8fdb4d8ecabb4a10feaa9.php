<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_aee0adb452f4ca037c48c800836f5e195b7f07cf4d7a1e9376be1a705ad2abb0 extends Twig_Template
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
        $__internal_7592a39091f2cb3d933c34f8d7a0f48ad643a360a911dcf1f493e06aad7ac7a8 = $this->env->getExtension("native_profiler");
        $__internal_7592a39091f2cb3d933c34f8d7a0f48ad643a360a911dcf1f493e06aad7ac7a8->enter($__internal_7592a39091f2cb3d933c34f8d7a0f48ad643a360a911dcf1f493e06aad7ac7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7592a39091f2cb3d933c34f8d7a0f48ad643a360a911dcf1f493e06aad7ac7a8->leave($__internal_7592a39091f2cb3d933c34f8d7a0f48ad643a360a911dcf1f493e06aad7ac7a8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dfcfedc12d6dd002fed504e0dd3b4d51835415afb7ecf0913e5592066df8689f = $this->env->getExtension("native_profiler");
        $__internal_dfcfedc12d6dd002fed504e0dd3b4d51835415afb7ecf0913e5592066df8689f->enter($__internal_dfcfedc12d6dd002fed504e0dd3b4d51835415afb7ecf0913e5592066df8689f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_dfcfedc12d6dd002fed504e0dd3b4d51835415afb7ecf0913e5592066df8689f->leave($__internal_dfcfedc12d6dd002fed504e0dd3b4d51835415afb7ecf0913e5592066df8689f_prof);

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
