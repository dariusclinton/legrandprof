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
        $__internal_ebc32daf88e7add21e4c5f0bb55c9a7748a314ebb18621c922670562cd9fda88 = $this->env->getExtension("native_profiler");
        $__internal_ebc32daf88e7add21e4c5f0bb55c9a7748a314ebb18621c922670562cd9fda88->enter($__internal_ebc32daf88e7add21e4c5f0bb55c9a7748a314ebb18621c922670562cd9fda88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebc32daf88e7add21e4c5f0bb55c9a7748a314ebb18621c922670562cd9fda88->leave($__internal_ebc32daf88e7add21e4c5f0bb55c9a7748a314ebb18621c922670562cd9fda88_prof);

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
