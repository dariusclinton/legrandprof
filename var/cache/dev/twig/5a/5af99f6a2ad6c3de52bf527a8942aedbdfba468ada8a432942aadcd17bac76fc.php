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
        $__internal_a2a02927ea2fcfd1abac0249091bcec357551ad96c113dc62b17415982af1c86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2a02927ea2fcfd1abac0249091bcec357551ad96c113dc62b17415982af1c86->enter($__internal_a2a02927ea2fcfd1abac0249091bcec357551ad96c113dc62b17415982af1c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2a02927ea2fcfd1abac0249091bcec357551ad96c113dc62b17415982af1c86->leave($__internal_a2a02927ea2fcfd1abac0249091bcec357551ad96c113dc62b17415982af1c86_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5573cd0c002df089abe7f972bc3feb70f55ed0a0fd2bad4bc0a48709b596e38b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5573cd0c002df089abe7f972bc3feb70f55ed0a0fd2bad4bc0a48709b596e38b->enter($__internal_5573cd0c002df089abe7f972bc3feb70f55ed0a0fd2bad4bc0a48709b596e38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_5573cd0c002df089abe7f972bc3feb70f55ed0a0fd2bad4bc0a48709b596e38b->leave($__internal_5573cd0c002df089abe7f972bc3feb70f55ed0a0fd2bad4bc0a48709b596e38b_prof);

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
