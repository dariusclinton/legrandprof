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
        $__internal_7d2da86bbf8ce7afbf3687e788dd51dd0fdba481efc030a55987d713ab676c80 = $this->env->getExtension("native_profiler");
        $__internal_7d2da86bbf8ce7afbf3687e788dd51dd0fdba481efc030a55987d713ab676c80->enter($__internal_7d2da86bbf8ce7afbf3687e788dd51dd0fdba481efc030a55987d713ab676c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d2da86bbf8ce7afbf3687e788dd51dd0fdba481efc030a55987d713ab676c80->leave($__internal_7d2da86bbf8ce7afbf3687e788dd51dd0fdba481efc030a55987d713ab676c80_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_89c12f5fa30a7dbb37130f09ab385e96389e1e9ea10de362088c9987d4919f18 = $this->env->getExtension("native_profiler");
        $__internal_89c12f5fa30a7dbb37130f09ab385e96389e1e9ea10de362088c9987d4919f18->enter($__internal_89c12f5fa30a7dbb37130f09ab385e96389e1e9ea10de362088c9987d4919f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_89c12f5fa30a7dbb37130f09ab385e96389e1e9ea10de362088c9987d4919f18->leave($__internal_89c12f5fa30a7dbb37130f09ab385e96389e1e9ea10de362088c9987d4919f18_prof);

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
