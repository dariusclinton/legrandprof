<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_54bb253799d3c2504b2134fa53c90edcfcbd2ee886f25e6d3e6a30e2ce671d09 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0dbfc19c814589eaac436d77ee5eb91c45c6b9d4dea2d4bdc883130a9aaaacf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dbfc19c814589eaac436d77ee5eb91c45c6b9d4dea2d4bdc883130a9aaaacf7->enter($__internal_0dbfc19c814589eaac436d77ee5eb91c45c6b9d4dea2d4bdc883130a9aaaacf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dbfc19c814589eaac436d77ee5eb91c45c6b9d4dea2d4bdc883130a9aaaacf7->leave($__internal_0dbfc19c814589eaac436d77ee5eb91c45c6b9d4dea2d4bdc883130a9aaaacf7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
";
    }
}
