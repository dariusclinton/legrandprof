<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_163b94fb60630fa898dadbf386aab2bca00255e34785a709000f968b3335a675 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b35a76465914ca9df711debda4e3aeaa16036fbf5fc808b37bbea311b8e4a047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b35a76465914ca9df711debda4e3aeaa16036fbf5fc808b37bbea311b8e4a047->enter($__internal_b35a76465914ca9df711debda4e3aeaa16036fbf5fc808b37bbea311b8e4a047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b35a76465914ca9df711debda4e3aeaa16036fbf5fc808b37bbea311b8e4a047->leave($__internal_b35a76465914ca9df711debda4e3aeaa16036fbf5fc808b37bbea311b8e4a047_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_35d299e0a71c1f24c253ffcc7e48cc394d0d83b983a8adaa13f2aaba8ba232eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d299e0a71c1f24c253ffcc7e48cc394d0d83b983a8adaa13f2aaba8ba232eb->enter($__internal_35d299e0a71c1f24c253ffcc7e48cc394d0d83b983a8adaa13f2aaba8ba232eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_35d299e0a71c1f24c253ffcc7e48cc394d0d83b983a8adaa13f2aaba8ba232eb->leave($__internal_35d299e0a71c1f24c253ffcc7e48cc394d0d83b983a8adaa13f2aaba8ba232eb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
";
    }
}
