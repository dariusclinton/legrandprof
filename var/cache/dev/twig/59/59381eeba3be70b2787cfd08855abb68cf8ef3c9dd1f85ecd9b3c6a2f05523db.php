<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_00dada6b88a792638f7470373b5f90593ef4223fba5dfaab484113f16123debf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPUserBundle::layout.html.twig", "TwigBundle:Exception:error404.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a6ad14bbfdcb4fc777681af4cf7371e52a41fb65e5679fffeab87071d5f0a05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a6ad14bbfdcb4fc777681af4cf7371e52a41fb65e5679fffeab87071d5f0a05->enter($__internal_3a6ad14bbfdcb4fc777681af4cf7371e52a41fb65e5679fffeab87071d5f0a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a6ad14bbfdcb4fc777681af4cf7371e52a41fb65e5679fffeab87071d5f0a05->leave($__internal_3a6ad14bbfdcb4fc777681af4cf7371e52a41fb65e5679fffeab87071d5f0a05_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4c63cb81a4060ff399a52959f1f99a9034a41574cec2e10f15e4c549b66329d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4c63cb81a4060ff399a52959f1f99a9034a41574cec2e10f15e4c549b66329d->enter($__internal_b4c63cb81a4060ff399a52959f1f99a9034a41574cec2e10f15e4c549b66329d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    404 - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b4c63cb81a4060ff399a52959f1f99a9034a41574cec2e10f15e4c549b66329d->leave($__internal_b4c63cb81a4060ff399a52959f1f99a9034a41574cec2e10f15e4c549b66329d_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_638134e0267f2a5f673bef860f047258ec972213238e5c79e2e3b959ee6e0922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_638134e0267f2a5f673bef860f047258ec972213238e5c79e2e3b959ee6e0922->enter($__internal_638134e0267f2a5f673bef860f047258ec972213238e5c79e2e3b959ee6e0922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "
    <div class=\"content-wrapper\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-md-offset-4\">
                    <h1>Oups erreur 404 !!! <small>La page demandée est introuvable !!!</small></h1>
                </div>
            </div>

        </div>

    </div>

";
        
        $__internal_638134e0267f2a5f673bef860f047258ec972213238e5c79e2e3b959ee6e0922->leave($__internal_638134e0267f2a5f673bef860f047258ec972213238e5c79e2e3b959ee6e0922_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  51 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'LGPUserBundle::layout.html.twig' %}

{% block title %}
    404 - {{ parent() }}
{% endblock %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}

    <div class=\"content-wrapper\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-md-offset-4\">
                    <h1>Oups erreur 404 !!! <small>La page demandée est introuvable !!!</small></h1>
                </div>
            </div>

        </div>

    </div>

{% endblock fos_user_content %}";
    }
}
