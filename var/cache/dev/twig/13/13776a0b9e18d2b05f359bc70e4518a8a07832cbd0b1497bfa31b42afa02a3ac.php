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
        $__internal_715e3eab1b0907a064da0d0a2664cb854216e810e60b369fb33b42184f34ef8f = $this->env->getExtension("native_profiler");
        $__internal_715e3eab1b0907a064da0d0a2664cb854216e810e60b369fb33b42184f34ef8f->enter($__internal_715e3eab1b0907a064da0d0a2664cb854216e810e60b369fb33b42184f34ef8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_715e3eab1b0907a064da0d0a2664cb854216e810e60b369fb33b42184f34ef8f->leave($__internal_715e3eab1b0907a064da0d0a2664cb854216e810e60b369fb33b42184f34ef8f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2bb3dcfc1a1486222f13385b7b7108deba6ad6d3e5954428cce904c18cefd55a = $this->env->getExtension("native_profiler");
        $__internal_2bb3dcfc1a1486222f13385b7b7108deba6ad6d3e5954428cce904c18cefd55a->enter($__internal_2bb3dcfc1a1486222f13385b7b7108deba6ad6d3e5954428cce904c18cefd55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_2bb3dcfc1a1486222f13385b7b7108deba6ad6d3e5954428cce904c18cefd55a->leave($__internal_2bb3dcfc1a1486222f13385b7b7108deba6ad6d3e5954428cce904c18cefd55a_prof);

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
