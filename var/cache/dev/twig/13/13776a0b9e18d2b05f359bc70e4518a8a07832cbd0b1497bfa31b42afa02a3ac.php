<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_8536f341ff3076cf2ceaab09e7329f7e4ae6a5d54a03520aa948c5d0ace2f058 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_0041bf7b2d59ff0c9fdc9c5ee834200a6519ef91263696d9a0178ec56f5d7957 = $this->env->getExtension("native_profiler");
        $__internal_0041bf7b2d59ff0c9fdc9c5ee834200a6519ef91263696d9a0178ec56f5d7957->enter($__internal_0041bf7b2d59ff0c9fdc9c5ee834200a6519ef91263696d9a0178ec56f5d7957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0041bf7b2d59ff0c9fdc9c5ee834200a6519ef91263696d9a0178ec56f5d7957->leave($__internal_0041bf7b2d59ff0c9fdc9c5ee834200a6519ef91263696d9a0178ec56f5d7957_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_be815d082992bbb1855163c27010cc30d51497d5014cf7226bdf503613ba2cb5 = $this->env->getExtension("native_profiler");
        $__internal_be815d082992bbb1855163c27010cc30d51497d5014cf7226bdf503613ba2cb5->enter($__internal_be815d082992bbb1855163c27010cc30d51497d5014cf7226bdf503613ba2cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_be815d082992bbb1855163c27010cc30d51497d5014cf7226bdf503613ba2cb5->leave($__internal_be815d082992bbb1855163c27010cc30d51497d5014cf7226bdf503613ba2cb5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
