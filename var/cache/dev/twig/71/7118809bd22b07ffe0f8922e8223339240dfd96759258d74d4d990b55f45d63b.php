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
        $__internal_431b80685646ec20d273730d67ec529909c456fa23cc13a5c53daa2b434c8450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_431b80685646ec20d273730d67ec529909c456fa23cc13a5c53daa2b434c8450->enter($__internal_431b80685646ec20d273730d67ec529909c456fa23cc13a5c53daa2b434c8450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error403.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_431b80685646ec20d273730d67ec529909c456fa23cc13a5c53daa2b434c8450->leave($__internal_431b80685646ec20d273730d67ec529909c456fa23cc13a5c53daa2b434c8450_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c66f3d001c27ac49fe2912133e2ec995565a7d158537b9574c23311491db7ba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c66f3d001c27ac49fe2912133e2ec995565a7d158537b9574c23311491db7ba7->enter($__internal_c66f3d001c27ac49fe2912133e2ec995565a7d158537b9574c23311491db7ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    403 - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c66f3d001c27ac49fe2912133e2ec995565a7d158537b9574c23311491db7ba7->leave($__internal_c66f3d001c27ac49fe2912133e2ec995565a7d158537b9574c23311491db7ba7_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_643b04b811d07ed2cb52916396ee1c14c99ddc218bdf4418194e31b8edfd10ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_643b04b811d07ed2cb52916396ee1c14c99ddc218bdf4418194e31b8edfd10ad->enter($__internal_643b04b811d07ed2cb52916396ee1c14c99ddc218bdf4418194e31b8edfd10ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_643b04b811d07ed2cb52916396ee1c14c99ddc218bdf4418194e31b8edfd10ad->leave($__internal_643b04b811d07ed2cb52916396ee1c14c99ddc218bdf4418194e31b8edfd10ad_prof);

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
