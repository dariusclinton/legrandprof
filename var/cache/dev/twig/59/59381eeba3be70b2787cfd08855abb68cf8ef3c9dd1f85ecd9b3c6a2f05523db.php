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
        $__internal_31db39c30dc8fd3e7e0df3e65c47c6dceafb338358ff528612644f1bf7d70c8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31db39c30dc8fd3e7e0df3e65c47c6dceafb338358ff528612644f1bf7d70c8e->enter($__internal_31db39c30dc8fd3e7e0df3e65c47c6dceafb338358ff528612644f1bf7d70c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31db39c30dc8fd3e7e0df3e65c47c6dceafb338358ff528612644f1bf7d70c8e->leave($__internal_31db39c30dc8fd3e7e0df3e65c47c6dceafb338358ff528612644f1bf7d70c8e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fcaf02f29594ef880fbaa6b3fc35acae249a14253b06b022440c981f4ce47bc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcaf02f29594ef880fbaa6b3fc35acae249a14253b06b022440c981f4ce47bc6->enter($__internal_fcaf02f29594ef880fbaa6b3fc35acae249a14253b06b022440c981f4ce47bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    404 - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_fcaf02f29594ef880fbaa6b3fc35acae249a14253b06b022440c981f4ce47bc6->leave($__internal_fcaf02f29594ef880fbaa6b3fc35acae249a14253b06b022440c981f4ce47bc6_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a01ad23ea975e696b8d57051f24f9f11093d3437933a80a57ec767b4ab0b8c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a01ad23ea975e696b8d57051f24f9f11093d3437933a80a57ec767b4ab0b8c33->enter($__internal_a01ad23ea975e696b8d57051f24f9f11093d3437933a80a57ec767b4ab0b8c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_a01ad23ea975e696b8d57051f24f9f11093d3437933a80a57ec767b4ab0b8c33->leave($__internal_a01ad23ea975e696b8d57051f24f9f11093d3437933a80a57ec767b4ab0b8c33_prof);

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
