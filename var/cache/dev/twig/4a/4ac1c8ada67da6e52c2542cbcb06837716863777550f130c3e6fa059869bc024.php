<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_972812ef936a5568a895d13f861084f207c5e4da643101e64ab14e88629a3f62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_07083fab8257f6e34d30592cb194f00868b3ade07e17a8a8f1c77b79e8dfc890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07083fab8257f6e34d30592cb194f00868b3ade07e17a8a8f1c77b79e8dfc890->enter($__internal_07083fab8257f6e34d30592cb194f00868b3ade07e17a8a8f1c77b79e8dfc890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07083fab8257f6e34d30592cb194f00868b3ade07e17a8a8f1c77b79e8dfc890->leave($__internal_07083fab8257f6e34d30592cb194f00868b3ade07e17a8a8f1c77b79e8dfc890_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_49ef246b9e459c6165247f69ebd527507430fe0718c91d3fec0d460f8b4ca930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49ef246b9e459c6165247f69ebd527507430fe0718c91d3fec0d460f8b4ca930->enter($__internal_49ef246b9e459c6165247f69ebd527507430fe0718c91d3fec0d460f8b4ca930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_49ef246b9e459c6165247f69ebd527507430fe0718c91d3fec0d460f8b4ca930->leave($__internal_49ef246b9e459c6165247f69ebd527507430fe0718c91d3fec0d460f8b4ca930_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
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
{{ 'resetting.check_email'|trans({'%email%': email}) }}
</p>
{% endblock %}
";
    }
}
