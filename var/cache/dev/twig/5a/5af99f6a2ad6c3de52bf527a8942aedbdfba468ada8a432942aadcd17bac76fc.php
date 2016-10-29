<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_58dcd5f5995819cf18255abca3bc7247a0d96ade13c50aea7918fd5f0d392663 extends Twig_Template
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
        $__internal_812f78766cc9199affad0602ea5038da26f25ef23a6e1071ff6a76947be0c04e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_812f78766cc9199affad0602ea5038da26f25ef23a6e1071ff6a76947be0c04e->enter($__internal_812f78766cc9199affad0602ea5038da26f25ef23a6e1071ff6a76947be0c04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_812f78766cc9199affad0602ea5038da26f25ef23a6e1071ff6a76947be0c04e->leave($__internal_812f78766cc9199affad0602ea5038da26f25ef23a6e1071ff6a76947be0c04e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e5a93a6642646e903f2408c79bac46f66fa45f8cba8403fd68a7f354e3c3510e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5a93a6642646e903f2408c79bac46f66fa45f8cba8403fd68a7f354e3c3510e->enter($__internal_e5a93a6642646e903f2408c79bac46f66fa45f8cba8403fd68a7f354e3c3510e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_e5a93a6642646e903f2408c79bac46f66fa45f8cba8403fd68a7f354e3c3510e->leave($__internal_e5a93a6642646e903f2408c79bac46f66fa45f8cba8403fd68a7f354e3c3510e_prof);

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
