<?php

/* SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig */
class __TwigTemplate_516d8dff25ede5d960f96de3d4f5386c1ffc29e05c808304e53bc77071d6f02a extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf55fbebcdf3dcbbe8fcb3720c4588d35a6f1bf7059dac99cb8d185f5db5b348 = $this->env->getExtension("native_profiler");
        $__internal_cf55fbebcdf3dcbbe8fcb3720c4588d35a6f1bf7059dac99cb8d185f5db5b348->enter($__internal_cf55fbebcdf3dcbbe8fcb3720c4588d35a6f1bf7059dac99cb8d185f5db5b348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf55fbebcdf3dcbbe8fcb3720c4588d35a6f1bf7059dac99cb8d185f5db5b348->leave($__internal_cf55fbebcdf3dcbbe8fcb3720c4588d35a6f1bf7059dac99cb8d185f5db5b348_prof);

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
