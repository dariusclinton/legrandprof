<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_1ccf89c9c9c2f0a8f5b83a0ede3ef30d3eaf998a48140f91d564cfd346d9e4a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_de0078149714d12e2445032662c52372dbf07aa3789529b49c0fc8e340b0906b = $this->env->getExtension("native_profiler");
        $__internal_de0078149714d12e2445032662c52372dbf07aa3789529b49c0fc8e340b0906b->enter($__internal_de0078149714d12e2445032662c52372dbf07aa3789529b49c0fc8e340b0906b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de0078149714d12e2445032662c52372dbf07aa3789529b49c0fc8e340b0906b->leave($__internal_de0078149714d12e2445032662c52372dbf07aa3789529b49c0fc8e340b0906b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f224b97560895068e48123e09e3cce0f9de50f1d5be699b9638fe5fe7a7da3c4 = $this->env->getExtension("native_profiler");
        $__internal_f224b97560895068e48123e09e3cce0f9de50f1d5be699b9638fe5fe7a7da3c4->enter($__internal_f224b97560895068e48123e09e3cce0f9de50f1d5be699b9638fe5fe7a7da3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_f224b97560895068e48123e09e3cce0f9de50f1d5be699b9638fe5fe7a7da3c4->leave($__internal_f224b97560895068e48123e09e3cce0f9de50f1d5be699b9638fe5fe7a7da3c4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
