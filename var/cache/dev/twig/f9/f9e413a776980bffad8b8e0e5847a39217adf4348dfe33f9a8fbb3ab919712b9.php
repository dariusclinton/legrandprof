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
        $__internal_7b01f481614c28f2e8da26eab7bb41b7508facba960a6e2362e634bfac96b132 = $this->env->getExtension("native_profiler");
        $__internal_7b01f481614c28f2e8da26eab7bb41b7508facba960a6e2362e634bfac96b132->enter($__internal_7b01f481614c28f2e8da26eab7bb41b7508facba960a6e2362e634bfac96b132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b01f481614c28f2e8da26eab7bb41b7508facba960a6e2362e634bfac96b132->leave($__internal_7b01f481614c28f2e8da26eab7bb41b7508facba960a6e2362e634bfac96b132_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4929af111b0b32b5d997b6af9b903968e3e218c58edaf9e1118523be933cc326 = $this->env->getExtension("native_profiler");
        $__internal_4929af111b0b32b5d997b6af9b903968e3e218c58edaf9e1118523be933cc326->enter($__internal_4929af111b0b32b5d997b6af9b903968e3e218c58edaf9e1118523be933cc326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_4929af111b0b32b5d997b6af9b903968e3e218c58edaf9e1118523be933cc326->leave($__internal_4929af111b0b32b5d997b6af9b903968e3e218c58edaf9e1118523be933cc326_prof);

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
