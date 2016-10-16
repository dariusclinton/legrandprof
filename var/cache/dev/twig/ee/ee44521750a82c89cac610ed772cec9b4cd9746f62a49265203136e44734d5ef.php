<?php

/* TwigBundle:Exception:error500.html.twig */
class __TwigTemplate_5ce959437e37e2ba87189146ae6d70fe0c052ba71118e3ad6e87d3574a84278a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPUserBundle::layout.html.twig", "TwigBundle:Exception:error500.html.twig", 1);
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
        $__internal_944157dd91f7e127c682d03739a18f9da3e348262bf199fb94781430085f381f = $this->env->getExtension("native_profiler");
        $__internal_944157dd91f7e127c682d03739a18f9da3e348262bf199fb94781430085f381f->enter($__internal_944157dd91f7e127c682d03739a18f9da3e348262bf199fb94781430085f381f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error500.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_944157dd91f7e127c682d03739a18f9da3e348262bf199fb94781430085f381f->leave($__internal_944157dd91f7e127c682d03739a18f9da3e348262bf199fb94781430085f381f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3fb9835cb76b9fc748da8436bace461bc244bf201ae97ffddcbb4d7c8c37723d = $this->env->getExtension("native_profiler");
        $__internal_3fb9835cb76b9fc748da8436bace461bc244bf201ae97ffddcbb4d7c8c37723d->enter($__internal_3fb9835cb76b9fc748da8436bace461bc244bf201ae97ffddcbb4d7c8c37723d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Login - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3fb9835cb76b9fc748da8436bace461bc244bf201ae97ffddcbb4d7c8c37723d->leave($__internal_3fb9835cb76b9fc748da8436bace461bc244bf201ae97ffddcbb4d7c8c37723d_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_032cd238ef78c2e95d153866a0f48a48f64a12d24aa53a0d966fa5d0076e45bb = $this->env->getExtension("native_profiler");
        $__internal_032cd238ef78c2e95d153866a0f48a48f64a12d24aa53a0d966fa5d0076e45bb->enter($__internal_032cd238ef78c2e95d153866a0f48a48f64a12d24aa53a0d966fa5d0076e45bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "
    <div class=\"content-wrapper\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-md-offset-4\">
                    <h1>Oups erreur 500 !!! <small> Une erreur est survenue sur le serveur !!!</small></h1>
                </div>
            </div>

        </div>

    </div>

";
        
        $__internal_032cd238ef78c2e95d153866a0f48a48f64a12d24aa53a0d966fa5d0076e45bb->leave($__internal_032cd238ef78c2e95d153866a0f48a48f64a12d24aa53a0d966fa5d0076e45bb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error500.html.twig";
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
    Login - {{ parent() }}
{% endblock %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}

    <div class=\"content-wrapper\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-md-offset-4\">
                    <h1>Oups erreur 500 !!! <small> Une erreur est survenue sur le serveur !!!</small></h1>
                </div>
            </div>

        </div>

    </div>

{% endblock fos_user_content %}";
    }
}
