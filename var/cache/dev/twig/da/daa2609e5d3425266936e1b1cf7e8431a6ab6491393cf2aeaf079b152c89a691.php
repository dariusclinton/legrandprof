<?php

/* SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig */
class __TwigTemplate_bf6ffda31054347226addfdbd9bdd21d586ed4876e67715c3ec4aa07199dbeb9 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d70350c4edd9f6bde22500ad93fd54855fef4d8671a3f7523971f945b74db6d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d70350c4edd9f6bde22500ad93fd54855fef4d8671a3f7523971f945b74db6d0->enter($__internal_d70350c4edd9f6bde22500ad93fd54855fef4d8671a3f7523971f945b74db6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d70350c4edd9f6bde22500ad93fd54855fef4d8671a3f7523971f945b74db6d0->leave($__internal_d70350c4edd9f6bde22500ad93fd54855fef4d8671a3f7523971f945b74db6d0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig";
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

{% extends base_template %}
";
    }
}
