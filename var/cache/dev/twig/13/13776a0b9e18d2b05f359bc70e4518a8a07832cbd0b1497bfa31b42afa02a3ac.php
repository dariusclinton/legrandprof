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
        $__internal_8117f14def701b2aa22e818e3715d3723f802ab2980af58f11f531b3e0ed9413 = $this->env->getExtension("native_profiler");
        $__internal_8117f14def701b2aa22e818e3715d3723f802ab2980af58f11f531b3e0ed9413->enter($__internal_8117f14def701b2aa22e818e3715d3723f802ab2980af58f11f531b3e0ed9413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8117f14def701b2aa22e818e3715d3723f802ab2980af58f11f531b3e0ed9413->leave($__internal_8117f14def701b2aa22e818e3715d3723f802ab2980af58f11f531b3e0ed9413_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0245d27fd65ffc973868345f6c3357295ac79fc90cb72a3b5e1fac174b2bad38 = $this->env->getExtension("native_profiler");
        $__internal_0245d27fd65ffc973868345f6c3357295ac79fc90cb72a3b5e1fac174b2bad38->enter($__internal_0245d27fd65ffc973868345f6c3357295ac79fc90cb72a3b5e1fac174b2bad38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_0245d27fd65ffc973868345f6c3357295ac79fc90cb72a3b5e1fac174b2bad38->leave($__internal_0245d27fd65ffc973868345f6c3357295ac79fc90cb72a3b5e1fac174b2bad38_prof);

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
