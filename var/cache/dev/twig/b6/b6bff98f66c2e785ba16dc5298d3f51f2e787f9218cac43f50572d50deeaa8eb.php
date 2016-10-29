<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_ea382962cee0e0db91eab47e6d0f9f6edb02dbc3a10bce97ec945b41b1b86ff8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_41f4bcb2cd729b37c3f50ee836e8ac779a02fa9a04de988f7fcf68cdc35319da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41f4bcb2cd729b37c3f50ee836e8ac779a02fa9a04de988f7fcf68cdc35319da->enter($__internal_41f4bcb2cd729b37c3f50ee836e8ac779a02fa9a04de988f7fcf68cdc35319da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41f4bcb2cd729b37c3f50ee836e8ac779a02fa9a04de988f7fcf68cdc35319da->leave($__internal_41f4bcb2cd729b37c3f50ee836e8ac779a02fa9a04de988f7fcf68cdc35319da_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4232c0e1fb63ad7e0f4424876002b37bd0fbce34ad319996070026c1de7d3f39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4232c0e1fb63ad7e0f4424876002b37bd0fbce34ad319996070026c1de7d3f39->enter($__internal_4232c0e1fb63ad7e0f4424876002b37bd0fbce34ad319996070026c1de7d3f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4232c0e1fb63ad7e0f4424876002b37bd0fbce34ad319996070026c1de7d3f39->leave($__internal_4232c0e1fb63ad7e0f4424876002b37bd0fbce34ad319996070026c1de7d3f39_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
";
    }
}
