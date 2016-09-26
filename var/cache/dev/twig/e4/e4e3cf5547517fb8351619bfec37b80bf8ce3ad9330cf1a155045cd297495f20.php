<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_e9fee84088b688574dd8d2e907e013f4d0839ed48f6eda39b0d6d05c42107a6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_4430fafb04a80bc5d45d08ca49525d561b228daa000ef24710ae598b4db842ed = $this->env->getExtension("native_profiler");
        $__internal_4430fafb04a80bc5d45d08ca49525d561b228daa000ef24710ae598b4db842ed->enter($__internal_4430fafb04a80bc5d45d08ca49525d561b228daa000ef24710ae598b4db842ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4430fafb04a80bc5d45d08ca49525d561b228daa000ef24710ae598b4db842ed->leave($__internal_4430fafb04a80bc5d45d08ca49525d561b228daa000ef24710ae598b4db842ed_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4a638e5fe12adf405a2e12f14e8291139dac4ad993978a6a6a6b55efc6d36ae2 = $this->env->getExtension("native_profiler");
        $__internal_4a638e5fe12adf405a2e12f14e8291139dac4ad993978a6a6a6b55efc6d36ae2->enter($__internal_4a638e5fe12adf405a2e12f14e8291139dac4ad993978a6a6a6b55efc6d36ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4a638e5fe12adf405a2e12f14e8291139dac4ad993978a6a6a6b55efc6d36ae2->leave($__internal_4a638e5fe12adf405a2e12f14e8291139dac4ad993978a6a6a6b55efc6d36ae2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
