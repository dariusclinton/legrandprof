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
        $__internal_c4418dbb4be2fca80f49583ee8c22d1417ae7fb1c3daeb433b3b7be6a270b250 = $this->env->getExtension("native_profiler");
        $__internal_c4418dbb4be2fca80f49583ee8c22d1417ae7fb1c3daeb433b3b7be6a270b250->enter($__internal_c4418dbb4be2fca80f49583ee8c22d1417ae7fb1c3daeb433b3b7be6a270b250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPAdminBundle:ProfAdmin:list_diplomes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4418dbb4be2fca80f49583ee8c22d1417ae7fb1c3daeb433b3b7be6a270b250->leave($__internal_c4418dbb4be2fca80f49583ee8c22d1417ae7fb1c3daeb433b3b7be6a270b250_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_5c90257e03a090c28a04cff524ac88d5534689432cfcbd01fdee1e48f75ca0d3 = $this->env->getExtension("native_profiler");
        $__internal_5c90257e03a090c28a04cff524ac88d5534689432cfcbd01fdee1e48f75ca0d3->enter($__internal_5c90257e03a090c28a04cff524ac88d5534689432cfcbd01fdee1e48f75ca0d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_5c90257e03a090c28a04cff524ac88d5534689432cfcbd01fdee1e48f75ca0d3->leave($__internal_5c90257e03a090c28a04cff524ac88d5534689432cfcbd01fdee1e48f75ca0d3_prof);

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
