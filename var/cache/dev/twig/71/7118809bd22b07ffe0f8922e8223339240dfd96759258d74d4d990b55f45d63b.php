<?php

/* TwigBundle:Exception:error403.html.twig */
class __TwigTemplate_18853483e909414ca4d36dabdd0eebf87d9c20ff4d1bbfec5e119659370b8428 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPUserBundle::layout.html.twig", "TwigBundle:Exception:error403.html.twig", 1);
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
        $__internal_80d541baf1e2490d1f2a383b1cc1090459d4bb31744b095554c9d681a0c8cd48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80d541baf1e2490d1f2a383b1cc1090459d4bb31744b095554c9d681a0c8cd48->enter($__internal_80d541baf1e2490d1f2a383b1cc1090459d4bb31744b095554c9d681a0c8cd48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error403.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80d541baf1e2490d1f2a383b1cc1090459d4bb31744b095554c9d681a0c8cd48->leave($__internal_80d541baf1e2490d1f2a383b1cc1090459d4bb31744b095554c9d681a0c8cd48_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_769eefb68dad87a82927a2a5332b4187b47737126d09dea846439d6d4ae4ca17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769eefb68dad87a82927a2a5332b4187b47737126d09dea846439d6d4ae4ca17->enter($__internal_769eefb68dad87a82927a2a5332b4187b47737126d09dea846439d6d4ae4ca17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    403 - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_769eefb68dad87a82927a2a5332b4187b47737126d09dea846439d6d4ae4ca17->leave($__internal_769eefb68dad87a82927a2a5332b4187b47737126d09dea846439d6d4ae4ca17_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4be6f8761770d0474b3371953b9c7559935a262dc2b3ef6990edee1a766190f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4be6f8761770d0474b3371953b9c7559935a262dc2b3ef6990edee1a766190f0->enter($__internal_4be6f8761770d0474b3371953b9c7559935a262dc2b3ef6990edee1a766190f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "
    <div class=\"content-wrapper\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-md-offset-4\">
                    <h1>Oups erreur 403 !!! <small>Vous n'avez pas les droits d'accès à cette ressource !!!</small></h1>
                </div>
            </div>

        </div>

    </div>

";
        
        $__internal_4be6f8761770d0474b3371953b9c7559935a262dc2b3ef6990edee1a766190f0->leave($__internal_4be6f8761770d0474b3371953b9c7559935a262dc2b3ef6990edee1a766190f0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error403.html.twig";
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
    403 - {{ parent() }}
{% endblock %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}

    <div class=\"content-wrapper\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-md-offset-4\">
                    <h1>Oups erreur 403 !!! <small>Vous n'avez pas les droits d'accès à cette ressource !!!</small></h1>
                </div>
            </div>

        </div>

    </div>

{% endblock fos_user_content %}";
    }
}
