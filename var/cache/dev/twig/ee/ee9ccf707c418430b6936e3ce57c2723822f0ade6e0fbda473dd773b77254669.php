<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_22d593bbd3a7de26256811524b99e85ce8079625504ae9539789b5b61a8f3417 extends Twig_Template
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
        $__internal_724c522aed318c1f56de57a7905ccafc1218518e67fb25de6692204e300343e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_724c522aed318c1f56de57a7905ccafc1218518e67fb25de6692204e300343e2->enter($__internal_724c522aed318c1f56de57a7905ccafc1218518e67fb25de6692204e300343e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_724c522aed318c1f56de57a7905ccafc1218518e67fb25de6692204e300343e2->leave($__internal_724c522aed318c1f56de57a7905ccafc1218518e67fb25de6692204e300343e2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_968a1a37dcfd20875550f13e95cb0dc0d7c473613c399c77c54d936e2fe80a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_968a1a37dcfd20875550f13e95cb0dc0d7c473613c399c77c54d936e2fe80a39->enter($__internal_968a1a37dcfd20875550f13e95cb0dc0d7c473613c399c77c54d936e2fe80a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_968a1a37dcfd20875550f13e95cb0dc0d7c473613c399c77c54d936e2fe80a39->leave($__internal_968a1a37dcfd20875550f13e95cb0dc0d7c473613c399c77c54d936e2fe80a39_prof);

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
