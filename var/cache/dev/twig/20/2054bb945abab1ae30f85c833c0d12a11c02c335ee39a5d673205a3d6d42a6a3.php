<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_2829e87e3c92df3a2ebac54a4e05535f6aaf6afa64f799eeb7c82278961848cd extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0af531443123a8478484b06b1e75f666bf8a3e104991ba2d1549d123636cc3a = $this->env->getExtension("native_profiler");
        $__internal_f0af531443123a8478484b06b1e75f666bf8a3e104991ba2d1549d123636cc3a->enter($__internal_f0af531443123a8478484b06b1e75f666bf8a3e104991ba2d1549d123636cc3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0af531443123a8478484b06b1e75f666bf8a3e104991ba2d1549d123636cc3a->leave($__internal_f0af531443123a8478484b06b1e75f666bf8a3e104991ba2d1549d123636cc3a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3db925ce8a5c550e06842e21cdc71ffb512186d2bb321e6d2f0ffb245f9bff4b = $this->env->getExtension("native_profiler");
        $__internal_3db925ce8a5c550e06842e21cdc71ffb512186d2bb321e6d2f0ffb245f9bff4b->enter($__internal_3db925ce8a5c550e06842e21cdc71ffb512186d2bb321e6d2f0ffb245f9bff4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-default\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-arrow-right\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_3db925ce8a5c550e06842e21cdc71ffb512186d2bb321e6d2f0ffb245f9bff4b->leave($__internal_3db925ce8a5c550e06842e21cdc71ffb512186d2bb321e6d2f0ffb245f9bff4b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 17,  39 => 15,  33 => 14,  18 => 12,);
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
    <a class=\"btn btn-default\" href=\"{{ admin.generateObjectUrl('edit', object) }}\">
        <i class=\"fa fa-arrow-right\"></i>
        {{ 'list_select'|trans({}, 'SonataAdminBundle') }}
    </a>
{% endblock %}
";
    }
}
