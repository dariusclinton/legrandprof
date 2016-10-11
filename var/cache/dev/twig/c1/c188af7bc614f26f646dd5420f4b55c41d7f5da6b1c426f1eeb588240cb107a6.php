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
        $__internal_0d100ab6d45eba467d580b692052c109e9035fdd8928c11ab04dacbf4b317073 = $this->env->getExtension("native_profiler");
        $__internal_0d100ab6d45eba467d580b692052c109e9035fdd8928c11ab04dacbf4b317073->enter($__internal_0d100ab6d45eba467d580b692052c109e9035fdd8928c11ab04dacbf4b317073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d100ab6d45eba467d580b692052c109e9035fdd8928c11ab04dacbf4b317073->leave($__internal_0d100ab6d45eba467d580b692052c109e9035fdd8928c11ab04dacbf4b317073_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e6a3d0889490d4877de0ebcd6886ec81ef5d2c75c732e43d7178847f4bcfc44e = $this->env->getExtension("native_profiler");
        $__internal_e6a3d0889490d4877de0ebcd6886ec81ef5d2c75c732e43d7178847f4bcfc44e->enter($__internal_e6a3d0889490d4877de0ebcd6886ec81ef5d2c75c732e43d7178847f4bcfc44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_e6a3d0889490d4877de0ebcd6886ec81ef5d2c75c732e43d7178847f4bcfc44e->leave($__internal_e6a3d0889490d4877de0ebcd6886ec81ef5d2c75c732e43d7178847f4bcfc44e_prof);

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
