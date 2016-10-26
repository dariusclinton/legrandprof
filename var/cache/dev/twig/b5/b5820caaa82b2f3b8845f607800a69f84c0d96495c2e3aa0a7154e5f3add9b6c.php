<?php

/* SonataAdminBundle:CRUD:show_boolean.html.twig */
class __TwigTemplate_fe29028960cccaf7f004851e4c3c22e95d7c371461d333cc38eca471bfd2f340 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_boolean.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c088e940ec7e648a476ed4608493c24f2fa8afa2e6198691396c8203c88de5f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c088e940ec7e648a476ed4608493c24f2fa8afa2e6198691396c8203c88de5f9->enter($__internal_c088e940ec7e648a476ed4608493c24f2fa8afa2e6198691396c8203c88de5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c088e940ec7e648a476ed4608493c24f2fa8afa2e6198691396c8203c88de5f9->leave($__internal_c088e940ec7e648a476ed4608493c24f2fa8afa2e6198691396c8203c88de5f9_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_884ecebf7b8b2f7de371b39f74a051a32abba3d433ddf6419c612192817d3897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_884ecebf7b8b2f7de371b39f74a051a32abba3d433ddf6419c612192817d3897->enter($__internal_884ecebf7b8b2f7de371b39f74a051a32abba3d433ddf6419c612192817d3897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "    ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 17
            echo "        <span class=\"label label-success\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            echo "</span>
    ";
        } else {
            // line 19
            echo "        <span class=\"label label-danger\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            echo "</span>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_884ecebf7b8b2f7de371b39f74a051a32abba3d433ddf6419c612192817d3897->leave($__internal_884ecebf7b8b2f7de371b39f74a051a32abba3d433ddf6419c612192817d3897_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 19,  45 => 17,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
{% spaceless %}
    {% if value %}
        <span class=\"label label-success\">{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}</span>
    {% else %}
        <span class=\"label label-danger\">{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}</span>
    {% endif %}
{% endspaceless %}
{% endblock %}
";
    }
}
