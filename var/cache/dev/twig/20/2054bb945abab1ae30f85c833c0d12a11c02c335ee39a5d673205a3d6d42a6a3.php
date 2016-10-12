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
        $__internal_3b6ee74194d6f14c1fc988fb4fec5a2850ebf6d26a9a38110ac8b0dbb4505365 = $this->env->getExtension("native_profiler");
        $__internal_3b6ee74194d6f14c1fc988fb4fec5a2850ebf6d26a9a38110ac8b0dbb4505365->enter($__internal_3b6ee74194d6f14c1fc988fb4fec5a2850ebf6d26a9a38110ac8b0dbb4505365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b6ee74194d6f14c1fc988fb4fec5a2850ebf6d26a9a38110ac8b0dbb4505365->leave($__internal_3b6ee74194d6f14c1fc988fb4fec5a2850ebf6d26a9a38110ac8b0dbb4505365_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_fa240714394b925cdf79ac0861b82040f02e28d04009e1218c1e941c294a92ba = $this->env->getExtension("native_profiler");
        $__internal_fa240714394b925cdf79ac0861b82040f02e28d04009e1218c1e941c294a92ba->enter($__internal_fa240714394b925cdf79ac0861b82040f02e28d04009e1218c1e941c294a92ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_fa240714394b925cdf79ac0861b82040f02e28d04009e1218c1e941c294a92ba->leave($__internal_fa240714394b925cdf79ac0861b82040f02e28d04009e1218c1e941c294a92ba_prof);

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