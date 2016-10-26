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
        $__internal_ab986efb4f2f94b73a2e45dd23b7915bae2d3fcd62e161d08084d10b7b00a900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab986efb4f2f94b73a2e45dd23b7915bae2d3fcd62e161d08084d10b7b00a900->enter($__internal_ab986efb4f2f94b73a2e45dd23b7915bae2d3fcd62e161d08084d10b7b00a900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab986efb4f2f94b73a2e45dd23b7915bae2d3fcd62e161d08084d10b7b00a900->leave($__internal_ab986efb4f2f94b73a2e45dd23b7915bae2d3fcd62e161d08084d10b7b00a900_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd3536335e9e25514a328d3c6516c836edb25817d7e1c67e9814a0dd4cb90c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd3536335e9e25514a328d3c6516c836edb25817d7e1c67e9814a0dd4cb90c4d->enter($__internal_fd3536335e9e25514a328d3c6516c836edb25817d7e1c67e9814a0dd4cb90c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    404 - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_fd3536335e9e25514a328d3c6516c836edb25817d7e1c67e9814a0dd4cb90c4d->leave($__internal_fd3536335e9e25514a328d3c6516c836edb25817d7e1c67e9814a0dd4cb90c4d_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ba565530a770ca787f5ee038e7b038bde8388b92a6dd67f3ed551b7eb6460af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba565530a770ca787f5ee038e7b038bde8388b92a6dd67f3ed551b7eb6460af0->enter($__internal_ba565530a770ca787f5ee038e7b038bde8388b92a6dd67f3ed551b7eb6460af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_ba565530a770ca787f5ee038e7b038bde8388b92a6dd67f3ed551b7eb6460af0->leave($__internal_ba565530a770ca787f5ee038e7b038bde8388b92a6dd67f3ed551b7eb6460af0_prof);

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
