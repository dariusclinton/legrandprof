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
        $__internal_9d04a9d8a798a3f3ddea4d56a009d837b40fac410999655e3108083d1e413eff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d04a9d8a798a3f3ddea4d56a009d837b40fac410999655e3108083d1e413eff->enter($__internal_9d04a9d8a798a3f3ddea4d56a009d837b40fac410999655e3108083d1e413eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d04a9d8a798a3f3ddea4d56a009d837b40fac410999655e3108083d1e413eff->leave($__internal_9d04a9d8a798a3f3ddea4d56a009d837b40fac410999655e3108083d1e413eff_prof);

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
