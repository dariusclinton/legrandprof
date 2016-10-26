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
        $__internal_2834777bdd26b518a07f7002352c8c7c52c5b247d22708050f24f4381021b55f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2834777bdd26b518a07f7002352c8c7c52c5b247d22708050f24f4381021b55f->enter($__internal_2834777bdd26b518a07f7002352c8c7c52c5b247d22708050f24f4381021b55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2834777bdd26b518a07f7002352c8c7c52c5b247d22708050f24f4381021b55f->leave($__internal_2834777bdd26b518a07f7002352c8c7c52c5b247d22708050f24f4381021b55f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4e145cde9094690570c6df9da1a2ea0e9f160d9cd0abe6dd11b814e9fc7ae2ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e145cde9094690570c6df9da1a2ea0e9f160d9cd0abe6dd11b814e9fc7ae2ad->enter($__internal_4e145cde9094690570c6df9da1a2ea0e9f160d9cd0abe6dd11b814e9fc7ae2ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_4e145cde9094690570c6df9da1a2ea0e9f160d9cd0abe6dd11b814e9fc7ae2ad->leave($__internal_4e145cde9094690570c6df9da1a2ea0e9f160d9cd0abe6dd11b814e9fc7ae2ad_prof);

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
