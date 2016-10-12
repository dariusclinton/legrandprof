<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_fd4abe4e58b39b59a1c53c0d1d9dc0ec81ab125cd4b88e060c60dfbf71072d1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_580ad0dfd68367360662496bf9a5e109042623b9919ac05c5dfb4499beeada49 = $this->env->getExtension("native_profiler");
        $__internal_580ad0dfd68367360662496bf9a5e109042623b9919ac05c5dfb4499beeada49->enter($__internal_580ad0dfd68367360662496bf9a5e109042623b9919ac05c5dfb4499beeada49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_580ad0dfd68367360662496bf9a5e109042623b9919ac05c5dfb4499beeada49->leave($__internal_580ad0dfd68367360662496bf9a5e109042623b9919ac05c5dfb4499beeada49_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1f83a0d8ac180e59efe11736ac7efdb77d86e2aa14dacca74fcd002fcbeb767b = $this->env->getExtension("native_profiler");
        $__internal_1f83a0d8ac180e59efe11736ac7efdb77d86e2aa14dacca74fcd002fcbeb767b->enter($__internal_1f83a0d8ac180e59efe11736ac7efdb77d86e2aa14dacca74fcd002fcbeb767b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_1f83a0d8ac180e59efe11736ac7efdb77d86e2aa14dacca74fcd002fcbeb767b->leave($__internal_1f83a0d8ac180e59efe11736ac7efdb77d86e2aa14dacca74fcd002fcbeb767b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
