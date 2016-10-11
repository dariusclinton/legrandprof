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
        $__internal_1e17892a868125c161b43ea960afb52e7040d83306db2185162d7e00fdccd284 = $this->env->getExtension("native_profiler");
        $__internal_1e17892a868125c161b43ea960afb52e7040d83306db2185162d7e00fdccd284->enter($__internal_1e17892a868125c161b43ea960afb52e7040d83306db2185162d7e00fdccd284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPAdminBundle:ProfAdmin:list_diplomes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e17892a868125c161b43ea960afb52e7040d83306db2185162d7e00fdccd284->leave($__internal_1e17892a868125c161b43ea960afb52e7040d83306db2185162d7e00fdccd284_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_38877367817ac59199af81e34d78ae01cdd5b47fe4155408cc947ac84c0a50e1 = $this->env->getExtension("native_profiler");
        $__internal_38877367817ac59199af81e34d78ae01cdd5b47fe4155408cc947ac84c0a50e1->enter($__internal_38877367817ac59199af81e34d78ae01cdd5b47fe4155408cc947ac84c0a50e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_38877367817ac59199af81e34d78ae01cdd5b47fe4155408cc947ac84c0a50e1->leave($__internal_38877367817ac59199af81e34d78ae01cdd5b47fe4155408cc947ac84c0a50e1_prof);

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
