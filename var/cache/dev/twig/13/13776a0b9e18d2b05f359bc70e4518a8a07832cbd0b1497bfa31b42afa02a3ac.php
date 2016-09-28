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
        $__internal_1eb08f88f3ae2987ae5fc6e0aa369cb6365510eb4a8c620efec14d600bb6fa4f = $this->env->getExtension("native_profiler");
        $__internal_1eb08f88f3ae2987ae5fc6e0aa369cb6365510eb4a8c620efec14d600bb6fa4f->enter($__internal_1eb08f88f3ae2987ae5fc6e0aa369cb6365510eb4a8c620efec14d600bb6fa4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1eb08f88f3ae2987ae5fc6e0aa369cb6365510eb4a8c620efec14d600bb6fa4f->leave($__internal_1eb08f88f3ae2987ae5fc6e0aa369cb6365510eb4a8c620efec14d600bb6fa4f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_59f11976f2adf9ffe24c4ebbda8293721d89efef8e003a2635862c1f75021550 = $this->env->getExtension("native_profiler");
        $__internal_59f11976f2adf9ffe24c4ebbda8293721d89efef8e003a2635862c1f75021550->enter($__internal_59f11976f2adf9ffe24c4ebbda8293721d89efef8e003a2635862c1f75021550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_59f11976f2adf9ffe24c4ebbda8293721d89efef8e003a2635862c1f75021550->leave($__internal_59f11976f2adf9ffe24c4ebbda8293721d89efef8e003a2635862c1f75021550_prof);

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
