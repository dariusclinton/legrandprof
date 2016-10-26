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
        $__internal_d34c155de4582d64193a26984015afebc5b7c90e6e4c9ca92b47ad35dfcb86be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d34c155de4582d64193a26984015afebc5b7c90e6e4c9ca92b47ad35dfcb86be->enter($__internal_d34c155de4582d64193a26984015afebc5b7c90e6e4c9ca92b47ad35dfcb86be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d34c155de4582d64193a26984015afebc5b7c90e6e4c9ca92b47ad35dfcb86be->leave($__internal_d34c155de4582d64193a26984015afebc5b7c90e6e4c9ca92b47ad35dfcb86be_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f39c2c5f01d80c75bb6097c8671526c83ea03364c292be20b9e4e9329ad68190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f39c2c5f01d80c75bb6097c8671526c83ea03364c292be20b9e4e9329ad68190->enter($__internal_f39c2c5f01d80c75bb6097c8671526c83ea03364c292be20b9e4e9329ad68190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_f39c2c5f01d80c75bb6097c8671526c83ea03364c292be20b9e4e9329ad68190->leave($__internal_f39c2c5f01d80c75bb6097c8671526c83ea03364c292be20b9e4e9329ad68190_prof);

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
