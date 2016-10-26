<?php

/* SonataAdminBundle:CRUD:list_array.html.twig */
class __TwigTemplate_3d99b59420ce8de42077b7658d6268bf1225e159036c610a104c2da06027eb26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fdf3bcbee9d153a5d087cfdcccc79f930774c1e381bd0adc2f1e68d786c1158d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdf3bcbee9d153a5d087cfdcccc79f930774c1e381bd0adc2f1e68d786c1158d->enter($__internal_fdf3bcbee9d153a5d087cfdcccc79f930774c1e381bd0adc2f1e68d786c1158d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdf3bcbee9d153a5d087cfdcccc79f930774c1e381bd0adc2f1e68d786c1158d->leave($__internal_fdf3bcbee9d153a5d087cfdcccc79f930774c1e381bd0adc2f1e68d786c1158d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_74602e66a65ec17158bec17d5c24985a2dbf8e490ea5bc114e829a83480fd6e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74602e66a65ec17158bec17d5c24985a2dbf8e490ea5bc114e829a83480fd6e7->enter($__internal_74602e66a65ec17158bec17d5c24985a2dbf8e490ea5bc114e829a83480fd6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 16
            echo "        [";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " => ";
            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
            echo "]
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_74602e66a65ec17158bec17d5c24985a2dbf8e490ea5bc114e829a83480fd6e7->leave($__internal_74602e66a65ec17158bec17d5c24985a2dbf8e490ea5bc114e829a83480fd6e7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 16,  39 => 15,  33 => 14,  18 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% for key, val in value %}
        [{{ key }} => {{ val }}]
    {% endfor %}
{% endblock %}
";
    }
}
