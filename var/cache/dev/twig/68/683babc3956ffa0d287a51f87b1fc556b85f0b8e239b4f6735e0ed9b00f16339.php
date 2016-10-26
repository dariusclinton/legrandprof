<?php

/* LGPAdminBundle:ProfAdmin:list_image.html.twig */
class __TwigTemplate_38dcd204856cbc0e3296dcd9e4406e8f561ebc26984d924673442e2db525503f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig", "LGPAdminBundle:ProfAdmin:list_image.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17380a615da9cfb17ec8b257550d5ec994c1c0a24bd4fedb89c467302fdfef17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17380a615da9cfb17ec8b257550d5ec994c1c0a24bd4fedb89c467302fdfef17->enter($__internal_17380a615da9cfb17ec8b257550d5ec994c1c0a24bd4fedb89c467302fdfef17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPAdminBundle:ProfAdmin:list_image.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17380a615da9cfb17ec8b257550d5ec994c1c0a24bd4fedb89c467302fdfef17->leave($__internal_17380a615da9cfb17ec8b257550d5ec994c1c0a24bd4fedb89c467302fdfef17_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_5a0a40434dd84d006060d7994993c38a9225cd75939df80da7f02674c613a7c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a0a40434dd84d006060d7994993c38a9225cd75939df80da7f02674c613a7c8->enter($__internal_5a0a40434dd84d006060d7994993c38a9225cd75939df80da7f02674c613a7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "image", array()))) {
            // line 5
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "image", array()), "webPath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "image", array()), "imageName", array()), "html", null, true);
            echo "\"
             class=\"img-circle img-responsive\">
    ";
        }
        
        $__internal_5a0a40434dd84d006060d7994993c38a9225cd75939df80da7f02674c613a7c8->leave($__internal_5a0a40434dd84d006060d7994993c38a9225cd75939df80da7f02674c613a7c8_prof);

    }

    public function getTemplateName()
    {
        return "LGPAdminBundle:ProfAdmin:list_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'SonataAdminBundle:CRUD:base_list_field.html.twig' %}

{% block field %}
    {% if object.image is not null %}
        <img src=\"{{ asset(object.image.webPath) }}\" alt=\"{{ object.image.imageName }}\"
             class=\"img-circle img-responsive\">
    {% endif %}
{% endblock %}
";
    }
}
