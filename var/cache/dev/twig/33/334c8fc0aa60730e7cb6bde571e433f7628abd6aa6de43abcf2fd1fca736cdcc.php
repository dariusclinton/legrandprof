<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_146159b5b7311323c343dd114b8119a5626b62640ae5db0a75e0ec7a444bc179 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_e34548d9137037da612884420a4b2f0b163061dbf5ae754ac982d809f54f5284 = $this->env->getExtension("native_profiler");
        $__internal_e34548d9137037da612884420a4b2f0b163061dbf5ae754ac982d809f54f5284->enter($__internal_e34548d9137037da612884420a4b2f0b163061dbf5ae754ac982d809f54f5284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e34548d9137037da612884420a4b2f0b163061dbf5ae754ac982d809f54f5284->leave($__internal_e34548d9137037da612884420a4b2f0b163061dbf5ae754ac982d809f54f5284_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_04c782d28e35ee74bfd9e03653d7ebb08d8b1560df628621fca8aa80bf7fb61f = $this->env->getExtension("native_profiler");
        $__internal_04c782d28e35ee74bfd9e03653d7ebb08d8b1560df628621fca8aa80bf7fb61f->enter($__internal_04c782d28e35ee74bfd9e03653d7ebb08d8b1560df628621fca8aa80bf7fb61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_04c782d28e35ee74bfd9e03653d7ebb08d8b1560df628621fca8aa80bf7fb61f->leave($__internal_04c782d28e35ee74bfd9e03653d7ebb08d8b1560df628621fca8aa80bf7fb61f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>{{ 'resetting.password_already_requested'|trans }}</p>
{% endblock fos_user_content %}
";
    }
}
