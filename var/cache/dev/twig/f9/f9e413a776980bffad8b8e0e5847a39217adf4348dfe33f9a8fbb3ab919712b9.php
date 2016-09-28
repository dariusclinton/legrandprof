<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_74c7be5d57db606590f4cd98a29732ed9a362f9fd685cd18d898ca2ad852985c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_7cb28332df886591165ef7b04afa6ef5cc307b780fa4c297089e2a927f8ed4bc = $this->env->getExtension("native_profiler");
        $__internal_7cb28332df886591165ef7b04afa6ef5cc307b780fa4c297089e2a927f8ed4bc->enter($__internal_7cb28332df886591165ef7b04afa6ef5cc307b780fa4c297089e2a927f8ed4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cb28332df886591165ef7b04afa6ef5cc307b780fa4c297089e2a927f8ed4bc->leave($__internal_7cb28332df886591165ef7b04afa6ef5cc307b780fa4c297089e2a927f8ed4bc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9b2a82c364c2991dbc6c23f58a1ec8042ed40de4f49d3f3d8a691cf370ba324c = $this->env->getExtension("native_profiler");
        $__internal_9b2a82c364c2991dbc6c23f58a1ec8042ed40de4f49d3f3d8a691cf370ba324c->enter($__internal_9b2a82c364c2991dbc6c23f58a1ec8042ed40de4f49d3f3d8a691cf370ba324c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_9b2a82c364c2991dbc6c23f58a1ec8042ed40de4f49d3f3d8a691cf370ba324c->leave($__internal_9b2a82c364c2991dbc6c23f58a1ec8042ed40de4f49d3f3d8a691cf370ba324c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
