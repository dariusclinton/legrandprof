<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_c569f9891ea703df050261c3cdba45df7a6efbb1520c9e6f384a471cf4a82140 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_237d618109f487cf1f045e0e02e3ce31ff20085666e29c601db1dcdedb58bdbf = $this->env->getExtension("native_profiler");
        $__internal_237d618109f487cf1f045e0e02e3ce31ff20085666e29c601db1dcdedb58bdbf->enter($__internal_237d618109f487cf1f045e0e02e3ce31ff20085666e29c601db1dcdedb58bdbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_237d618109f487cf1f045e0e02e3ce31ff20085666e29c601db1dcdedb58bdbf->leave($__internal_237d618109f487cf1f045e0e02e3ce31ff20085666e29c601db1dcdedb58bdbf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f965e90f4e13effcb5ea26a065916df50da403e65d08cc6ed6362ae3b064c2fb = $this->env->getExtension("native_profiler");
        $__internal_f965e90f4e13effcb5ea26a065916df50da403e65d08cc6ed6362ae3b064c2fb->enter($__internal_f965e90f4e13effcb5ea26a065916df50da403e65d08cc6ed6362ae3b064c2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_f965e90f4e13effcb5ea26a065916df50da403e65d08cc6ed6362ae3b064c2fb->leave($__internal_f965e90f4e13effcb5ea26a065916df50da403e65d08cc6ed6362ae3b064c2fb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
