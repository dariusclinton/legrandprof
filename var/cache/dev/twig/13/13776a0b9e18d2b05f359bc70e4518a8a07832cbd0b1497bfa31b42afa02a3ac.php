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
        $__internal_c08bb5d4b4d7b8b2f99cc4dbfc548be9a1677fdc32d8fe12461bc725f17ed9bd = $this->env->getExtension("native_profiler");
        $__internal_c08bb5d4b4d7b8b2f99cc4dbfc548be9a1677fdc32d8fe12461bc725f17ed9bd->enter($__internal_c08bb5d4b4d7b8b2f99cc4dbfc548be9a1677fdc32d8fe12461bc725f17ed9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c08bb5d4b4d7b8b2f99cc4dbfc548be9a1677fdc32d8fe12461bc725f17ed9bd->leave($__internal_c08bb5d4b4d7b8b2f99cc4dbfc548be9a1677fdc32d8fe12461bc725f17ed9bd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_636fe779ebfc72ed57bb4334965c1264419336e8fc51cc7fdc14b84eec27e6ed = $this->env->getExtension("native_profiler");
        $__internal_636fe779ebfc72ed57bb4334965c1264419336e8fc51cc7fdc14b84eec27e6ed->enter($__internal_636fe779ebfc72ed57bb4334965c1264419336e8fc51cc7fdc14b84eec27e6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_636fe779ebfc72ed57bb4334965c1264419336e8fc51cc7fdc14b84eec27e6ed->leave($__internal_636fe779ebfc72ed57bb4334965c1264419336e8fc51cc7fdc14b84eec27e6ed_prof);

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
