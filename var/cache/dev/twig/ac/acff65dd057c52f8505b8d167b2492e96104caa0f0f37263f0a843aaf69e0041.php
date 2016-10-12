<?php

/* LGPAdminBundle:ProfAdmin:list_diplomes.html.twig */
class __TwigTemplate_629750305daeb460ca7da986041056e051cfa0e42a3a9e4a6a111f44121a5ba1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig", "LGPAdminBundle:ProfAdmin:list_diplomes.html.twig", 1);
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
        $__internal_13b2aa22e382940112b71528465f0b33643a9b2e95f80f1c33d05bfcc4bb7edd = $this->env->getExtension("native_profiler");
        $__internal_13b2aa22e382940112b71528465f0b33643a9b2e95f80f1c33d05bfcc4bb7edd->enter($__internal_13b2aa22e382940112b71528465f0b33643a9b2e95f80f1c33d05bfcc4bb7edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPAdminBundle:ProfAdmin:list_diplomes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13b2aa22e382940112b71528465f0b33643a9b2e95f80f1c33d05bfcc4bb7edd->leave($__internal_13b2aa22e382940112b71528465f0b33643a9b2e95f80f1c33d05bfcc4bb7edd_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_878081b8433678a9bfa9f13553da5aa90e2b533fb155b40696634a7a7fd46b8f = $this->env->getExtension("native_profiler");
        $__internal_878081b8433678a9bfa9f13553da5aa90e2b533fb155b40696634a7a7fd46b8f->enter($__internal_878081b8433678a9bfa9f13553da5aa90e2b533fb155b40696634a7a7fd46b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "diplomes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["diplome"]) {
            // line 5
            echo "        ";
            if ( !(null === $this->getAttribute($context["diplome"], "fileName", array()))) {
                // line 6
                echo "            (<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["diplome"], "webPath", array())), "html", null, true);
                echo "\" target=\"blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["diplome"], "intitule", array()), "html", null, true);
                echo "</a>)
        ";
            }
            // line 8
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diplome'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_878081b8433678a9bfa9f13553da5aa90e2b533fb155b40696634a7a7fd46b8f->leave($__internal_878081b8433678a9bfa9f13553da5aa90e2b533fb155b40696634a7a7fd46b8f_prof);

    }

    public function getTemplateName()
    {
        return "LGPAdminBundle:ProfAdmin:list_diplomes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  48 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'SonataAdminBundle:CRUD:base_list_field.html.twig' %}

{% block field %}
    {% for diplome in object.diplomes %}
        {% if diplome.fileName is not null %}
            (<a href=\"{{ asset(diplome.webPath) }}\" target=\"blank\">{{ diplome.intitule }}</a>)
        {% endif %}
    {% endfor %}
{% endblock %}
";
    }
}
