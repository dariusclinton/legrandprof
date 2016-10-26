<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_0abfe1fedcab7dc20f5ff01638b2853d2b9b98df930620be36211a2f80d74161 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_742ad4cffaaf807e9277ab4cfd178e488c8898079b65acf5b5173bad9152ad6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_742ad4cffaaf807e9277ab4cfd178e488c8898079b65acf5b5173bad9152ad6c->enter($__internal_742ad4cffaaf807e9277ab4cfd178e488c8898079b65acf5b5173bad9152ad6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_742ad4cffaaf807e9277ab4cfd178e488c8898079b65acf5b5173bad9152ad6c->leave($__internal_742ad4cffaaf807e9277ab4cfd178e488c8898079b65acf5b5173bad9152ad6c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1fda1bbf9c375c87b222fc8d1df5b1d75ae2eec247dcfd5088c8ec5487ab7b3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fda1bbf9c375c87b222fc8d1df5b1d75ae2eec247dcfd5088c8ec5487ab7b3e->enter($__internal_1fda1bbf9c375c87b222fc8d1df5b1d75ae2eec247dcfd5088c8ec5487ab7b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_1fda1bbf9c375c87b222fc8d1df5b1d75ae2eec247dcfd5088c8ec5487ab7b3e->leave($__internal_1fda1bbf9c375c87b222fc8d1df5b1d75ae2eec247dcfd5088c8ec5487ab7b3e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime}) }}
</p>
{% endblock %}
";
    }
}
